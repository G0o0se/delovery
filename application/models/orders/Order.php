<?php

namespace application\models\users;

use application\models\ActiveRecordEntity;

class Order extends ActiveRecordEntity
{
    /** @var int */
    protected $id;

    /** @var int */
    protected $user_id;

    /** @var int */
    protected $order_id;

    /** @var int */
    protected $status;

    /**
     * @return string
     */
    public function getNickname(): string
    {
        return $this->nickname;
    }

    protected static function getTableName(): string
    {
        return 'orders';
    }
}
