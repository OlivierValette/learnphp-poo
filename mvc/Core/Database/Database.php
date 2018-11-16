<?php

namespace Core\Database;

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
    
}