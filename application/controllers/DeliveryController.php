<?php

namespace application\controllers;

use application\core\Controller;
use application\models\orders\Order;


class DeliveryController extends Controller
{
    public function deliveryAction()
    {
        if ($_SESSION['user']['is_admin'] == '2') {
            $order = Order::FindAllID();
            $this->view->render('Панель кур\'єра', ['order' => $order]);
        } else {
            header('Location: /');
        }
    }

    public function deliveryUpdateAction()
    {
        if ($_SESSION['user']['is_admin'] == '2') {
            if (isset($_POST["edit"])) {
                $id = $_POST["edit"];
                $order = Order::FindAllByID($id);
            }

            if (isset($_POST["editing"])) {
                $id = $_POST["editing"];
                $status = $_POST['status'];

                Order::updateDelivery($status, $id);
                header('Location: /delivery/order');
            }

            $this->view->render('Панель кур\'єра', ['order' => $order]);
        } else {
            header('Location: /');
        }
    }
}