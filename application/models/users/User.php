<?php

namespace application\models\users;

use application\models\ActiveRecordEntity;

class User extends ActiveRecordEntity
{
    public string $name;
    protected string $surname;
    protected string $email;
    protected string $password;

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    protected static function getTableName(): string
    {
        return 'users';
    }
}
