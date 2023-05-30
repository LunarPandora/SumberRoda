<?php

class Produk extends Controller{
    public function __construct()
    {
        if(!Auth::user()) header('location: '. BASE_URL .'/view/login');
    }
}