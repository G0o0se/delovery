<?php

namespace application\models\news;

use application\models\ActiveRecordEntity;

class News extends ActiveRecordEntity
{
    protected int $id;
    protected string $date;
    protected string $name;
    protected string $description;
    protected string $image;

    public function getId(): int
    {
        return $this->id;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    protected static function getTableName(): string
    {
        return 'news';
    }
}
