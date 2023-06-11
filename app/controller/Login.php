<?php
class Login extends Controller{
    
    public function __construct(){
        if(Auth::user()) header('location: '. BASE_URL . 'view/dashboard');
    }
    
    public function index()
    {
        $this->view('login/index');
    }
    
    public function tryAuthenticate()
    {
        $data = $this->model('User_model')->login($_POST);
        
        if(!$data){
            $_SESSION['error'] = "Silahkan menggunakan email atau password yang lain";
            header('location: '. BASE_URL . 'view/login');
        }
        
        Auth::setUser($data);
        header('location: '. BASE_URL . 'view/dashboard');
    }
    
    public function logout()
    {
        Auth::logout();
    }
}