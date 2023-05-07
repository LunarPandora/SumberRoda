<?php

namespace Function;
require 'init.php';

class Auth extends Config{
    protected $db;
    
    public function __construct()
    {
        $config = new Config;
        $this->db = $config->openDB();
    }
}