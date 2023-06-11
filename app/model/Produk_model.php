<?php

class Produk_model{
    private $table = 'produk';
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
        $this->db->query("INSERT INTO $this->table(nama, kategori, harga, gambar, deskripsi) 
        VALUES(
            '$data[nama]', 
            '$data[kategori]', 
            '$data[harga]',
            '$data[gambar]', 
            '$data[deskripsi]')");
        return $this->db->execute();
    }
    
    public function fetchData($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id=:id");
        $this->db->bind('id', $id);
        
        return $this->db->single();
    }
    
    public function editData($data)
    {
        $this->db->query("UPDATE $this->table SET nama=:nama, kategori=:kategori, harga=:harga, gambar=:gambar, deskripsi=:deskripsi 
        WHERE id=:id");
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id', $data['id']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        
        return $this->db->execute();
    }
    
    public function removeData($data)
    {
        $this->db->query("DELETE FROM $this->table WHERE id=:id");
        $this->db->bind('id', $data['id']);
        return $this->db->execute();
    }

    public function daleteData() {
        $url = "index.php?menu=kategori";
        $pesan = "Data berhasil dihapus";

        echo "<script>alert('$pesan'); location='$url'; </script> ";
    }
        
}
