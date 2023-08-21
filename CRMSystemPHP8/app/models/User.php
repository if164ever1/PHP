<?php

class User{
    private $db;

    public function __construct(){
        // $this->db = Database::getDbInstance();
        // $this->db = $this->db->getConnection();
        $this->db = new mysqli('db','php_crm','password','php_crm');
        var_dump($this->db);
    }

    public function readAll(){
        $query = 'SELECT * FROM users';
        $result = $this->db->query($query);
        return $result;
    }
}