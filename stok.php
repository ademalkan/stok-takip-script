<?php

$id = $_GET['id'];
$urun_miktar = $_GET['urun_miktar'];
$azalt =  --$urun_miktar;
$baglan = mysqli_connect('localhost', 'root', '', 'db');
$baglan->query("UPDATE tablo SET urun_miktar = '$azalt' WHERE id ='$id'");
header("location:index.php");

 ?>
