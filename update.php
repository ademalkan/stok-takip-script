<?php

if ($_GET) {
    
    $id = $_GET['id'];
    $urun_gorsel = $_GET['urun_gorsel'];
    $urun_adi = $_GET['urun_adi'];
    $urun_miktar = $_GET['urun_miktar'];
    if ($urun_gorsel<>"" && $urun_adi<>""  &&  $urun_miktar<>"") {

        $baglan = mysqli_connect('localhost', 'root', '', 'db');
        if ($baglan->query("UPDATE tda SET urun_adi = '$urun_adi', urun_gorsel = '$urun_gorsel', urun_miktar = '$urun_miktar' WHERE id ='$id'"))
        {
            header("location:index.php");
            
        }
        else
        {
            echo "Hata oluştu";
        }
    }
}
?>
