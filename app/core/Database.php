<?php

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    public $db_name = DB_NAME;
    
    private $dbh;
    private $stmt;
    
    public function __construct()
    {
        $dbcfg = "mysql:host=$this->host;dbname=$this->db_name";
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        
        try{
            $this->dbh = new PDO($dbcfg, $this->user, $this->pass, $options);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    
    //$conn =  new PDO($dbcfg, $this->user, $this->pass, $options);
    //$sql = $conn->prepare("SELECT * FROM user");
    //$conn->execute();
    
    //$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
    //$sql = "SELECT * FROM user";
    //mysqli_query($conn, $sql);
    
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }
    
    public function bind($param, $value, $type = null)
    {
        if(is_null($type)){
            switch(true){
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }
        
        $this->stmt->bindValue($param, $value, $type);
    }
    
    public function execute()
    {
        $this->stmt->execute();
    }
    
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}