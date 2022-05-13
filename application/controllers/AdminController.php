<?php

namespace application\controllers;

use application\core\Controller;
use application\models\categories\Category;
use application\models\goods\Good;
use PHP_CodeSniffer\Util\Cache;

class AdminController extends Controller
{
    public function goodsAction()
    {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $image = "/public/img/goods/" . $_POST['category'] . "/" . $_POST['image'];

        if (isset($_POST["search"])) {
            $search_q = $_POST['search_q'];
            $goods = Good::search($search_q);
        } else {
            $goods = Good::findAll();
        }

        if (isset($_POST["id"])) {
            $id = $_POST["id"];
            Good::deleteById($id);
            header('Location: /admin/goods');
        }

        if (isset($_POST["add"])) {
            Good::AddGood($name, $price, $description, $category, $image);
            header('Location: /admin/goods');
        }
        $this->view->render('Адмін панель', ['goods' => $goods]);
    }

    public function goodUpdateAction()
    {
        if (isset($_POST["edit"])) {
            $id = $_POST["edit"];
            $goods = Good::findById($id);
        }

        if (isset($_POST["editing"])) {
            $id = $_POST["id"];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $category = $_POST['category'];
            $image = $_POST['image'];
            Good::updateById($name, $description, $price, $category, $image, $id);
            header('Location: /admin/goods');
        }
        $this->view->render('Адмін панель', ['goods' => $goods]);
    }

    public function categoryAction(){
        $name = $_POST['name'];
        $image = "/public/img/category/" . $_POST['image'];
        $time = $_POST['time'];
        $url = $_POST['url'];

        if (isset($_POST["search"])) {
            $search_q = $_POST['search_q'];
            $category = Category::search($search_q);
        } else {
            $category = Category::findAll();
        }

        if (isset($_POST["id"])) {
            $id = $_POST["id"];
            Category::deleteById($id);
            header('Location: /admin/category');
        }

        if (isset($_POST["add"])) {
            Category::AddCategory($name, $image, $time, $url);
            header('Location: /admin/category');
        }
        $this->view->render('Адмін панель', ['category' => $category]);
    }

    public function categoryUpdateAction(){
        $this->view->render('Адмін панель', ['goods' => $goods]);
    }

    public function newsAction(){
        $this->view->render('Адмін панель', ['goods' => $goods]);
    }

    public function newsUpdateAction(){
        $this->view->render('Адмін панель', ['goods' => $goods]);
    }
}
