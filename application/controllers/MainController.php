<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->view->render('Главная');
    }

    public function restAction()
    {
        $this->view->render('Товары');
    }

    public function shopAction()
    {
        $this->view->render('Корзина');
    }
}
