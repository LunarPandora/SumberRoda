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
        if(!$this->isExistTable('user'))
        {
            $this->db->query("CREATE TABLE `sumberroda`.`user` (`id` INT NOT NULL AUTO_INCREMENT , `nama` VARCHAR(50) NOT NULL, `email` VARCHAR(100) NOT NULL , `password` VARCHAR(100) NOT NULL, PRIMARY KEY (`id`))");
            $this->db->execute();
            
            echo "Berhasil menambahkan tabel user";
        }
        
        if(!$this->isExistTable('master_kategori'))
        {
            $this->db->query("CREATE TABLE `sumberroda`.`master_kategori` (`id` INT NOT NULL AUTO_INCREMENT , `nama` VARCHAR(150) NOT NULL , PRIMARY KEY (`id`))");
        
            $this->db->execute();
            
            echo "Berhasil menambahkan table master_kategori";
        }
        
        if(!$this->isExistTable('merek_produk'))
        {
            $this->db->query("CREATE TABLE `sumberroda`.`merek_produk` (`id` INT NOT NULL AUTO_INCREMENT , `nama` VARCHAR(150) NOT NULL , PRIMARY KEY (`id`))");
        
            $this->db->execute();
            
            echo "Berhasil menambahkan table merek_produk";
        }
        
        if(!$this->isExistTable('session_user')){
            $this->db->query('CREATE TABLE `sumberroda`.`session_user` (`id` INT NOT NULL AUTO_INCREMENT , `session_id` VARCHAR(30) NOT NULL , `id_user` SMALLINT NOT NULL , `expired_time` TIMESTAMP NOT NULL , PRIMARY KEY (`id`), UNIQUE (`session_id`))');
            
            $this->db->execute();
            echo "Berhasil menambahkan tabel session_user";
        }
    }

    public function isExistTable($nama_tabel)
    {
        $this->db->query("SHOW TABLES LIKE '{$nama_tabel}'");
        $check = $this->db->single();
        
        if($check){
            return true;
        }
        
        return false;
    }
}

