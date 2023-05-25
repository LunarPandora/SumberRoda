<?php

class Dashboard extends Controller{
    // public function __construct()
    // {
    //     if(!Auth::user()) header('location: '. BASE_URL . 'login');
    // }
    
    public function index(){
        $data=[ 
            "nama" => "suhendri",
            "kelas" => "STI-B"
        ];
        
        $this->view('dashboard/index', $data) ;
        
    }
}