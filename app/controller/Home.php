<?php

class Home extends Controller{
    
    public function index()
    {
        $user = $this->model('user_model')->getUser();
        echo $user;
        $this->view('home/index');
    }
}