<?php

namespace application\models\orders;

use application\models\ActiveRecordEntity;

class OrderDetails extends ActiveRecordEntity
{
    protected int $id;
    protected int $goods_id;
    protected int $order_id;

    public function getId(): int
    {
        return $this->id;
    }

    public function getGoodsId(): int
    {
        return $this->goods_id;
    }

    public function getOrderId(): int
    {
        return $this->order_id;
    }

    protected static function getTableName(): string
    {
        return 'orders_details';
    }
}
