<?php include "ayar.php" ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Animated Background</title>
  <link href='https://fonts.googleapis.com/css?family=Raleway:200,400,800' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/css/demo.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
    <div id="large-header" class="large-header">
        <canvas id="demo-canvas"></canvas>
            <div class="main-title">
                  <form action="login.php" method="post">
                    <h2>Giriş Yap</h2>
                    <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <input type="text" name="uname" placeholder="Kullanıcı Adı"><br>

                    <input type="password" name="password" placeholder="Şifre"><br>

                    <button type="submit">Giriş Yap</button>
                    <a href="signup.php" class="ca">Hesap Oluştur</a>
                  </form>
            </div>
    </div>
<!-- partial -->
  <script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js'></script>
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/rAF.js'></script>
<script src='https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/TweenLite.min.js'></script><script  src="./script.js"></script>

</body>
</html>
