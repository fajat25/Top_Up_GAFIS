<?php 
 
require "function.php"; //memanggil database

$id = $_POST['id'];
$nama = $_POST['setatus'];
 
$update = mysqli_query($conn,"update topupff set setatus='$nama' WHERE idcu='$id'");
header("location:trantopupff.php");



?>