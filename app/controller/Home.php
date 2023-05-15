<?php

class Home extends Controller{
    
    public function index()
    {
        $user = $this->model('user_model')->getUser();
        $this->view('home/index');
    }
}