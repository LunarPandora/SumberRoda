<?php
namespace Function;

class Config{
    public $db;
    
    public function __construct()
    {
        $db = $this->openDB();
        $this->db = $db;
    }
    
    public function openDB(){
        return mysqli_connect('localhost', 'root', 'blazing12', 'sumber_roda');
    }
}