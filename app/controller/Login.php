<?php
class Login extends Controller{
    
    public function __construct(){
        $_SESSION['coba'] = "Bisa jalan dak";
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
            header('location: '. BASE_URL . 'view/login');
            
            return 0;
        }
        
        Auth::setUser($data);
        header('location: '. BASE_URL . 'view/dashboard');
    }
    
    public function logout()
    {
        Auth::logout();
    }
}