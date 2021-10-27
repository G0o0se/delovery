<?php

namespace application\controllers;

use application\models\articles\Article;
use application\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $articles = Article::findAll();
        $this->view->render('Главная', ['articles' => $articles]);
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
