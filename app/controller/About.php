<?php

class About{
    public function index($laptop = "", $charger = 0){
        // $this->view('home/index');
        echo "pada perusahaan about, di kegiatan index. Ternyata kekurangan laptop dan charger, maka perusahaan App mengirimkan $laptop laptop dan $charger charger.";
    }
    
    public function page(){
        echo 'About/page';
    }
}