<?php

namespace application\models\categories;

use application\models\ActiveRecordEntity;

class Category extends ActiveRecordEntity
{
    protected int $id;
    protected string $name;
    protected string $url;
    protected string $image;
    protected string $country;
    protected string $cookTime;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getCookTime(): string
    {
        return $this->cookTime;
    }

    protected static function getTableName(): string
    {
        return 'categories';
    }
}
