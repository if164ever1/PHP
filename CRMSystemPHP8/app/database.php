<?php

class Database{
    private static $instance = null;
    private $conn;
    private $host = "localhost";
    private $user = "php_crm";
    private $pass = "password";
    private $dbname = "php_crm";

    private function __conctruct(){
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        echo "Connection";
        if($this->conn->connect_error){
            die("Connect to database failed" . $this->conn->connect_errno);
        }
        printf('Connected successfully.<br />');
    }

    public static function getDbInstance(){
        if(!self::$instance){
            self::$instance = new Database();
            // var_dump(self::$instance);
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this->conn;
    }
}