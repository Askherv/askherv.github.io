<?php
    ob_start();
    $user='b211210554@sakarya.edu.tr';
    $pass='98716206237';

    if(isset($_POST['sub']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];

        if ($username==$user && $password==$pass)
        {
            header('location:hakkinda.html');
            exit();
        }
        else 
        {
            echo "E-Posta veya şifre hatalı";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Bakü'den bir genç</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="form-box">
            <h3><span class="ilk-harf">B</span>akü'den bir genç</h3>
            <form id="Login" class="input-group">
                <input type="text" class="input-field" name="username" placeholder="Kullanıcı adınızı giriniz" required>
                <input type="password" class="input-field" name="password" placeholder="Şifrenizi giriniz" required>
                <button type="submit" name="sub" class="submit-btn">Giriş Yap</button>
            </form>
        </div>
    </div>
</body>
</html>