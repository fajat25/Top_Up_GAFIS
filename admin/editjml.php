<?php 
 
require "function.php"; //memanggil database

$id = $_POST['id'];
$nama = $_POST['julahdm'];
$keterangan = $_POST['harga'];
 
$update = mysqli_query($conn,"update adminjokiml set pesanan='$nama', harga='$keterangan' WHERE id='$id'");
header("location:admintopupml.php");



?>