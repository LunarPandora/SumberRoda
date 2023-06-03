<?php

class MerekProduk extends Controller{
    public function __construct()
    {
        if(isset($_SERVER['HTTPS'])){
            if(!Auth::user()) header('location: ../login');
        }else{
            if(!Auth::user()) header('location: '. BASE_URL . '/view/login');
        }
    }
    
    public function getAllData()
    {
        return $this->model('Merek_produk_model')->getAllData();
    }
    
    public function addData()
    {
        if($this->model('Merek_produk_model')->insertData($_POST))
        {
            return "$_POST[nama] berhasil ditambah";
        }
        
        return "$_POST[nama] gagal dimasukkan, coba tambahkan ulang";
    }
    
    public function getData()
    {
        return $this->model('Merek_produk_model')->fetchData($_POST['id']);
    }
    
    public function updateData()
    {
        if($this->model('Merek_produk_model')->editData($_POST))
        {
            return "$_POST[nama] berhasil diubah";
        }
        
        return "$_POST[nama] gagal diubah";
    }
    
    public function deleteData()
    {
        if($this->model('Merek_produk_model')->removeData($_POST))
        {
            return "$_POST[nama] berhasil dihapus";
        }
        
        return "$_POST[nama] gagal dihapus";
    }
}