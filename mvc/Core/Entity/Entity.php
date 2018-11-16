<?php

namespace Core\Entity;

use Core\Database\Database;

abstract class Entity
{
    /** @var Database $database */
    protected $database;
    /** @var string $table */
    protected $table;
    
    public function __construct(Database $database)
    {
        $this->database = $database;
    }
    
    public function getAll(): array
    {
        // static::class is the child class (as self::class map Entity class)
        return $this->database->query("SELECT * FROM " . $this->table, static::class);
    }
    
    public function getOne(int $id): array
    {
        // static::class is the child class (as self::class map Entity class)
        return $this->database->query("
            SELECT *
            FROM " . $this->table . "
            WHERE id = " . $id,
            static::class);
    }
    
    /** magical method used in case of an attempt to access a private property
     * @param $key
     * @return mixed
     */
    public function __get($key)
    {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }
}