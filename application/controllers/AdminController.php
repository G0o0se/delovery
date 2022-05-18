<?php

namespace application\controllers;

use application\core\Controller;
use application\models\categories\Category;
use application\models\goods\Good;
use application\models\news\News;
use PHP_CodeSniffer\Util\Cache;

class AdminController extends Controller
{
    public function goodsAction()
    {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $category = $_POST['categories'];
        $image = $_POST['image'];

        if (isset($_POST["search"])) {
            $search_q = $_POST['search_q'];
            $goods = Good::searchGoods($search_q);
        } else {
            $goods = Good::findAll();
        }

        if (isset($_POST["id"])) {
            $id = $_POST["id"];
            Good::deleteById($id);
            header('Location: /admin/goods');
        }

        if (isset($_POST["add"])) {
            if( $category == '1'){
                header('Location: /admin/goods');
            } else {
                $uploaddir = 'public/img/';
                $date = date("Y-m-d-H-i-s");
                $uploadfile = $uploaddir . $date . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                $image = $date . $_FILES['image']['name'];

                Good::AddGood($name, $price, $description, $category, $image);
            }
            header('Location: /admin/goods');
        }
        $category = Category::findAll();

        $this->view->render('Адмін панель', ['category' => $category, 'goods' => $goods]);
    }

    public function goodsUpdateAction()
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
            $category = $_POST['categories'];
            $image = $_POST['image'];
            $uploaddir = 'public/img/';

            $date = date("Y-m-d-H-i-s");
            if( $category == '1'){
                $category = $_POST['defaultcategory'];
                if($_FILES['image']['name'] == null){
                    $image = $_POST['imagedefault'];
                } else {
                    $uploadfile = $uploaddir . $date . basename($_FILES['image']['name']);
                    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                    $image = $date . $_FILES['image']['name'];
                }
            } else {
                if($_FILES['image']['name'] == null){
                    $image = $_POST['imagedefault'];
                } else {
                    $uploadfile = $uploaddir . $date . basename($_FILES['image']['name']);
                    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                    $image = $date . $_FILES['image']['name'];
                }
            }
            Good::updateGoods($name, $description, $price, $category, $image, $id);
            header('Location: /admin/goods');
        }

        $category = Category::findAll();

        $this->view->render('Адмін панель', ['category' => $category, 'goods' => $goods]);
    }

    public function categoryAction()
    {
        $name = $_POST['name'];
        $image = $_POST['image'];
        $cookTime = $_POST['cookTime'];
        $url = $_POST['url'];
        $file = 'application/config/routes.php';

        if (isset($_POST["search"])) {
            $search_q = $_POST['search_q'];
            $category = Category::searchCategory($search_q);
        } else {
            $category = Category::findAll();
        }

        if (isset($_POST["id"])) {
            $id = $_POST["id"];

            if (strpos(file_get_contents("$file"), "    'rest/" . $url . "' => [
        'controller' => 'main',
        'action' => 'rest',
    ]," . "\n\n")) {
                $f = file($file);
                array_splice($f, 8, -3);
                file_put_contents($file, $f);
            }

            Category::deleteById($id);
            header('Location: /admin/category');
        }

        if (isset($_POST["add"])) {


            if (strpos(file_get_contents("$file"), "/" . "$url" . "'")) {
            } else {
                $data = "    'rest/" . $url . "' => [
        'controller' => 'main',
        'action' => 'rest',
    ]," . "\n\n";

                $f = file($file);
                array_splice($f, 8, 0, $data);
                file_put_contents($file, $f);

                $uploaddir = 'public/img/';
                $date = date("Y-m-d-H-i-s");
                $uploadfile = $uploaddir . $date . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                $image = $date . $_FILES['image']['name'];

                Category::AddCategory($name, $image, $cookTime, $url);
                header('Location: /admin/category');
            }
        }
        $this->view->render('Адмін панель', ['category' => $category]);
    }

    public function categoryUpdateAction()
    {
        $id = $_POST["id"];
        $name = $_POST['name'];
        $image = $_POST['image'];
        $cookTime = $_POST['cookTime'];
        $url = $_POST['url'];
        $uploaddir = 'public/img/';
        $file = 'application/config/routes.php';

        if (isset($_POST["edit"])) {
            $id = $_POST["edit"];
            $category = Category::findById($id);
        }

        if (isset($_POST["editing"])) {

            $date = date("Y-m-d-H-i-s");
            if (strpos(file_get_contents("$file"), "/" . "$url" . "'")) {
                if($_FILES['image']['name'] == null){
                    $image = $_POST['imagedefault'];
                } else {
                    $uploadfile = $uploaddir . $date . basename($_FILES['image']['name']);
                    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                    $image = $date . $_FILES['image']['name'];
                }
            } else {
                $data = "    'rest/" . $url . "' => [
        'controller' => 'main',
        'action' => 'rest',
    ]," . "\n\n";

                $f = file($file);
                array_splice($f, 8, 0, $data);
                file_put_contents($file, $f);
            }

            if($_FILES['image']['name'] == null){
                $image = $_POST['imagedefault'];
            } else {
                $uploadfile = $uploaddir . $date . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                $image = $date . $_FILES['image']['name'];
            }

            Category::updateCategory($name, $image, $cookTime, $url, $id);
            header('Location: /admin/category');
        }
        $this->view->render('Адмін панель', ['category' => $category]);
    }

    public function newsAction()
    {
        if (isset($_POST["search"])) {
            $search_q = $_POST['search_q'];
            $news = News::searchNews($search_q);
        } else {
            $news = News::findAll();
        }

        $name = $_POST['name'];
        $description = $_POST['description'];
        $image = $_POST['image'];
        $date = date("Y-m-d-H-i-s");
        $uploaddir = 'public/img/';
        $file = 'application/config/routes.php';

        if (isset($_POST["add"])) {
            $uploadfile = $uploaddir . $date . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
            $image = $date . $_FILES['image']['name'];

            News::AddNews($name, $date, $description, $image);
            header('Location: /admin/news');
        }

        if (isset($_POST["id"])) {
            $id = $_POST["id"];
            News::deleteById($id);
            header('Location: /admin/news');
        }

        $this->view->render('Адмін панель', ['news' => $news]);
    }

    public function newsUpdateAction()
    {
        if (isset($_POST["editing"])) {
            $id = $_POST["id"];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $image = $_POST['image'];

            $uploaddir = 'public/img/';
            $date = date("Y-m-d-H-i-s");

            if($_FILES['image']['name'] == null){
                $image = $_POST['imagedefault'];
            } else {
                $uploadfile = $uploaddir . $date . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                $image = $date . $_FILES['image']['name'];
            }

            News::updateNews($name, $description, $image, $id);
            header('Location: /admin/news');
        }

        if (isset($_POST["edit"])) {
            $id = $_POST["edit"];
            $news = News::findById($id);
        }
        $this->view->render('Адмін панель', ['news' => $news]);
    }
}
