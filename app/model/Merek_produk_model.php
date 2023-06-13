<?php

class Merek_produk_model{
    private $table = 'merek_produk';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllData(){
        $this->db->query("SELECT * FROM $this->table ORDER BY id_merek DESC");
        return $this->db->resultSet();
    }
    
    public function insertData($data)
    {
        $this->db->query("INSERT INTO $this->table(nama_merek) VALUES('$data[nama]')");
        return $this->db->execute();
    }
    
    public function fetchData($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id_merek=:id");
        $this->db->bind('id', $id);
        
        return $this->db->single();
    }
    
    public function editData($data)
    {
        $this->db->query("UPDATE $this->table SET nama_merek=:nama WHERE id_merek=:id");
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id', $data['id']);
        
        return $this->db->execute();
    }
    
    public function removeData($data)
    {
        $this->db->query("DELETE FROM $this->table WHERE id_merek=:id");
        $this->db->bind('id', $data['id']);
        return $this->db->execute();
    }
        
}