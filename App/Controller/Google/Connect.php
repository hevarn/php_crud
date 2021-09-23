<?php

namespace App\Controller\Google;
use GuzzleHttp\Client;

class Connect
{
    public function gConnect()
    {
        var_dump('rpout');die();

        if (isset($_GET['code'])) {
            $client = new Client([
                'timeout' =>2.0,
                'verify' => CERTIFICATE.'cacert.pem',
            ]);
            try{
                $response = $client->request('GET', 'https://accounts.google.com/.well-known/openid-configuration');
                $discoveryJSON = json_decode((string)$response->getBody());
                $tokenEndpoint = $discoveryJSON->token_endpoint;
                $userinfoEndpoint = $discoveryJSON->userinfo_endpoint;
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
                $response = $client->request('GET', $userinfoEndpoint,[
                    'headers' => [
                        'Authorization' => 'Bearer'.$accessToken
                    ]
                ]);
                $response = json_decode($response->getBody());
                if ($response->email_verified === true) {
                    session_start();
                    $_SESSION['email'] = $response->email;
                    header("Location: /projetZero/");
                    exit;
                }
            } catch(\GuzzleHttp\Exception\ClientException $exception){
                dd($exception->getMessage());
            }
            
        }
    }
       
}
