<?php

class Auth {
    
    public static function setUser($data)
    {
        foreach($data as $key => $value){
            $_SESSION['user'][$key] = $value;
        }
    }
    
    public static function user()
    {
        $user = [];
        if(isset($_SESSION['user'])){
            $user = $_SESSION['user'];
        }
        return $user;
    }
    
    public static function logout()
    {
        unset($_SESSION['user']);
        
        if(isset($_SERVER['HTTPS'])){
            header('location: /storage/ssd4/802/20555802/public_html/view/login');
        }else{
            header('location: '. BASE_URL . '/view/login');
        }
    }
    
    // public function generateRandomString($length = 30)
    // {
    //     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //     $characterLength = strlen($characters);
    //     $randomString = '';
    //     for ($i = 0; $i < $length; $i++) {
    //         $randomString .= $characters[random_int(0, $characterLength - 1)];
    //     }
        
    //     if($this->model('Session_user')->fetchData($randomString)){
    //         $this->generateRandomString();
    //     }
    //     return $randomString;
    // }
}