<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $baglan = mysqli_connect('localhost', 'root', '', 'db');
    $veriSil = $baglan->query("DELETE FROM  tablo WHERE id=$id");
    header("location:index.php");
}

 ?>
