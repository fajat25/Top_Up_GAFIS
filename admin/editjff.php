<?php 
 
require "function.php"; //memanggil database

$id = $_POST['id'];
$nama = $_POST['jumlahdm'];
$keterangan = $_POST['harga'];
 
$update = mysqli_query($conn,"update adminjokiff set pesanan='$nama', harga='$keterangan' WHERE id='$id'");
header("location:admintopupff.php");



?>