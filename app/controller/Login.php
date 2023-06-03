<?php

class Login extends Controller{
    
    public function __construct(){
        if(isset($_SERVER['HTTPS'])){
            if(!Auth::user()) header('location: /storage/ssd4/802/20555802/public_html/view/dashboard');
        }else{
            if(!Auth::user()) header('location: '. BASE_URL . '/view/dashboard');
        }
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
            if(isset($_SERVER['HTTPS'])){
                header('location: /storage/ssd4/802/20555802/public_html/view/login');
            }else{
                header('location: '. BASE_URL . '/view/login');
            }
            
            return 0;
        }
        
        Auth::setUser($data);
        if(isset($_SERVER['HTTPS'])){
            header('location: /storage/ssd4/802/20555802/public_html/view/login');
        }else{
            header('location: '. BASE_URL . '/view/login');
        }
    }
    
    public function logout()
    {
        Auth::logout();
    }
}