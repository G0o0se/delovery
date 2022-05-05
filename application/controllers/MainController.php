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
        $goods = Good::FindByCategory(mb_strimwidth($_SERVER['REQUEST_URI'], 6, 10));
        $categories = Category::findAll();
        $this->view->render('Товары', ['goods' => $goods, 'category' => $categories]);
    }

    public function shopAction()
    {
        $this->view->render('Корзина');
    }
}
