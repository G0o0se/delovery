<?php

namespace application\models\orders;

use application\models\ActiveRecordEntity;

class Order extends ActiveRecordEntity
{
    protected int $id;
    protected int $user_id;
    protected string $products;
    protected int $amount;
    protected string $status;
    protected string $date;
    protected string $payment;
    protected string $delivery;

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
        return $this->date;
    }

    public function getPayment(): string
    {
        return $this->payment;
    }

    public function getDelivery(): string
    {
        return $this->delivery;
    }

    protected static function getTableName(): string
    {
        return 'orders';
    }
}
