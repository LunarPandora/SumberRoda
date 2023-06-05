<?php

class Merek_produk_model{
    private $table = 'session_user';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllData(){
        $this->db->query("SELECT * FROM $this->table ORDER BY id DESC");
        return $this->db->resultSet();
    }
    
    public function insertData($data)
    {
        $this->db->query("INSERT INTO $this->table(session_id, id_user, expired_time) VALUES('$data[session_id]', '$data[id_user]', '$data[expired_time]')");
        return $this->db->execute();
    }
    
    public function fetchData($session_id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE session_id=:session_id");
        $this->db->bind('session_id', $session_id);
        
        $data = $this->db->single();
        if($data['expired_time'] >= time()){
            $this->removeData($data);
            return false;
        }
        
        
    }
    
    public function editData($data)
    {
        $this->db->query("UPDATE $this->table SET nama=:nama WHERE id=:id");
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id', $data['id']);
        
        return $this->db->execute();
    }
    
    public function removeData($data)
    {
        $this->db->query("DELETE FROM $this->table WHERE id=:id");
        $this->db->bind('id', $data['id']);
        return $this->db->execute();
    }
}