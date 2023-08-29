<?php
session_start();
if(!isset($_SESSION['isim'])){
    header("Refresh:0; url=login.php");
    exit;
}
if(isset($_POST['tik'])){
    $_SESSION['tema'] = $_POST['tik'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenChat - Tema</title>
    <link href="css3.css" type="text/css" rel="stylesheet"/>
</head>
<body>
    <center><p> <a href="chat.php"><span class="green">Green</span>Chat</a> <a href="temadegistir.php">Temayi degistir</a></p> </center>
    <div class="kutu">
    <form method="POST" action="">
    <p>1. Tema(Bilgisayar icin)</p><input type="checkbox" name="tik" value="1">
    <p>2. Tema(Telefon icin)</p><input type="checkbox" name="tik" value="2"> <br>
        <input type="submit" value="Gönder">
    </form>
    </div>
</body>
</html>