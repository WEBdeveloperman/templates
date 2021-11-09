
<?php
session_start();


if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <title>uyelik</title>
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/css/demo.css'><link rel="stylesheet" href="./style.css">

</head>
<div id="large-header" class="large-header">
    <canvas id="demo-canvas"></canvas>
    <div class="main-title">
        <!DOCTYPE html>
        <html>
        <head>
            <title>Ana Sayfa</title>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
        <h1>Merhaba, <?php echo $_SESSION['name']; ?></h1>
        <div><button class="button" href="logout.php">Çıkış Yap</button></div><br>
        <button class="button" href="signup.php">Farklı bir hesap aç</button><br><br>
        <br><br><form class="arama" action="homelogin.php" method="get">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <input type="text" name="uname" placeholder="Kullanıcı Adı"><br>
            <button type="submit">Arama yap</button>
        </form><br><br>
        <div class="search">
            <?php

            try {//hata varmı diye kontrol mekanizması.

                $baglanti = new PDO("mysql:host=localhost;dbname=db", "root", "");//bağlantı yaptık



                //echo "Mysql Bağlantısı Başarıyla Sağlandı. <br />";//bağlantı varsa ekrana yaz.
                $kadi = $_GET['uname'];
                if (empty($kadi)) {
                    header("Location: home.php?error=Kullanıcı adı gereklidir");
                    exit();
                }else{
                    $ara = $baglanti->query("select * from users where user_name like '%$kadi%' ");//arattığımız kullanıcı adını çektik '' tırnaklar içersinde.
                    $miktar = $ara->rowCount();//verilerin hepsini saydırdık.


                    if ($ara) {//eğer veri çekildiyse

                        echo "Kullanıcı adları <br />";

                        if ($miktar > 0) {

                            foreach ($ara as $al) {//foreach $arada ki tüm verileri tek tek $al değişkenine aktaracak


                                 echo $al["user_name"] . "<br />";//Aldığımız verilerden isim sütununu ekrana bastırdık

                            }
                        } else {
                            header("Location: home.php?error=Aranan kullanıcı adında bir kullanıcı bulunamadı!.");
                            exit();

                        }
                    } else {
                        header("Location: home.php?error=veri çekilemedi!");
                        exit();
                    }

                }
            } catch (PDOException $h) {

                $hata = $h->getMessage();

                echo "<b>HATA VAR :</b> " . $hata;//bağlantı hatası olursa.hata var yaz.

            }


            ?>
        </div>

        </body>
        </html>
    </div>
</div>
</html>
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js'></script>
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/rAF.js'></script>
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/TweenLite.min.js'></script><script  src="./script.js"></script>

</body>
</html>
    <?php
}else{
    header("Location: index.php");
    exit();
}
?>

