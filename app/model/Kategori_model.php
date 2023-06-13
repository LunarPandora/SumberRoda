<?php

class Kategori_model{
    private $table = 'master_kategori';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllData(){
        $this->db->query("SELECT * FROM $this->table ORDER BY id_kategori DESC");
        return $this->db->resultSet();
    }
    
    public function insertData($data)
    {
        $this->db->query("INSERT INTO $this->table(nama_kategori) VALUES('$data[nama]')");
        $this->db->execute();
    }

    public function fetchData($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id_kategori=:id");
        $this->db->bind('id', $id);
        
        return $this->db->single();
    }
    
    public function editData($data)
    {
        $this->db->query("UPDATE $this->table SET nama_kategori=:nama WHERE id_kategori=:id");
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id', $data['id']);
        
        return $this->db->execute();
    }
    
    public function removeData($data)
    {
        $this->db->query("DELETE FROM $this->table WHERE id_kategori=:id");
        $this->db->bind('id', $data['id']);
        return $this->db->execute();
    }
}
