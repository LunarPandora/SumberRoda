<?php
use App\Model;

class User_model{
    private $table = 'user';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getUser(){
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->single();
    }
}