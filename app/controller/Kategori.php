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
        return $_POST;
    }
}