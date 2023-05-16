<?php

class Dashboard extends Controller{
    public function index(){
        $data=[ 
            "nama" => "suhendri",
            "kelas" => "STI-B"
        ];
        $this->view('dashboard/index', $data) ;
        
    }
}