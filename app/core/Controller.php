<?php
class Controller{
    public function view($view, $data = []){
        require_once BASE_URL."view/$view.php";
    }
    
    public function model($model){
        require_once "../../app/model/$model.php";
        // if(isset($_SERVER['HTTPS'])){
        //     require BASE_URL."app/model/$model.php";
        // }else{
        //     require_once "../../app/model/$model.php";
        // }
        
        return new $model;
    }
}