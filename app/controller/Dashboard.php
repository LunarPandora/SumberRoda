<?php

class Dashboard extends Controller{
    public function __construct()
    {
        if(!Auth::user()) header('location: '. BASE_URL . 'view/login');
    }
    
    public function countKategori(){
        $kategori_model = $this->model('Kategori_model')->getAllData();
        return count($kategori_model);
    }
    
    public function countProduk(){
        $produk_model = $this->model('Produk_model')->getAllData();
        return count($produk_model);
    }
    
    public function countMerek(){
        $merek_model = $this->model('Merek_produk_model')->getAllData();
        return count($merek_model);
    }
}