<?php
require './app/init.php';

if(isset($_SERVER['HTTPS'])){
    header("location: /storage/ssd4/802/20555802/public_html//view/login");
}else{
    header("location:". BASE_URL ."/view/login");
}

