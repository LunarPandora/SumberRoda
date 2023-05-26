<?php

class Migrate{
    public function index()
    {
        $migration = new Migration;
        
        $migration->exec();
    }
}