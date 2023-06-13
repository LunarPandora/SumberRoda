<?php

class Home extends Controller{
    public function allProduk()
    {
        $data = $this->model('Produk_model')->getAllData();
        return $data;
    }
}