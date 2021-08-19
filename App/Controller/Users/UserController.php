<?php

namespace App\Controller\Users;

use App\Models\UserSql;
use App\Validation\Validator;
use App\Controller\Controller;

class UserController extends Controller {
    public function connectUser() {

        return $this->view('auth/userForm');
    }
    public function sendDataUserConnect(){
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'username' => 'required','min:3',
            'password' => 'required',
        ]);
        if ($errors) {
            $_SESSION['errors'] = $errors;
            header('Location: /projetZero/admin/connect');
            exit();
        }
        $user = (new UserSql($this->getDB()))->getByUsername($_POST['username']);
       if(password_verify($_POST["password"],$user->password)){
           $_SESSION['auth'] = (int)$user->admin;
           return header("Location: /projetZero/admin/panel?success=true");
       }else{
           return header('Location: /projetZero/admin/connect');
        }

    }
    public function CreateUser(){
        $user = (new UserSql($this->getDB()))->create($_POST);
        if($user){
            return header("Location: /projetZero/");
        }else{
            return header('Location: /projetZero/admin/connect');
         }
    }

    public function destroySession(){
        session_destroy();
        return header('Location: /projetZero/');
    }
}   