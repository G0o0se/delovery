<?php

namespace application\models\goods;

use application\models\ActiveRecordEntity;

class Good extends ActiveRecordEntity
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $name;

    /** @var string */
    protected $url;

    /** @var string */
    protected $image;

    /** @var string */
    protected $description;

    /** @var double */
    protected $price;

    /** @var int */
    protected $count_buys;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    protected static function getTableName(): string
    {
        return 'goods';
    }
}