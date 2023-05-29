<?php

class Merek_produk_model{
    private $table = 'merek_produk';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllData(){
        $this->db->query("SELECT * FROM $this->table ");
        return $this->db->resultSet();
    }
    
    public function insertData($data)
    {
        $this->db->query("INSERT INTO $this->table(nama) VALUES('$data[nama]')");
        $this->db->execute();
    }
}