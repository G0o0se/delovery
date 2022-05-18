<?php

namespace application\models\users;

use application\models\ActiveRecordEntity;

class User extends ActiveRecordEntity
{
    public int $id;
    public string $name;
    protected string $surname;
    protected string $email;
    protected string $password;
    protected int $is_admin;
    protected string $phone;
    protected string $adress;

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

    public function getAdmin(): string
    {
        return $this->is_admin;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getAdress(): string
    {
        return $this->adress;
    }

    protected static function getTableName(): string
    {
        return 'users';
    }
}
