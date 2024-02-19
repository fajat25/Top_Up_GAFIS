<?php 
 
require "function.php"; //memanggil database
$id = $_POST['id'];
$nama = $_POST['nama'];
 
$update = mysqli_query($conn,"update stock set harga='$nama' WHERE idcus='$id'");

header("location:index.html");

?>