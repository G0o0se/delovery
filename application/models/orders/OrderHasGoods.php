<?php

namespace application\models\orders;

use application\models\ActiveRecordEntity;

class OrderHasGoods extends ActiveRecordEntity
{
    public int $order_id;
    public int $goods_id;
    public int $quantity;

    public function getId(): int
    {
        return $this->id;
    }

    public function getOrderId(): int
    {
        return $this->order_id;
    }

    public function getGoodId(): string
    {
        return $this->goods_id;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    protected static function getTableName(): string
    {
        return 'orders_has_goods';
    }
}
