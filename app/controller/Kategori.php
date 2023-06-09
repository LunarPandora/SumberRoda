<?php

class Kategori extends Controller{
    public function __construct()
    {
        if(!Auth::user()) header('location: '. BASE_URL .'/view/login');
    }
    
    public function getAllData()
    {
        return $this->model('Kategori_model')->getAllData();
    }
    
    public function addData()
    {
        if($this->model('Kategori_model')->insertData($_POST))
        {
            return "$_POST[nama] berhasil ditambah";
        }
        
        return "$_POST[nama] gagal dimasukkan, coba tambahkan ulang";
    }
    
    public function getData()
    {
        return $this->model('Kategori_model')->fetchData($_POST['id']);
    }
    
    public function updateData()
    {
        if($this->model('Kategori_model')->editData($_POST))
        {
            return "$_POST[nama] berhasil diubah";
        }
        
        return "$_POST[nama] gagal diubah";
    }
    
    public function deleteData()
    {
        $data = $_POST;
        if ($this->model('Kategori_model')->removeData($data)) {
            return "{$data['nama']} berhasil dihapus";
        }
        
        return "{$data['nama']} gagal dihapus";
    }
    
}