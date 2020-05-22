<?php
isset($_GET['urun_adi']);
isset($_GET['urun_gorsel']);
isset($_GET['miktar']);
$urun_gorsel = $_GET['urun_gorsel'];
$urun_adi = $_GET['urun_adi'];
$miktar = $_GET['miktar'];

if ($urun_gorsel<>"" && $urun_adi<>""  &&  $miktar<>"") {

$baglan = mysqli_connect('localhost', 'root', '', 'db');
$veriEkle = $baglan->query("INSERT INTO  tablo (urun_adi, urun_gorsel, urun_miktar) VALUES ('$urun_adi', '$urun_gorsel', '$miktar')");
header("location:index.php");

} else {
    echo "Bütün Verileri Doldurunuz. <br> 5 Saniye İçerisinde Geri Yönlendirileceksiniz.";
    header("Refresh:5; url=insert-form.php");
}

 ?>
