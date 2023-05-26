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
            $this->db->query("CREATE TABLE 'sumberroda'.'master_kategori' (`id` INT NOT NULL AUTO_INCREMENT , `nama` VARCHAR(50) NOT NULL, `email` VARCHAR(100) NOT NULL , `password` VARCHAR(100) NOT NULL , `created_at` TIMESTAMP NOT NULL CURRENT_TIMESTAMP, `created_at` TIMESTAMP NOT NULL , PRIMARY KEY (`id`))");
            
            echo "Berhasil menambahkan tabel user";
        }
        
        if(!$this->isExistTable('master_kategori'))
        {
            $this->db->query("CREATE TABLE `sumberroda`.`master_kategori` (`id` INT NOT NULL AUTO_INCREMENT , `nama` VARCHAR(150) NOT NULL , PRIMARY KEY (`id`))");
        
            $this->db->execute();
            
            echo "Berhasil menambahkan table master_kategori";
        }
    }
//ingat
// n1. sebuah logika yang digunakan untuk mengecek apakah table yang mau dimasukan datanya, ada atau tidak. 
// n2. sebuah logika apakah setelah tablenya exist, apakah data ditabel tersebut itu ada atau ndk(exist).
// n3. jika tidak exist maka insert data tersebut ke dalam tabel yang dicek exist.
    
//n1
public function seeder()
    {
        $tabel = "user";
        if($this->isExistTable($tabel)) {
            $check = $this->db->single();
            echo "Table ditemukan!";
            
                if($this->isExistTable($tabel)) {
                        "Data sudah ada di dalam tabel.";
                    } else {
                        $this->db->query("INSERT INTO $tabel()");
                    }
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