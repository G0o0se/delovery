<?php

namespace application\models\orders;

use application\models\ActiveRecordEntity;

class Order extends ActiveRecordEntity
{
    public int $id;
    public int $user_id;
    public string $products;
    public int $amount;
    public string $status;
    public string $date_order;
    public string $payment;
    public string $delivery;
    public string $delivery_name;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function getProducts(): string
    {
        return $this->products;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getDate(): string
    {
        return $this->date_order;
    }

    public function getPayment(): string
    {
        return $this->payment;
    }

    public function getDelivery(): string
    {
        return $this->delivery;
    }

    public function getDeliveryName(): string
    {
        return $this->delivery_name;
    }


    protected static function getTableName(): string
    {
        return 'orders';
    }
}
