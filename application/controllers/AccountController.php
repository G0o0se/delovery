<?php

namespace application\controllers;

use application\core\Controller;
use application\models\users\User;

class AccountController extends Controller
{
    public function loginAction()
    {
        if (isset($_POST["submit"])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (empty(trim($_POST["email"]))) {
                $err = "Please enter fields";
            } else {
                $users = User::getByLogin($email, $password);
                if ($users->count == '1') {
                    header('Location: /');
                } else {
                    $err = 'Invalid password or email';
                }
            }
        }
        $this->view->render('Вход', compact("err"));
    }

    public function registrationAction()
    {
        if (isset($_POST["submit"])) {
            if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['accpassword'])) {
                $name = ($_POST['name']);
                $email = ($_POST['email']);
                $password = ($_POST['password']);
                $accpassword = ($_POST['accpassword']);

                if ($accpassword != $password) {
                    $err = 'Password not identical';
                } else {
                    $mail = User::getByEmail($email);
                    if ($mail->count == '1') {
                        $err = 'Email already registered';
                    } else {
                        $add = User::AddUser($name, $email, $password);
                        header('Location: /');
                    }
                }
            } else {
                $err = 'Please enter fields';
            }
        }

        $this->view->render('Регистрация', compact("err"));
    }
}
