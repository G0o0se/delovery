<?php

namespace application\models;

use application\lib\Db;

abstract class ActiveRecordEntity
{
    /** @var int */
    protected int $id;
    protected string $email;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    public function __set(string $name, $value)
    {
        $camelCaseName = $this->underscoreToCamelCase($name);
        $this->$camelCaseName = $value;
    }

    private function underscoreToCamelCase(string $source): string
    {
        return lcfirst(str_replace('_', '', ucwords($source, '_')));
    }

    /**
     * @return static[]
     */
    public static function findAll(): array
    {
        $db = new Db();
        return $db->query('SELECT * FROM `' . static::getTableName() . '`;', [], static::class);
    }

    public static function FindByCategory(string $category): array
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM `' . static::getTableName() . '` WHERE category=:category;',
            [':category' => $category],
            static::class
        );
    }

    public static function NameByEmail(string $email): ?self
    {
        $db = new Db();
        $entities = $db->query(
            'SELECT name as name FROM `' . static::getTableName() . '` WHERE email=:email;',
            [':email' => $email],
            static::class
        );
        return $entities ? $entities[0] : null;
    }

    /**
     * @param int $id
     * @return static|null
     */
    public static function getByEmail(string $email): ?self
    {
        $db = new Db();
        $entities = $db->query(
            'SELECT count(*) as count FROM `' . static::getTableName() . '` WHERE email=:email;',
            [':email' => $email],
            static::class
        );
        return $entities ? $entities[0] : null;
    }

    public static function getByLogin(string $email, string $password): ?self
    {
        $db = new Db();
        $entities = $db-> query(
            "SELECT count(*) as count FROM `" . static::getTableName() . "` WHERE email = :email and password = :password;",
            [':email' => $email, ':password' => $password],
            static::class
        );
        return $entities ? $entities[0] : null;
    }

    public static function AddUser(string $name, string $email, string $password): ?self
    {
        $db = new Db();
        $entities = $db-> query(
            "INSERT INTO `" . static::getTableName() . "` (name, email, password) values( :name, :email, :password);",
            [':name' => $name, ':email' => $email, ':password' => $password],
            static::class
        );
        return $entities ? $entities[0] : null;
    }

    abstract protected static function getTableName(): string;
}
