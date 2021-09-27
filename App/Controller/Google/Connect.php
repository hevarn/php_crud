<?php

namespace App\Controller\Google;
use GuzzleHttp\Client;
use App\Models\UserSql;
use App\Controller\Controller;
require_once 'client_identify.php';

class Connect extends Controller 
{
    public function gConnect()
    {
        if (isset($_GET['code'])) {
            $client = new Client([
                'timeout' =>2.0,
                'verify' => CERTIFICATE.'cacert.pem',
            ]);
            try{
                $response = $client->request('GET', 'https://accounts.google.com/.well-known/openid-configuration');
                $JSON = json_decode((string)$response->getBody());
                $tokenEndpoint = $JSON->token_endpoint;
                $userinfoEndpoint = $JSON->userinfo_endpoint;
                $response = $client->request('POST', $tokenEndpoint,[
                    'form_params' =>[
                        'code' => $_GET['code'],
                        'client_id' => CLIENT_ID,
                        'client_secret' => CLIENT_SECRET,
                        'redirect_uri' => 'http://localhost:8888/projetZero/connect/googlelogin',
                        'grant_type' => 'authorization_code'
                        ]
                    ]);
                    $accessToken = json_decode($response->getBody())->access_token;
                    $_SESSION['token'] = $accessToken;
                    $response = $client->request('GET', $userinfoEndpoint,[
                        'headers' => [
                            'Authorization' => 'Bearer'.$accessToken
                            ]
                        ]);
                        $response = json_decode($response->getBody());
                if ($response->email_verified === true) {
                    $userGoogle = (new UserSql($this->getDB()))->createUserIdentifyByGoogle((array)$response);
                    if ($userGoogle === true) {
                        $user = (new UserSql($this->getDB()))->getUserByGoogle($response->email);
                        $_SESSION['auth'] = (int)$user->user;
                        session_start();
                        $_SESSION['email'] = $response->email;
                        $_SESSION['picture'] = $response->picture;
                        header("Location: /projetZero/");
                        exit;
                    }
                }
            } catch(\GuzzleHttp\Exception\ClientException $exception){
                dd($exception->getMessage());
            }
            
        }
    }
       
}
