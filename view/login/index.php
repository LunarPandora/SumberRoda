<?php
require_once "../../app/init.php";

// $_SESSION['coba'] = "bisa jalan dak";
// echo $_SESSION['coba'];
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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container h-100" id="login">
        <div class="contentX flex h-100 justify-center items-center">
            <div class="left-login-box h-100 w-50">
                <!-- <div class="contentX h-100 w-100"></div> -->
            </div>
            <div class="form-box p-4 w-50 h-100 bg-black flex flex-col items-center justify-center">
                <div class="form-title flex flex-col items-center">
                    <img src="../../assets/media/logo.png">
                    <p class="text-xl text-white fw-semibold">
                        <span class="text-xl text-primary fw-semibold">Sumber</span>Roda
                    </p>

                    <p class="text-sm text-disabled fw-light my-2" align="center">
                        Semua kebutuhan mobilmu ada di sini. <br>Masuk untuk melanjutkan.
                    </p>
                </div>
                
                <form method="post" action="" id="form-login" class="w-75">
                    <div class="form-group">
                        <input type="email" name="user_email" id="user_email" placeholder="Masukkan email anda" required>
                    </div>    
                
                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="Masukkan password anda" required>
                    </div>
                    
                    <div class="form-group my-2">
                        <input type="submit" class="btn btn-primary" name="login" value="Masuk">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php 
        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
    ?>
    
</body>
</html>