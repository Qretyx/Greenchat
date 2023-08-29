<?php 
    session_start();
    if(isset($_SESSION['isim'])){
        header("Refresh:0; url=chat.php");
        exit;
    }
    if(isset($_POST['nickname'])){
        $_SESSION['isim'] = $_POST['nickname'];
        $_SESSION['id'] = strval(rand(100,1000));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenChat - Login</title>
    <link rel="stylesheet" href="css.css">
    <link rel="icon" href="resimler/anarchy.png">
</head>
<body>
    <div class="giris">
        <center>
        <p><span class="green">Green</span>Chat</p>
        <form action="" method="post">
            <input type="text" name="nickname" class="login" placeholder="Nickname" id=""> <br> <br>
            <button type="submit">Sohbete Basla</button>
            
        </form>
        </center>
    </div>
</body>
</html>