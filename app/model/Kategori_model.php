<?php

class Kategori_model{
    private $table = 'master_kategori';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllData(){
        $this->db->query("SELECT * FROM $this->table ORDER BY id DESC");
        return $this->db->resultSet();
    }
    
    public function insertData($data)
    {
        $this->db->query("INSERT INTO $this->table(nama) VALUES('$data[nama]')");
        $this->db->execute();
    }

    public function fetchData($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id=:id");
        $this->db->bind('id', $id);
        
        return $this->db->single();
    }
    
    public function editData($data)
    {
        $this->db->query("UPDATE $this->table SET nama=:nama WHERE id=:id");
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id', $data['id']);
        
        return $this->db->execute();
    }
    
    public function removeData($data)
    {
        $this->db->query("DELETE FROM $this->table WHERE id=:id");
        $this->db->bind('id', $data['id']);
        return $this->db->execute();
    }
}
