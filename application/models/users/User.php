<?php

namespace application\models\users;

use application\models\ActiveRecordEntity;

class User extends ActiveRecordEntity
{
    protected string $email;
    protected string $password;
    public string $count;
    public string $name;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getCount(): string
    {
        return $this->count;
    }

    public function getName(): string
    {
        return $this->name;
    }

    protected static function getTableName(): string
    {
        return 'users';
    }
}
