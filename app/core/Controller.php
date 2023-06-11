<?php

class Controller{
    public function view($view, $data = []){
        if(isset($_SERVER['HTTPS'])){
            require BASE_URL."app/view/$view.php";
        }else{
            require_once "../$view.php";
        }
    }
    
    public function model($model){
        if(isset($_SERVER['HTTPS'])){
            require BASE_URL."app/model/$model.php";
        }else{
            require_once "../../app/model/$model.php";
        }
        
        return new $model;
    }
}