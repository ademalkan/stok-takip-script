<?php 
session_start();
$kod = $_SESSION['kod'];
 echo "<form method='GET' action=''>
    <table>
        <th>Ürün Görsel</th>
        <th>Ürün Adı</th>
        <th>Stok</th>
        <th></th>
        <th>İşlemler</th>
        <tr>
            <td><input type='text' placeholder='Görsel adresi' name='urun_gorsel'></td>
            <td><input type='text'  name='urun_adi'></td>
            <td><input type='text'  name='miktar'></td>
            <td>
                <img src='captcha.php' style='border: 1px solid #525252'>
                <input type='text' name='guvenlik' size='8' style='border: 1px solid #525252'>
            </td>
            <td><input type='submit' value='Ekle' name=''></td>
        </tr>
    </table>
</form>
<style type='text/css'>
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
</style>";
if ($_GET) {
    $guvenlik = $_GET['guvenlik'];
    if ($kod == $guvenlik) {
        header("location:insert.php");

    } else {
        echo "Hatalı Güvenlik Kodu";
    }
}
?>
