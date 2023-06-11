<?php

class Produk extends Controller{
    public function __construct()
    {
        if(!Auth::user()) header('location: '. BASE_URL . '/view/login');
    }
    
    public function getAllData()
    {
        return $this->model('Produk_model')->getAllData();
    }
    
    public function addData()
    {
        if($this->model('Produk_model')->insertData($_POST))
        {
            return "$_POST[nama] berhasil ditambah";
        }
        
        return "$_POST[nama] gagal dimasukkan, coba tambahkan ulang";
    }
    
    public function getData()
    {
        return $this->model('Produk_model')->fetchData($_POST['id']);
    }
    
    public function updateData()
    {
        if($this->model('Produk_model')->editData($_POST))
        {
            return "$_POST[nama] berhasil diubah";
        }
        
        return "$_POST[nama] gagal diubah";
    }
    
    public function deleteData()
    {
        if($this->model('Produk_model')->removeData($_POST))
        {
            return "$_POST[nama] berhasil dihapus";
        }
        
        return "$_POST[nama] gagal dihapus";
    }
}