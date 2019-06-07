<?php

class DAO {
    protected $db;
    
    public function __construct() {
        //pdo conecta com o banco
        $this->db = new PDO("mysql:host=localhost;dbname=estetica", "admin", "masterkey");
        
        $this->db->exec("SET CHARSET UTF8");
    }
}
