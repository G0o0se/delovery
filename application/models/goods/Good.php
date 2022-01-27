<?php

namespace application\models\goods;

use application\models\ActiveRecordEntity;

class Good extends ActiveRecordEntity
{
    protected int $id;
    protected string $name;
    protected string $description;
    protected float $price;
    protected int $category;

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

    public function getCategory(): int
    {
        return $this->category;
    }

    protected static function getTableName(): string
    {
        return 'goods';
    }
}
