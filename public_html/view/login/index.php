<?php
if(isset($_SERVER['HTTPS'])){
    require '/storage/ssd4/802/20555802/public_html/app/init.php';
}else{
    require '../../app/init.php';
}

$page = new Login;
if(isset($_POST['login'])){
    $success = $page->tryAuthenticate($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="" id="form-login">
        <div class="form-group">
            <label class="form-label" for="email">email</label>
            <input type="email" name="user_email" id="user_email" required>
        </div>    
    
        <div class="form-group">
            <label class="form-label" for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        
        <div class="form-group">
            <input type="submit" name="login" value="save">
        </div>
    </form>
    
    <?php 
        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
        }
    ?>
    
</body>
</html>