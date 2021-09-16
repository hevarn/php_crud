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
        $user = (new UserSql($this->getDB()))->getByUsername($_POST['username']);
        if (password_verify($_POST["password"], $user->password)) {
            if(!session_start()) {
                $_SESSION['auth'] = (int)$user->admin;
                if ($_SESSION['auth'] == 0) {
                    ini_set('session.name', 'connexion');
                    session_name('user');
                    session_set_cookie_params('connexion', 'user', time() + 60 * 60 * 24, null, null, null, true);
                    session_start();
                    return header('Location: /projetZero/posts');
                }
                ini_set('session.name', 'connexion');
                    $_SESSION['auth'] = (int)$user->admin;
                session_name('admin');
                session_set_cookie_params('connexion', 'user', time() + 60 * 60 * 24, null, null, null, true);
                session_start();
                return header("Location: /projetZero/admin/panel?success");
            }
        } else {
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
            session_name('user');
            setcookie('connexion', 'user', time() + 60 * 60 * 24, '/', null, null, true);
            var_dump(session_name('user'));
            var_dump(setcookie('connexion', 'user', time() + 60 * 60 * 24, null, null, null, true)); die();
            return header('Location: /projetZero/posts');
        }
        return header('Location: /projetZero/admin/connect');
        
        
    }

    public function destroySession()
    {
        session_destroy();
        return header('Location: /projetZero/');
    }
}
