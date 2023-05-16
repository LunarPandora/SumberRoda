<?php

class Dashboard extends Controller{
    public function index(){
<<<<<<< HEAD
        $data=[ 
            "nama" => "suhendri",
            "kelas" => "STI-B"
        ];
        $this->view('dashboard/index', $data) ;
        
=======
        $this->view('dashboard/index');
>>>>>>> 0ae2ff666e0fb691345615d8728004ad68acef03
    }
}