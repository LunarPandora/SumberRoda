<?php
use App\Model;

class User_model{
    private $nama = "Julius";
    
    public function getUser(){
        return $this->nama;
    }
}