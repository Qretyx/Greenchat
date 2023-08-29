<?php
    session_start();
    if(!isset($_SESSION['isim'])){
        header("Refresh:0; url=login.php");
        exit;
    }
    echo $_SESSION['tema'];
    if(isset($_POST['mesaj'])){
        if(strlen($_POST['mesaj']) > 0 && strlen($_POST['mesaj']) < 2000){
        $mesaj = $_POST['mesaj'];
        $file = fopen("mesajlar3773.txt", "a"); // Dosyayı yazma modunda aç
        
        $text = "<span class='red'>".htmlspecialchars($_SESSION['id'])."- </span>"."<span class='green'>". htmlspecialchars($_SESSION['isim'])."-</span> ".htmlspecialchars($mesaj)."<br>";
        fwrite($file, $text); // Dosyaya yazıyı yazdır
        fclose($file); // Dosyayı kapat
        header("Refresh:0; url=chat.php#enyenimesaj");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenChat - Chatting</title>
    <?php
        if($_SESSION['tema'] == "1"){
            echo '<link rel="stylesheet" href="css1.css">';
        }else{
            echo '<link rel="stylesheet" href="css2.css">';
        }
    ?>
    
    <link rel="icon" href="resimler/anarchy.png">
</head>
<body>
    <center><p><span class="green">Green</span>Chat <a href="temadegistir.php">Temayi degistir</a></p> </center>
    <div class="mesajlar"><p>
        <?php
            $content = file_get_contents("mesajlar3773.txt"); // Dosyayı oku
            if ($content !== false) {
                echo $content; // İçeriği ekrana yazdır
            } else {
                echo "Dosya okuma hatası!";
            }
        ?>
        </p>
    </div>
    <div id="enyenimesaj"></div>
    
        
        <div class="mesajgonder">
            <hr>
            <form action="" method="post">
                <input type="text" name="mesaj" placeholder="Mesaj" id="">
                <button type="submit">Gonder</button>
                <a href="#enyenimesaj"><button>Sayfayi Yenile</button></a>
            </form>
            <hr>
            </div>
    
</body>
</html>