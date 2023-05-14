<?php

class Urer{
    private $db;
    public function __construct(){
        $this->db = Database::getDbInstance()->getConnection();
    }

    public function readAll(){
        $result = $this->db->query("SELECT * FROM users");
        return $result;
    }
}