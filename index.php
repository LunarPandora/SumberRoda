<?php
require './app/init.php';

if($_SESSION['coba']){
    echo $_SESSION['coba'];
}
// header("location:". BASE_URL ."view/login");