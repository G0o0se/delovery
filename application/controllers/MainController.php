<?php

namespace application\controllers;

use application\core\Controller;
use application\models\categories\Category;
use application\models\goods\Good;

class MainController extends Controller
{
    public function indexAction()
    {
        $categories = Category::findAll();
        $this->view->render('Главная', ['category' => $categories]);
    }

    public function restAction()
    {
        $goods = Good::findAll();
        $this->view->render('Товары', ['good' => $goods]);
    }

    public function shopAction()
    {
        $this->view->render('Корзина');
    }
}
