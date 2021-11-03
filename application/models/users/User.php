<?php

namespace application\models\users;

use application\models\ActiveRecordEntity;

class User extends ActiveRecordEntity
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $email;

    /** @var string */
    protected $name;

    /** @var int */
    protected $is_admin;

    public function getMail(): string
    {
        return $this->email;
    }

    protected static function getTableName(): string
    {
        return 'users';
    }
}
