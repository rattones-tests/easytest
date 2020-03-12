<?php
namespace core\db;

use PDO;
use PDOException;

class PDOConnection 
{
    private $conn;
    /**
     * constructor
     * create database connection
     */
    public function __construct() 
    {
        $dns= 'sqlite:./database-file.db';

        try {
            $this->conn= new PDO($dns);
        } catch (PDOException $e) {
            debug($e);
        }
    }

    public function getConnection() : PDO 
    {
        return $this->conn;
    }
}