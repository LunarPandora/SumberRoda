<?php

class Migration{
    private $db;
    private $nama_db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function exec()
    {
        //tiap kali mau buat tabel
        $this->db->query("CREATE TABLE 'sumberroda'.'master_kategori' (`id` INT NOT NULL AUTO_INCREMENT , `nama` VARCHAR(50) NOT NULL, `email` VARCHAR(100) NOT NULL , `password` VARCHAR(100) NOT NULL , `created_at` TIMESTAMP NOT NULL CURRENT_TIMESTAMP, `created_at` TIMESTAMP NOT NULL , PRIMARY KEY (`id`))");
        
        $this->db->query("CREATE TABLE `sumberroda`.`master_kategori` (`id` INT NOT NULL AUTO_INCREMENT , `nama` VARCHAR(150) NOT NULL , PRIMARY KEY (`id`))");
        
        $this->db->execute();
        
        echo "Berhasil menambahkan table master_kategori";
    }
    
    // public function exist_table($nama_tabel)
    // {
    //     $this->db->query("SHOW TABLES LIKE :$nama_tabel");
    //     $check = $this->db->execute();
        
    //     if(count($check) < 1){
    //         return false;
    //     }else{
            
    //     }
    // }
}