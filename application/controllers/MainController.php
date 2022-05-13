<?php

namespace application\controllers;

use application\core\Controller;
use application\models\categories\Category;
use application\models\goods\Good;
use application\models\news\News;


class MainController extends Controller
{
    public function indexAction()
    {
        $categories = Category::findAll();
        $news = News::findAll();
        $this->view->render('Головна - RockDelivery', ['category' => $categories, 'news' => $news]);
    }

    public function restAction()
    {
        $url = mb_strimwidth($_SERVER['REQUEST_URI'], 6, 10);
        $goods = Good::FindByCategory($url);
        $categories = Category::findAll();
        $this->view->render('Страви - RockDelivery', ['goods' => $goods, 'category' => $categories]);
    }

    public function shopAction()
    {
        $this->view->render('Кошик - RockDelivery');
    }

    public function contactAction()
    {
        $this->view->render('Контакти - RockDelivery');
    }
}
