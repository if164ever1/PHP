<?php

class Database{
    private static $instance = null;
    private $conn;
    private $host = 'localhost';
    private $user = 'root';
    private $pass = "";
    private $dbname = "php_crm";

    private function __conctruct(){
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if($this->conn->connect_error){
            die("Connect to database failed" . $this->conn->connect_errno);
        }
    }

    public static function getDbInstance(){
        if(!self::$instance){
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this->conn;
    }
}