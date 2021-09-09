<?php

namespace App\Controller\Users;

use App\Models\UserSql;
use App\Validation\Validator;
use App\Controller\Controller;

class UserController extends Controller
{
    public function connectUser()
    {

        return $this->view('auth/userForm');
    }
    public function sendDataUserConnect()
    {
        // $value = trim($_POST['username']);
        
        // if (!isset($value) || is_null($value) || empty($value)) {
        //     $errors['utilisateur'][] = "le nom d'utlisateur et requis ";
        //     $_SESSION['error'] = $errors;
        //     header('Location: /projetZero/admin/connect');
        //     exit();
        // }
        
        // if (preg_match('/(?=.*[@#\-_$%^&+=§!\?])/', $value) == 0) {
        //     $errors['utilisateur'][] = "le nom d'utilisateur ne doit pas contenir de caractères spéciaux.";
        //     $_SESSION['error'] = $errors;
        //     header('Location: /projetZero/admin/connect');
        //     exit();
        // }
        // if (strlen($value) > 20) {
        //     $errors['utilisateur'][] = "le nom d'utilisateur ne doit pas dépasser 20 caractères";
        //     $_SESSION['error'] = $errors;
        //     header('Location: /projetZero/admin/connect');
        //     exit();
        // }
        
        $user = (new UserSql($this->getDB()))->getByUsername($_POST['username']);
        if (password_verify($_POST["password"], $user->password)) {
            $_SESSION['auth'] = (int)$user->admin;
            return header("Location: /projetZero/admin/panel?success");
        } else {
            return header('Location: /projetZero/admin/connect');
        }
    }

    public function CreateUser()
    {
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'username' => ['required', 'min:3', 'notSpecialCaractere'],
            'email' => ['@'],
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
            return header("Location: /projetZero/");
        } else {
            return header('Location: /projetZero/admin/connect');
        }
    }

    public function destroySession()
    {
        session_destroy();
        return header('Location: /projetZero/');
    }
}
