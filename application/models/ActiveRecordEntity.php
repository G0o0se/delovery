<?php

namespace application\models;

use application\lib\Db;
use PDO;

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
            'SELECT goods.id, goods.name, goods.image, goods.price, goods.description FROM `' . static::getTableName() . '` JOIN categories c on `' . static::getTableName() . '`.category = c.name WHERE c.url=:category;',
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

    public static function IdByEmail(string $email): ?self
    {
        $db = new Db();
        $entities = $db->query(
            'SELECT id as ids FROM `' . static::getTableName() . '` WHERE email=:email;',
            [':email' => $email],
            static::class
        );
        return $entities ? $entities[0] : null;
    }

    public static function AdminByEmail(string $email): ?self
    {
        $db = new Db();
        $entities = $db->query(
            'SELECT id_admin as admin FROM `' . static::getTableName() . '` WHERE email=:email;',
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

    public static function AddUser(string $fname, string $lname, string $email, string $password, string $number, string $adress): ?self
    {
        $db = new Db();
        $entities = $db->query(
            "INSERT INTO `" . static::getTableName() . "` (name, surname, email, password, phone, adress) values (:fname, :lname, :email, :password, :number, :adress);",
            [':fname' => $fname, ':lname' => $lname, ':email' => $email, ':password' => $password, ':number' => $number, ':adress' => $adress],
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

    public static function AddCategory(string $name, string $image, int $cookTime, string $url): ?self
    {
        $db = new Db();
        $entities = $db->query(
            "INSERT INTO `" . static::getTableName() . "` (name, image, cookTime, url) values (:name, :image, :cookTime, :url);",
            [':name' => $name, ':image' => $image, ':cookTime' => $cookTime, ':url' => $url],
            static::class
        );
        return $entities ? $entities[0] : null;
    }

    public static function AddNews(string $name, string $date, string $description, string $image): ?self
    {
        $db = new Db();
        $entities = $db->query(
            "INSERT INTO `" . static::getTableName() . "` (name, date, description, image) values (:name, :date, :description, :image);",
            [':name' => $name, ':date' => $date, ':description' => $description, ':image' => $image],
            static::class
        );
        return $entities ? $entities[0] : null;
    }

    public static function AddAdress(string $adress, int $id): array
    {
        $db = new Db();
        return $db->query(
            'UPDATE users SET adress = :adress WHERE id = :id;',
            [':adress' => $adress, ':id' => $id],
            static::class
        );
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

    public static function updateGoods(string $name, string $description, float $price, string $category, string $image, int $id): array
    {
        $db = new Db();
        return $db->query(
            'UPDATE goods SET name = :name, description = :description, price = :price, category= :category, image= :image WHERE id = :id;',
            [':name' => $name, ':description' => $description, ':price' => $price, ':category' => $category, ':image' => $image, ':id' => $id],
            static::class
        );
    }

    public static function updateCategory(string $name, string $image, int $cookTime, string $url, int $id): array
    {
        $db = new Db();
        return $db->query(
            'UPDATE categories SET name = :name, image = :image, cookTime = :cookTime, url= :url WHERE id = :id;',
            [':name' => $name, ':image' => $image, ':cookTime' => $cookTime, ':url' => $url, ':id' => $id],
            static::class
        );
    }

    public static function updateNews(string $name, string $description, string $image, int $id): array
    {
        $db = new Db();
        return $db->query(
            'UPDATE news SET name = :name, description = :description, image = :image WHERE id = :id;',
            [':name' => $name, ':description' => $description, ':image' => $image, ':id' => $id],
            static::class
        );
    }

    public static function addOrder(int $user_id, string $products, int $amount, int $status, string $date, string $payment, string $delivery): ?self
    {
        $db = new Db();
        $entities = $db->query(
            "INSERT INTO `" . static::getTableName() . "` (user_id, products, amount, status, date_order, payment, delivery) values (:user_id, :products, :amount, :status, :date, :payment, :delivery);",
            [':user_id' => $user_id, ':products' => $products, ':amount' => $amount, ':status' => $status, ':date' => $date, ':payment' => $payment, ':delivery' => $delivery],
            static::class
        );
        return $entities ? $entities[0] : null;
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

    public static function findByManyId(array $id): array
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM `' . static::getTableName() . '` WHERE `id` IN (' . implode(',', array_map('intval', $id)) . ')',
            [':id' => $id],
            static::class
        );
    }

    public static function nameById(int $id): array
    {
        $db = new Db();
        return $db->query(
            "SELECT name FROM `" . static::getTableName() . "` WHERE id = :id;",
            [':id' => $id],
            static::class
        );
    }

    public static function priceById(int $id): array
    {
        $db = new Db();
        return $db->query(
            "SELECT price FROM `" . static::getTableName() . "` WHERE id = :id;",
            [':id' => $id],
            static::class
        );
    }

    public static function imageById(int $id): array
    {
        $db = new Db();
        return $db->query(
            "SELECT image FROM `" . static::getTableName() . "` WHERE id = :id;",
            [':id' => $id],
            static::class
        );
    }

    public static function searchGoods(string $search): array
    {
        $db = new Db();
        return $db->query(
            "SELECT * FROM `" . static::getTableName() . "` WHERE description LIKE '%$search%' or name LIKE '%$search%' or price LIKE '%$search%' or category LIKE '%$search%';",
            [':search' => $search],
            static::class
        );
    }

    public static function searchCategory(string $search): array
    {
        $db = new Db();
        return $db->query(
            "SELECT * FROM `" . static::getTableName() . "` WHERE name LIKE '%$search%' or url LIKE '%$search%' or cookTime LIKE '%$search%';",
            [':search' => $search],
            static::class
        );
    }

    public static function searchNews(string $search): array
    {
        $db = new Db();
        return $db->query(
            "SELECT * FROM `" . static::getTableName() . "` WHERE name LIKE '%$search%' or description LIKE '%$search%'",
            [':search' => $search],
            static::class
        );
    }

    abstract protected static function getTableName(): string;
}
