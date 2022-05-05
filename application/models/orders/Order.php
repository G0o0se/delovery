<?php

namespace application\models\orders;

use application\models\ActiveRecordEntity;

class Order extends ActiveRecordEntity
{
    protected int $id;
    protected int $user_id;
    protected string $date;
    protected int $price;
    protected int $quantity;
    protected string $status;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    protected static function getTableName(): string
    {
        return 'orders';
    }
}
