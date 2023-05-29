<?php

class Migrate{
    public function __construct() {
        $this->index();
    }
    
    public function index()
    {
        $migration = new Migration;
        
        $migration->exec();
    }
}