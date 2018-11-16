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
        $parts = explode("\\", static::class);
        $classname = array_pop($parts);
        $this->table = strtolower($classname);
    }
    
    public function getAll(): array
    {
        // static::class is the child class (as self::class always refers to Entity class)
        return $this->database->query(
            "SELECT * FROM " . $this->table,
            static::class
        );
    }
    
    /**
     * @param int $id
     * @return Entity
     */
    public function getOne(int $id): Entity
    {
        return $this->database->query(
            "SELECT * FROM " . $this->table . " WHERE id = " . $id,
            static::class
        );
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