<?php

namespace application\controllers;

use application\core\Controller;
use application\models\users\User;

class AccountController extends Controller
{
    public function loginAction()
    {
        $this->view->render('Вход');
    }

    public function registrationAction()
    {
        $this->view->render('Регистрация');
        if (isset($_POST["submit"])) {
            if (!empty($_POST['login']) && !empty($_POST['password'])) {
                $email = ($_POST['login']);
                $password = ($_POST['password']);
                $users = User::getByMail($email);
                if ($users->getMail() == $email) {
                    echo "Vse top";
                } else {
                    echo "Пользователь с таким логином существует!";
                }
            } else {
                echo "Заполните поля";
            }
        }
    }
}
