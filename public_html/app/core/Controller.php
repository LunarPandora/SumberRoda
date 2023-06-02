<?php

class Controller{
    public function view($view, $data = []){
        require_once "../$view.php";
    }
    
    public function model($model){
        if(isset($_SERVER['HTTPS'])){
            require "/storage/ssd4/802/20555802/public_html/app/model/$model.php";
        }else{
            require_once "../../app/model/$model.php";
        }
        
        return new $model;
    }
}
