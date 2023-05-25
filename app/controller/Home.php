<?php

class Home extends Controller{
    
    public function index()
    {
        // $user = $this->model('user_model')->getUser();
        // var_dump($user['nama']);
        echo BASE_URL;
        $this->view('home/index');
    }
}