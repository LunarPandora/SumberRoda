<?php
if(isset($_SERVER['HTTPS'])){
    require "/storage/ssd4/802/20555802/public_html/app/init.php";
}else{
    require_once "../../app/init.php";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5 class="list-style-none">Coba</h5>
    <a href="<?= BASE_URL ?>dashboard">Klik sini</a>
</body>
</html>