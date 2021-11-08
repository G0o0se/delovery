<?php

namespace application\models\goods;

use application\models\ActiveRecordEntity;

class Good extends ActiveRecordEntity
{
    protected string $name;
    protected string $url;
    protected string $image;
    protected string $description;
    protected string $cooking_time;

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

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getCookTime(): string
    {
        return $this->cooking_time;
    }

    protected static function getTableName(): string
    {
        return 'goods';
    }
}