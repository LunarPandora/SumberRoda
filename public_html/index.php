<?php
require './app/init.php';

if(isset($_SERVER['HTTPS'])){
    header("location: view/login");
}else{
    header("location:". BASE_URL ."/view/login");
}

