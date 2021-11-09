<?php 
session_start();


if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

 ?>

    <!DOCTYPE html>
    <html lang="en" >
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
    <body>
    <!-- partial:index.partial.html -->
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
            <div><a href="logout.php">Çıkış Yap</a></div><a href="signup.php">Farklı bir hesap aç</a>
            <form class="arama" action="homelogin.php" method="get">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <input type="text" name="uname" placeholder="Kullanıcı Adı"><br>
                <button type="submit">Arama yap</button>
            </form>


            </body>
            </html>
        </div>
    </div>
    <!-- partial -->
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