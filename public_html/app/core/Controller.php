<?php

class Controller{
    public function view($view, $data = []){
        require_once "../$view.php";
    }
    
    public function model($model){
        var_dump($_SERVER['SCRIPT_NAME']);
        require_once "../../app/model/$model.php";
        
        return new $model;
    }
}
