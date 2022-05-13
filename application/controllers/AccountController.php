<?php

namespace application\controllers;

use application\core\Controller;
use application\models\users\User;

class AccountController extends Controller
{
    public function loginAction()
    {
        if (isset($_SESSION['logged_user'])) {
            header('Location: /');
        } else {
            if (isset($_POST["submit"])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                if (empty(trim($_POST["email"]))) {
                    $err = "Будь ласка, заповніть усі поля";
                } else {
                    $users = User::getByLogin($email, $password);
                    $name = User::NameByEmail($email);
                    if ($users->count == '1') {
                        $_SESSION['logged_user'] = $name -> name;
                        header('Location: /');
                    } else {
                        $err = 'Невірний пароль або електронна адреса';
                    }
                }
            }
        }
        $this->view->render('Вхід', compact("err"));
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
                    $err = 'Паролі не ідентичний';
                } else {
                    $mail = User::getByEmail($email);
                    if ($mail->count == '1') {
                        $err = 'Електронна адреса вже зареєстрована';
                    } else {
                        $add = User::AddUser($name, $email, $password);
                        header('Location: /');
                    }
                }
            } else {
                $err = 'Будь ласка, заповніть усі поля';
            }
        }

        $this->view->render('Регістрація', compact("err"));
    }

    public function logoutAction()
    {
        unset($_SESSION["logged_user"]);
        header("Location:/");
    }
}
