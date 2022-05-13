<?php
    ob_start();
    $user='b211210554@gmail.com';
    $pass='98716206237';

    if(isset($_POST['kullaniciadi']))
    {
        $kullaniciadi=$_POST['kullaniciadi'];
        $sifre=$_POST['sifre'];

        if ($kullaniciadi==$user && $sifre==$pass){
            header('location:hakkinda.html');
        }
        else 
        {
            echo 'E-Posta veya şifre hatalı';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login-Bakü'den bir genç</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="form-box">
            <h3><span class="ilk-harf">B</span>akü'den bir genç</h3>
            <form id="Login" class="input-group" action="hakkinda.html" method="post">
                <input type="text" class="input-field" name="kullaniciadi" placeholder="Kullanıcı adınızı giriniz" required>
                <input type="password" class="input-field" name="sifre" placeholder="Şifrenizi giriniz" required>
                <button type="submit" class="submit-btn">Giriş Yap</button>
            </form>
        </div>
    </div>
</body>
</html>