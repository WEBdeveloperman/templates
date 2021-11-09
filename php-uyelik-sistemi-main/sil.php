<?php

if ($_GET)
{

    include("db_conn.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.

// id'si seçilen veriyi silme sorgumuzu yazıyoruz.
    if ($conn->query("DELETE FROM users WHERE id =".(int)$_GET['id']))
    {
        header("location:deneme.php"); // Eğer sorgu çalışırsa ekle.php sayfasına gönderiyoruz.
    }
}

?>