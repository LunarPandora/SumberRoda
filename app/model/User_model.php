<?php

class User_model{
    private $table = 'user';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getUser(){
        $this->db->query("SELECT * FROM $this->table WHERE id=1");
        return $this->db->single();
    }
    
    public function login($data)
    {
        $this->db->query("SELECT * FROM user WHERE email=:email");
        $this->db->bind('email', $data['user_email']);
        
        if(password_verify($data['password'], $this->db->single()['password'])){
            return $this->db->single();
        }else{
            return false;
        }
    }
}