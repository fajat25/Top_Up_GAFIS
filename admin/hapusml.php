<?php
    require "function.php"; //memanggil database

    $idb = $_GET['id'];

    $hapus = mysqli_query($conn, "delete from adminmltopup where id='$idb'");
        if($hapus){
           header("location:admintopupml.php");
        } else{
           echo "Gagal";
            header("location:admintopupml.php");
        }
?>