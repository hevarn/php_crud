<?php

namespace App\Controller\Users;

use App\Controller\Controller;
use App\Models\UserSql;

class UserController extends Controller {
    public function connectUser() {

        return $this->view('auth/userForm');
    }
    public function sendDataUserConnect(){
        $user = (new UserSql($this->getDB()))->getByUsername($_POST['username']);
       if(password_verify($_POST["password"],$user->password)){
           $_SESSION['auth'] = (int)$user->admin;
           return header("Location: /projetZero/admin/panel?success=true");
       }else{
           return header('Location: /projetZero/admin/connect');
        }

    }
    public function destroySession(){
        session_destroy();
        return header('Location: /projectZero/admin/connect');
    }
}   