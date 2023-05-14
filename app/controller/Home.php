<?php

class Home extends Contro{
    public function index(){
        $this->view('home/index');
        echo "Home/index";
    }
}