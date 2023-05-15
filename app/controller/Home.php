<?php

class Home extends Controller{
    
    public function index()
    {
        echo json_encode($_SERVER);
        $user = $this->model('user_model')->getUser();
        $this->view('home/index');
    }
}