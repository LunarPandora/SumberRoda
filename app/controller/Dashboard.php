<?php

class Dashboard extends Controller{
    public function __construct()
    {
        if(!Auth::user()) header('location: '. BASE_URL . 'view/login');
    }
    
    public function index(){
        $data=[ 
            "nama" => "suhendri",
            "kelas" => "STI-B"
        ];   
    }
}