<?php

class Produk_model{
    private $table = 'produk';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllData(){
        $this->db->query("SELECT * FROM $this->table
            JOIN master_kategori ON $this->table.kategori = master_kategori.id_kategori
            JOIN merek_produk ON $this->table.merek = merek_produk.id_merek");
        return $this->db->resultSet();
    }
    
    public function insertData($data)
    {
        $this->db->query("INSERT INTO $this->table(nama, merek, kategori, harga, gambar, deskripsi) 
        VALUES(
            '$data[nama]', 
            '$data[merek]', 
            '$data[kategori]', 
            '$data[harga]',
            '$data[gambar]', 
            '$data[deskripsi]')");
        $this->db->execute();
        
        return true;
    }
    
    public function fetchData($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id=:id");
        $this->db->bind('id', $id);
        
        return $this->db->single();
    }
    
    public function editData($data)
    {
        $this->db->query("UPDATE $this->table SET nama=:nama, merek=:merek, kategori=:kategori, harga=:harga, gambar=:gambar,
        deskripsi=:deskripsi WHERE id=:id");
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('merek', $data['merek']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        
        $this->db->execute();
        return true;
    }
    
    public function removeData($data)
    {
        $this->db->query("DELETE FROM $this->table WHERE id=:id");
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        
        return true;
    }
}
