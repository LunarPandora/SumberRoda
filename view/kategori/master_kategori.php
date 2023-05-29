<?php

class Migrate{
    public function_construct() {
        $this->index();
    }
    
    public function index()
    {
        $migration = new Migration;
        
        $migration->exec();
    }
}