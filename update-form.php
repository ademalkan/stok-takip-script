<?php
$baglan = mysqli_connect('localhost', 'root', '', 'db');
    if ($baglan) {
        $sorgu = $baglan->query("SELECT * FROM tablo WHERE id =".$_GET['id']);
        $veriler = $sorgu->fetch_assoc();

    } else {
        die('Bağlantı başarısız :'. mysql_error());
    }

 ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>
<form method="GET" action="update.php">
    <table>
    <th>Ürün Kodu</th>
    <th>Ürün Görsel</th>
    <th>Ürün Adı</th>
    <th>Stok</th>
        <th> </th>
        <tr>
            <td><input type="text" placeholder="<?php echo $veriler['id']; ?>" name="id"></td>
            <td><input type="text"  placeholder="<?php echo $veriler['urun_gorsel']; ?>" name="urun_gorsel"></td>
            <td><input type="text"  placeholder="<?php echo $veriler['urun_adi']; ?>" name="urun_adi"></td>
            <td><input type="text"  placeholder="<?php echo $veriler['urun_miktar']; ?>" name="urun_miktar"></td>
            <td> <input type="submit" value="Düzenle" name=""> </td>
        </tr>
    </table>
</form>

</body>
</html>
<style type="text/css">
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    th{
        background-color: #4CAF50;
          color: white;
    }
</style>
