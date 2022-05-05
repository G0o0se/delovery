<?php

namespace application\models\goods;

use application\models\ActiveRecordEntity;

class Good extends ActiveRecordEntity
{
    protected int $id;
    protected string $name;
    protected string $description;
    protected float $price;
    protected string $image;
    protected string $category_id;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getCategory(): string
    {
        return $this->category_id;
    }

    protected static function getTableName(): string
    {
        return 'goods';
    }
}