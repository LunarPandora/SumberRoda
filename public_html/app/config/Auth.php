<?php

class Auth{
    
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
        
        header('location: '. BASE_URL. '/view/login');
    }
}