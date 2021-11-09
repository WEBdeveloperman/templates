<?php
include("db_conn.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Veritabanı İşlemleri</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

<?php

$sorgu = $conn->query("SELECT * FROM users WHERE id =".(int)$_GET['id']);
//id değeri ile düzenlenecek verileri veritabanından alacak sorgu

$sonuc = $sorgu->fetch_assoc(); //sorgu çalıştırılıp veriler alınıyor

?>

<div class="container">
    <div class="col-md-6">

        <form action="" method="post">

            <table class="table">

                <tr>
                    <td>Kullanıcı Adı</td>
                    <td><input type="text" name="user_name" class="form-control" value="<?php echo $sonuc['user_name'];
                        // Veritabanından verileri çekip inputların içine yazdırıyoruz. ?>">
                    </td>
                </tr>

                <tr>
                    <td>Şifre</td>
                    <td><textarea name="password" class="form-control"><?php echo $sonuc['password']; ?></textarea></td>
                </tr>

                <tr>
                    <td>İsim</td>
                    <td><textarea name="name" class="form-control"><?php echo $sonuc['name']; ?></textarea></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" class="btn btn-primary" value="Kaydet"></td>
                </tr>

            </table>

        </form>
    </div>
    <div>
        <?php

        if ($_POST) { // Post olup olmadığını kontrol ediyoruz.

            $uname = $_POST['user_name'];
            $pass = $_POST['password'];
            $name = $_POST['name'];

            if ($uname<>"" && $pass<>"" && $name<>"") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.

                if ($conn->query("UPDATE users SET user_name = '$uname', password = '$pass', name = '$name' WHERE id =".$_GET['id'])) // Veri güncelleme sorgumuzu yazıyoruz.
                {
                    header("location:deneme.php"); // Eğer güncelleme sorgusu çalıştıysa ekle.php sayfasına yönlendiriyoruz.
                }
                else
                {
                    echo "Hata oluştu"; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
                }

            }

        }

        ?>
</body>
</html>
