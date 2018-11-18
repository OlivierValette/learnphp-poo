<?php

namespace Core\Database;

use Core\Entity\Entity;
use PDO;

class Database
{
    /** @var string $db_name */
    private $db_name;
    /** @var string $db_host */
    private $db_host;
    /** @var string $db_user */
    private $db_user;
    /** @var string $db_pass */
    private $db_pass;
    /** @var PDO $pdo */
    private $pdo;
    
    /**
     * Database constructor.
     * @param string $db_name
     * @param string $db_host Default "localhost"
     * @param string $db_user Default "root"
     * @param string $db_pass Default ""
     */
    public function __construct(string $db_name, string $db_host = "localhost", string $db_user = "root", string $db_pass = "")
    {
        $this->db_name = $db_name;
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
    }
    
    /** Database connection
     * @return PDO
     */
    public function getPDO() : PDO
    {
        if ($this->pdo === null) {
            $this->pdo = new PDO(
                "mysql:dbname=" . $this->db_name . ";host=" . $this->db_host,
                $this->db_user,
                $this->db_pass,
                [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8', lc_time_names = 'fr_FR';"
                ]);
        }
        return $this->pdo;
    }
    
    /**
     * @param string $classname
     * @return Entity
     */
    public function getEntity(string $classname): Entity
    {
        // $this is the database
        return new $classname($this);
    }
    
    
    public function query(string $query, string $classname = null, $unique = false)
    {
        $stmt = $this->getPDO()->query($query);
        
        if ($classname === null) {
            // Fetch mode set to object
            $stmt->setFetchMode(PDO::FETCH_OBJ);
        } else {
            // Create a new instance of $classname with $this as a parameter
            $stmt->setFetchMode(PDO::FETCH_CLASS, $classname, [$this]);
        }
        
        if ($unique) {
            $data = $stmt->fetch();
        } else {
            $data = $stmt->fetchAll();
        }
        
        return $data;
    }
    
}