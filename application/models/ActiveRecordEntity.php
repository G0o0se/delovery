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
            'SELECT goods.name, goods.image, goods.price, goods.description FROM `' . static::getTableName() . '` JOIN categories c on `' . static::getTableName() . '`.category = c.name WHERE c.url=:category;',
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
        $entities = $db->query(
            "SELECT count(*) as count FROM `" . static::getTableName() . "` WHERE email = :email and password = :password;",
            [':email' => $email, ':password' => $password],
            static::class
        );
        return $entities ? $entities[0] : null;
    }

    public static function AddUser(string $name, string $email, string $password): ?self
    {
        $db = new Db();
        $entities = $db->query(
            "INSERT INTO `" . static::getTableName() . "` (name, email, password) values (:name, :email, :password);",
            [':name' => $name, ':email' => $email, ':password' => $password],
            static::class
        );
        return $entities ? $entities[0] : null;
    }

    public static function AddGood(string $name, int $price, string $description, string $category, string $image): ?self
    {
        $db = new Db();
        $entities = $db->query(
            "INSERT INTO `" . static::getTableName() . "` (name, price, description, category, image) values (:name, :price, :description, :category, :image);",
            [':name' => $name, ':price' => $price, ':description' => $description, ':category' => $category, ':image' => $image],
            static::class
        );
        return $entities ? $entities[0] : null;
    }

    public static function AddCategory(string $name, string $description, string $category, string $image): ?self
    {
        $db = new Db();
        $entities = $db->query(
            "INSERT INTO `" . static::getTableName() . "` (name,description, category, image) values (:name, :description, :category, :image);",
            [':name' => $name, ':description' => $description, ':category' => $category, ':image' => $image],
            static::class
        );
        return $entities ? $entities[0] : null;
    }

    public static function deleteById(int $id): ?self
    {
        $db = new Db();
        $entities = $db->query(
            "DELETE FROM `" . static::getTableName() . "` WHERE id = :id;",
            [':id' => $id],
            static::class
        );
        return $entities ? $entities[0] : null;
    }

    public static function updateById(string $name, string $description, float $price, string $category, string $image, int $id): array
    {
        $db = new Db();
        return $db->query(
            'UPDATE goods SET name = :name, description = :description, price = :price, category= :category, image= :image WHERE id = :id;',
            [':name' => $name, ':description' => $description, ':price' => $price, ':category' => $category, ':image' => $image, ':id' => $id],
            static::class
        );
    }

    public static function findById(int $id): array
    {
        $db = new Db();
        return $db->query(
            "SELECT * FROM `" . static::getTableName() . "` WHERE id = :id;",
            [':id' => $id],
            static::class
        );
    }

    public static function search(string $search): array
    {
        $db = new Db();
        return $db->query(
            "SELECT * FROM `" . static::getTableName() . "` WHERE description LIKE '%$search%' or name LIKE '%$search%' or price LIKE '%$search%' or category LIKE '%$search%';",
            [':search' => $search],
            static::class
        );
    }

    abstract protected static function getTableName(): string;
}
