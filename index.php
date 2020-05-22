<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table>
    <th>Ürün Kodu</th>
    <th>Ürün Görsel</th>
    <th>Ürün Adı</th>
    <th>Stok</th>
    <th>İşlemler</th>
    <th><a href="insert-form.php">Yeni Ürün Ekle</a></th>
    <input type="hidden" name="id">
</body>
</html>
<style type="text/css">
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        text-align: left;
        padding: 4vh;
    }
    th{
        background-color: #4CAF50;
          color: white;
    }
    img    {
        height: 14vh;
        width: 7vw;
    }
</style>
<?php


$baglan = mysqli_connect('localhost', 'root', '', 'db');
    if ($baglan) {
        $sql="SELECT * FROM tablo";
        $vericek=mysqli_query($baglan,$sql);
        while( $veriler=mysqli_fetch_array($vericek,MYSQLI_ASSOC) ){
        echo "<tr><td>".$veriler["id"]."</td><td>"."<img src=".$veriler["urun_gorsel"]."></td><td>".$veriler["urun_adi"]."</td><td>".$veriler["urun_miktar"]."</td><td>    <form method='get' action='delete.php'><a href=stok.php?id=".$veriler["id"]."&urun_miktar=".$veriler["urun_miktar"].">Stok Azalt"." - "."</a><a href=delete.php?id=".$veriler["id"].">Ürün Sil"." - "."</a><a href=update-form.php?id=".$veriler["id"].">Ürün Düzenle</form></tr>";
        }
    }
     else {
        die('Bağlantı başarısız :'. mysql_error());
    }
    echo "</table>";

 ?>
