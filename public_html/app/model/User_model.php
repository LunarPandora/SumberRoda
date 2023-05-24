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
        $this->db->query("SELECT * FROM user WHERE email=:email AND password=:password");
        $this->db->bind('email', $data['user_email']);
        $this->db->bind('password', md5($data['password']));
        $this->db->execute();
        
        return $this->db->single();
    }
}