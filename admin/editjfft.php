<?php 
 
require "function.php"; //memanggil database

$id = $_POST['id'];
$nama = $_POST['setatus'];
 
$update = mysqli_query($conn,"update jokiff set setatus='$nama' WHERE idcus='$id'");
header("location:tranjokiff.php");



?>