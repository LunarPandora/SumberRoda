<?php

class Home extends Controller{
    
    public function index()
    {
        var_dump($_SERVER['HTTP_HOST']);
        $this->view('home/index');
    }
}