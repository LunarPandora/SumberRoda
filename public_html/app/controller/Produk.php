<?php

class Produk extends Controller{
    public function __construct()
    {
        if(isset($_SERVER['HTTPS'])){
            if(!Auth::user()) header('location: ../login');
        }else{
            if(!Auth::user()) header('location: '. BASE_URL . '/view/login');
        }
    }
}