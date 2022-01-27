<?php

namespace application\controllers;

use application\core\Controller;
use application\models\goods\Good;

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
        $this->view->render('Admin', ['good' => $goods]);
    }

    public function updateAction()
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
        $this->view->render('Edit good', ['good' => $goods]);
    }
}
