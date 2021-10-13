<?php

namespace App\Controller\Users;
require_once 'client_identify.php';

use GuzzleHttp\Client;
use App\Models\UserSql;
use App\Validation\Validator;
use App\Controller\Controller;


class UserController extends Controller
{
    public function connectUser()
    {

        return $this->view('auth/userForm');
    }

    /**
     * affiche le profile de l'utilisateur
     */
    public function UserProfile(){
        $this->isUserRegistered();
        return $this->view('user/userProfile');
    }

    public function sendDataUserConnect()
    {
        $user = (new UserSql($this->getDB()))->getByUsername($_POST['username']);
        if (password_verify($_POST["password"], $user->password)) {
            $_SESSION['auth'] = (int)$user->admin;
            if($_SESSION['auth'] === 1){
                return header("Location: /projetZero/admin/panel?success");
            }
            return $this->view('user/userProfile' ,compact('user'));
        } else {
            unset($_SESSION['errors']);
            $errors[][] = 'le mot de passe ou le nom d\'utilisateur est invalide';
            $_SESSION['errors'][] = $errors;
            return header('Location: /projetZero/admin/connect');
        }
    }

    public function CreateUser()
    {
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'username' => ['required', 'min:3', 'notSpecialCaractere'],
            'email' => ['required','@'],
            'password' => ['required', 'check', 'min:8'],
            'confirmPassword' => ['same']
        ]);
        if ($errors) {
            $_SESSION['errors'][] = $errors;
            header('Location: /projetZero/admin/connect');
            exit();
        }
        $user = (new UserSql($this->getDB()))->create($_POST);
        if ($user) {
            session_id('user');
            setcookie('connexion', 'user', time() + 60 * 60 * 24, '/', null, null, true);
            var_dump(session_id('user')); die();
            return header('Location: /projetZero/posts');
        }
        return header('Location: /projetZero/admin/connect');
        
        
    }

    public function destroySession()
    {
        if(isset($_SESSION['auth']) && $_SESSION['auth'] === 2){
            // $client = new Client([
            //     'timeout' =>2.0,
            //     'verify' => CERTIFICATE.'cacert.pem',
            // ]);
            // try{
            //     $response = $client->request('GET', 'https://oauth2.googleapis.com/revoke?token='.$_SESSION['token']);
                session_destroy();
                return header('Location: /projetZero/');
            // }catch(\GuzzleHttp\Exception\ClientException $exception){
            //     dd($exception->getMessage());
            //}
        }
        session_destroy();
        return header('Location: /projetZero/');
    }

    
    
}
