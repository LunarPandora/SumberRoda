<?php

class Home extends Controller{
    
    public function index()
    {
        echo BASE_URL;
        // $user = $this->model('user_model')->getUser();
        // var_dump($user['nama']);
        $this->view('home/index');
    }
}