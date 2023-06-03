<?php

class Login extends Controller{
    
    public function __construct(){
        if(isset($_SERVER['HTTPS'])){
            if(Auth::user()) header('location: ../dashboard');
        }else{
            if(Auth::user()) header('location: '. BASE_URL . '/view/dashboard');
        }
    }
    
    public function index()
    {
        $this->view('login/index');
    }
    
    public function tryAuthenticate()
    {
        $data = $this->model('User_model')->login($_POST);
        if(!$data){
            $_SESSION['error'] = "Gagal login, silahkan menggunakan email atau password yang berbeda";
            if(isset($_SERVER['HTTPS'])){
                header('location: https://sumberroda.000webhostapp.com/view/login');
            }else{
                header('location: '. BASE_URL . '/view/login');
            }
            
            return 0;
        }
        
        Auth::setUser($data);
        if(isset($_SERVER['HTTPS'])){
            header('location: ../dashboard');
        }else{
            header('location: '. BASE_URL . '/view/dashboard');
        }
    }
    
    public function logout()
    {
        Auth::logout();
    }
}