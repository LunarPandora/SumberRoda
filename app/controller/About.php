<?php

class About extends Controller{
    public function index($nama = "Joe", $umur = 32, $pekerjaan = 'programmer'){
        $this->view('template/header');
        
        $data = [
            'nama' => $nama,
            'umur' => $umur,
            'pekerjaan' => $pekerjaan,
        ];
        
        $this->view('about/index', $data);
    }
    
    public function page(){
        $this->view('about/page');
    }
}
