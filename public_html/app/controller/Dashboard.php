<?php

class Dashboard extends Controller{
    public function __construct()
    {
        if(isset($_SERVER['HTTPS'])){
            if(!Auth::user()) header('location: /storage/ssd4/802/20555802/public_html/view/login');
        }else{
            if(!Auth::user()) header('location: '. BASE_URL . '/view/login');
        }
    }
    
    public function index(){
        $data=[ 
            "nama" => "suhendri",
            "kelas" => "STI-B"
        ];   
    }
}