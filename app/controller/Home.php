<?php

class Home extends Controller{
    
    public function index()
    {
        var_dump(dirname(__FILE__));
        $user = $this->model('user_model')->getUser();
        $this->view('home/index');
    }
}