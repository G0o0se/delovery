<?php

namespace application\controllers;

use application\core\Controller;
use application\models\goods\Good;
use application\models\orders\Order;
use application\models\orders\OrderHasGoods;
use application\models\users\User;


class ShopController extends Controller
{
    public function shopAction()
    {
        $product_id = $_SESSION['products'];
        $id = $_SESSION['user']['id'];
        $user = User::findById($id);

        if($product_id == NULL){
            $this->view->render('Кошик - RockDelivery', ['user' => $user]);
        } else {
            $ids = [];
            foreach($product_id as $key => $value) {
                $ids[]=$key;
            }
            $goods = Good::findByManyId($ids);


            $this->view->render('Кошик - RockDelivery', ['goods' => $goods, 'user' => $user]);
        }
    }

    public function shopOrderAction(){
        $user_id = $_SESSION['user']['id'];
        $amount = $_SESSION['cart_coast'];
        $status = 'Замовленно';
        $date = date("Y-m-d-H-i-s");
        $payment = $_POST["payment"];
        $delivery = $_POST["delivery"];
        $delivery_name = '';

        Order::addOrder($user_id, $amount, $status, $date, $payment, $delivery, $delivery_name);

        $order = Order::LastId();
        foreach ($_SESSION['products'] as $key => $products)
        {
            $goods_id = $key;
            $quantity = $_SESSION['products'][$key]['count'];
            $order_id = $order->getId();
            OrderHasGoods::addOrderHasGoods($order_id, $goods_id, $quantity);
        }

        unset($_SESSION['products']);
        unset($_SESSION['cart_coast']);
        header('Location: /shop');
    }

    public function shopAdressAction(){
        if (isset($_POST["adress"])) {
            User::AddAdress($_POST['adress'], $_SESSION['user']['id']);
            header('Location: /shop');
        }
    }

    public function shopAddAction()
    {
        $product_id  = $_POST['id'];
        $product_price = $_POST['price'];
        $this->add_to_cart($product_id , 1, $product_price);
    }

    public function shopPlusAction()
    {
        $product_id = $_POST['id'];
        $this->plus_product($product_id);
    }

    public function shopMinusAction()
    {
        $product_id = $_POST['id'];
        $this->minus_product($product_id);
    }

    public function shopDeleteAction()
    {
        $product_id = $_POST['id'];
        $this->remove_from_cart($product_id);
    }

    function add_to_cart($product_id, $count, $price)
    {
        if (!empty($_SESSION['products'][$product_id])) {
            $_SESSION['products'][$product_id]['count'] = $_SESSION['products'][$product_id]['count'] + $count;
        } else {
            $_SESSION['products'][$product_id]['count'] = $count;
            $_SESSION['products'][$product_id]['price'] = $price;
        }
        $this->update_cart();
    }

    function update_cart()
    {
        $_SESSION['cart_coast']=0;
        foreach ($_SESSION['products'] as $key=>$value) {
            $_SESSION['cart_coast']+=$_SESSION['products'][$key]['price']* $_SESSION['products'][$key]['count'];
        }
    }

    function remove_from_cart($product_id)
    {
        unset($_SESSION['products'][$product_id]);
        $this->update_cart();
    }

    function plus_product($product_id){
        $_SESSION['products'][$product_id]['count'] = $_SESSION['products'][$product_id]['count'] + 1;
        $this->update_cart();
    }

    function minus_product($product_id){
        if($_SESSION['products'][$product_id]['count'] <= 1){
            $this->remove_from_cart($product_id);
        } else {
            $_SESSION['products'][$product_id]['count'] = $_SESSION['products'][$product_id]['count'] - 1;
        }
        $this->update_cart();
    }
}