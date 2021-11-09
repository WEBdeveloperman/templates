<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>uyelik</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway:200,400,800' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/css/demo.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="large-header" class="large-header">
    <canvas id="demo-canvas"></canvas>
    <div class="main-title">
        <form action="signup-check.php" method="post">
            <h2>Kayıt Ol</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php  if  (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php header('Refresh: 5; url=index.php'); } ?>

            <?php if (isset($_GET['name'])) { ?>
                <input type="text"
                       name="name"
                       placeholder="Ad Soyad"
                       value="<?php echo $_GET['name']; ?>"><br>
            <?php }else{ ?>
                <input type="text"
                       name="name"
                       placeholder="Ad Soyad"><br>
            <?php }?>

            <?php if (isset($_GET['uname'])) { ?>
                <input type="text"
                       name="uname"
                       placeholder="Kullanıcı Adı"
                       value="<?php echo $_GET['uname']; ?>"><br>
            <?php }else{ ?>
                <input type="text"
                       name="uname"
                       placeholder="Kullanıcı Adı"><br>
            <?php }?>

            <input type="password"
                   name="password"
                   placeholder="Şifre"><br>

            <input type="password"
                   name="re_password"
                   placeholder="Şifre Terkar"><br>

            <button type="submit">Kayıt Ol</button>
            <a href="index.php" class="ca">Zaten hesabın var mı?</a>
        </form>
    </div>
</div>
<!-- partial -->
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js'></script>
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/rAF.js'></script>
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/TweenLite.min.js'></script><script  src="./script.js"></script>

</body>
</html>
