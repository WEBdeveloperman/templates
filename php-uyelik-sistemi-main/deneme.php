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
<div class="container">
    <div class="col-md-6">

        <!-- Öncelikle HTML düzenimizi oluşturuyoruz. Daha sonra girdiğimiz verileri veritabanına eklemesi için PHP kodlarına geçiyoruz. -->

        <?php

        if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

            // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
            $kadi = $_POST['user_name'];
            $sifre = $_POST['password'];
            $isim = $_POST['name'];

            if ($kadi<>"" && $sifre<>""&& $isim<>"") {
                // Veri alanlarının boş olmadığını kontrol ettiriyoruz. Başka kontrollerde yapabilirsiniz.

                // Veri ekleme sorgumuzu yazıyoruz.
                if ($conn->query("INSERT INTO users (user_name, password, name) VALUES ('$kadi','$sifre','$isim')"))
                {
                    echo "Veri Eklendi"; // Eğer veri eklendiyse eklendi yazmasını sağlıyoruz.
                }
                else
                {
                    echo "Hata oluştu";
                }

            }

        }

        ?>
    </div>
    <!-- ############################################################## -->

    <!-- Veritabanına eklenmiş verileri sıralamak için önce üst kısmı hazırlayalım. -->
    <br>
    <br>
    <div class="col-md-7">
        <table class="table">
            <tr>
                <th>İd</th>
                <th>Kullanıcı adı</th>
                <th>Şifre</th>
                <th>İsim</th>
                <th></th>
                <th></th>
            </tr>

            <!-- Şimdi ise verileri sıralayarak çekmek için PHP kodlamamıza geçiyoruz. -->

            <?php

            $sorgu = $conn->query("SELECT * FROM users"); // Makale tablosundaki tüm verileri çekiyoruz.

            while ($sonuc = $sorgu->fetch_assoc()) {

                $id = $sonuc['id']; // Veritabanından çektiğimiz id satırını $id olarak tanımlıyoruz.
                $uname = $sonuc['user_name'];
                $pass = $sonuc['password'];
                $name = $sonuc['name'];

// While döngüsü ile verileri sıralayacağız. Burada PHP tagını kapatarak tırnaklarla uğraşmadan tekrarlatabiliriz.
                ?>

                <tr>
                    <td><?php echo $id; // Yukarıda tanıttığımız gibi alanları dolduruyoruz. ?></td>
                    <td><?php echo $uname; ?></td>
                    <td><?php echo $pass; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><a href="duzenle.php?id=<?php echo $id; ?>" class="btn btn-primary">Düzenle</a></td>
                    <td><a href="sil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a></td>
                </tr>


                <?php
            }
            // Tekrarlanacak kısım bittikten sonra PHP tagının içinde while döngüsünü süslü parantezi kapatarak sonlandırıyoruz.
            ?>
            <tr>
            </tr>
        </table>
    </div>
</div>
</body>
</html>