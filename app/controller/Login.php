<?php

class Login extends Controller{
    
    // public function __construct(){
    //     if(Auth::user()) header("location:". BASE_URL . "dashboard");
    // }
    
    public function index()
    {
        $this->view('login/index');
    }
    
    public function tryAuthenticate($data)
    {
        $data = $this->model('User_model')->login($data);
        if(!$data){
            $_SESSION['error'] = "Gagal login, silahkan menggunakan email atau password yang berbeda";
            header("location:". BASE_URL . "/view/login");
            
            return 0;
        }
        
        Auth::setUser($data);
        header("location:". BASE_URL . "/view/dashboard");
    }
    
    public function logout()
    {
        Auth::logout();
    }
}