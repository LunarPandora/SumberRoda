<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="post" action="error.php" id="form-login">
        <div class="form-group">
            <label class="form-label" for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>    
    
        <div class="form-group">
            <label class="form-label" for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        
        <div class="form-group">
            <label class="form-label" for="confirm_password">Confirm password</label>
            <input type="password" name="confirm_password" id="confirm_password">
        </div>
        
        <div class="form-group">
            <input type="submit" value="save">
        </div>
    </form>
    
<script>
    const form = document.getElementById('form-login');
    
    form.addEventListener('submit', function(e){
        e.preventDefault();
        
        const password = document.getElementById('password');
        const confirm_password = document.getElementById('confirm_password');
        
        if(password.value != confirm_password.value){
            alert('Password unmatched');
            return 0;
        }
        
        const xhr = XMLHttpRequest();
        xhr.open('POST', '', true);
        
        
        xhr.onload = function () {
            var status = xhr.status;
            if (status == 200) {
                alert('berhasil ditambah data');
            } else {
                alert('')
            }
        };
    })
</script>
</body>
</html>