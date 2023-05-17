<?php

class Dashboard extends Controller{
    public function index(){
        $data=[ 
            "nama" => "suhendri",
            "kelas" => "STI-B"
        ];
        
        echo $_SERVER['SCRIPT_NAME'];
        $this->view('dashboard/index', $data) ;
        
    }
}