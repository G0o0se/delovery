<?php

namespace application\models\orders;

use application\models\ActiveRecordEntity;

class Order extends ActiveRecordEntity
{
    protected int $id;
    protected int $user_id;
    protected int $order_id;
    protected int $status;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function getOrderId(): int
    {
        return $this->order_id;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    protected static function getTableName(): string
    {
        return 'orders';
    }
}
