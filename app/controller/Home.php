<?php

class Home extends Controller{
    
    public function index()
    {
        var_dump(BASE_URL."assets/css/general.css");
        $user = $this->model('user_model')->getUser();
        $this->view('home/index');
    }
}