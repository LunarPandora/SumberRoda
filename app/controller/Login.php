<?php

class Login extends Controller{
    
    public function __construct(){
        if(Auth::user()) header("location:". BASE_URL . "dashboard/index");
    }
    
    public function index()
    {
        $this->view('login/index');
    }
    
    public function tryAuthenticate()
    {
        $data = $this->model('user_model')->login($_POST);
        if(!$data){
            $_SESSION['error'] = "Gagal login, silahkan menggunakan email atau password yang berbeda";
            header("location:". BASE_URL . "login/index");
            
            return 0;
        }
        
        Auth::setUser($data);
    }
    
    public function logout()
    {
        Auth::logout();
    }
}