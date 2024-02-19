<?php

session_start();
$conn = mysqli_connect("localhost","root","","gafis");
//  coding test koneksi
if ($conn) {
    echo "sukses!";
}

if(isset($_POST["addbaru"])){
    $userid = $_POST["jumlah"];
    $server = $_POST["harga"];
    $addtotable = mysqli_query($conn,"insert into adminmltopup (jumlahdm, harga) values('$userid','$server')");
    if($addtotable){
        echo "berhasil gaes";
        header("location:admintopupml.php");
    } else{
        echo "Gagal";
        header("location:admintopupml.php");
    }
};


?>