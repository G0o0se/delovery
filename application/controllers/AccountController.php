<?php

namespace application\controllers;

use application\core\Controller;
use application\models\users\User;

class AccountController extends Controller
{
    public function loginAction()
    {
        if (isset($_SESSION['user'])) {
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
                    $admin = User::AdminByEmail($email);
                    $id = User::IdByEmail($email);
                    if ($users->count == '1') {
                        $_SESSION['user']['is_admin'] = $admin -> admin;
                        $_SESSION['user']['name'] = $name -> name;
                        $_SESSION['user']['id'] = $id->ids;
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
            if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['accpassword'])) {
                $fname = ($_POST['fname']);
                $lname = ($_POST['lname']);
                $email = ($_POST['email']);
                $password = ($_POST['password']);
                $accpassword = ($_POST['accpassword']);
                $number = ($_POST['number']);
                $adress = "";

                if ($accpassword != $password) {
                    $err = 'Паролі не ідентичний';
                } else {
                    $mail = User::getByEmail($email);
                    if ($mail->count == '1') {
                        $err = 'Електронна адреса вже зареєстрована';
                    } else {
                        User::AddUser($fname, $lname, $email, $password, $number, $adress);

                        $users = User::getByLogin($email, $password);
                        $name = User::NameByEmail($email);
                        $admin = User::AdminByEmail($email);
                        $id = User::IdByEmail($email);
                        if ($users->count == '1') {
                            $_SESSION['user']['is_admin'] = $admin -> admin;
                            $_SESSION['user']['name'] = $name -> name;
                            $_SESSION['user']['id'] = $id->ids;
                            header('Location: /');
                        }
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
        unset($_SESSION['user']);
        unset($_SESSION['cart_coast']);
        header("Location:/");
    }
}
