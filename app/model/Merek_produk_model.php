<?php

class Merek_produk_model{
    private $table = 'merek_produk';
    private $db;
    $idk = mysqli_real_escape_string($con, $_GET['id']);
    $sql = "DELETE FROM kategori WHERE idk='$idk'";
    mysqli_query($con, $sql);
    
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

    public function daleteData() {
        $url = "index.php?menu=kategori";
        $pesan = "Data berhasil dihapus";

        echo "<script>alert('$pesan'); location='$url'; </script> ";
    }
        
}