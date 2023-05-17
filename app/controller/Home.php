<?php

class Home extends Controller{
    
    public function index()
    {
        $user = $this->model('user_model')->getUser();
        var_dump($user['nama']);
        $this->view('home/index');
    }
}