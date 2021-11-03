<?php

namespace application\controllers;

use application\core\Controller;
use application\models\goods\Good;

class MainController extends Controller
{
    public function indexAction()
    {
        $goods = Good::findAll();
        $this->view->render('Главная', ['goods' => $goods]);
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
