<?php
$conn = mysqli_connect("localhost","root","","gafis");
//  coding test koneksi
if ($conn) {
    echo "sukses!";
}
include_once "cek.php";   
$pdo = include "koneksi.php";

if(isset($_POST["addnewbarang"])){
    $userid = $_POST["userid"];
    $ser = $_POST["server"];
    $brandtype = $_POST["brandtype"];
    $brand = $_POST["setatus"];
    $brandtyp = $_SESSION['user']['id'];

    //soal gambar
    $allowed_extension = array('png','jpg','jpeg');
    $nama = $_FILES['file']['name'];//ambil nama gambar
    $ukuran = $_FILES['file']['size']; // ambil size
    $file_tmp = $_FILES['file']['tmp_name']; //ambil lokasi

    if(in_array($allowed_extension) === true);
        if($ukuran < 15000000){
            move_uploaded_file($file_tmp, 'image/'.$nama);

            $addtotable = mysqli_query($conn,"insert into topupml (userid, server, jumlahdm, pengirim,  setatus, id_user) values('$userid','$ser','$brandtype','$nama','$brand','$brandtyp')");
            if($addtotable){
                echo "berhasil gaes";
                header("location:index.php");
            } else{
                echo "Gagal";
                header("location:index.html");
            }
        } else {
            echo '
        <script>
        alert("file kebesaran");
        window.location.keluar.php;
        </script>
        ';
    }
}

if(isset($_POST["addnewba"])){
    $userid = $_POST["userid"];
    $brandtype = $_POST["brandtype"];
    $brand = $_POST["setatus"];
    $brandtyp = $_SESSION['user']['id'];

    //soal gambar
    $allowed_extension = array('png','jpg','jpeg');
    $nama = $_FILES['file']['name'];//ambil nama gambar
    $ukuran = $_FILES['file']['size']; // ambil size
    $file_tmp = $_FILES['file']['tmp_name']; //ambil lokasi

    if(in_array($allowed_extension) === true);
        if($ukuran < 15000000){
            move_uploaded_file($file_tmp, 'image/'.$nama);

            $addtotable = mysqli_query($conn,"insert into topupff (userid, jumlahdm, pengirim,  setatus, id_user) values('$userid','$brandtype','$nama','$brand','$brandtyp')");
            if($addtotable){
                echo "berhasil gaes";
                header("location:index.php");
            } else{
                echo "Gagal";
                header("location:index.html");
            }
        } else {
            echo '
        <script>
        alert("file kebesaran");
        window.location.keluar.php;
        </script>
        ';
    }
}

if(isset($_POST["addnewbaran"])){
    $userid = $_POST["email"];
    $server = $_POST["password"];
    $serve = $_POST["nomor"]; 
    $brandtype = $_POST["brandtype"];
    $brand = $_POST["setatus"];
    $brandtyp = $_SESSION['user']['id'];

    //soal gambar
    $allowed_extension = array('png','jpg','jpeg');
    $nama = $_FILES['file']['name'];//ambil nama gambar
    $ukuran = $_FILES['file']['size']; // ambil size
    $file_tmp = $_FILES['file']['tmp_name']; //ambil lokasi

    if(in_array($allowed_extension) === true);
        if($ukuran < 15000000){
            move_uploaded_file($file_tmp, 'image/'.$nama);

            $addtotable = mysqli_query($conn,"insert into jokiml (email, nomor, password, pesanan, bukti, setatus, id_user) values('$userid','$serve','$server','$brandtype','$nama','$brand','$brandtyp')");
            if($addtotable){
                echo "berhasil gaes";
                header("location:index.php");
            } else{
                echo "Gagal";
                header("location:index.html");
            }
        } else {
            echo '
        <script>
        alert("file kebesaran");
        window.location.keluar.php;
        </script>
        ';
    }
}

if(isset($_POST["addnewbara"])){
    $userid = $_POST["email"];
    $server = $_POST["password"];
    $serve = $_POST["nomor"]; 
    $brandtype = $_POST["brandtype"];
    $brand = $_POST["setatus"];
    $brandtyp = $_SESSION['user']['id'];

    //soal gambar
    $allowed_extension = array('png','jpg','jpeg');
    $nama = $_FILES['file']['name'];//ambil nama gambar
    $ukuran = $_FILES['file']['size']; // ambil size
    $file_tmp = $_FILES['file']['tmp_name']; //ambil lokasi

    if(in_array($allowed_extension) === true);
        if($ukuran < 15000000){
            move_uploaded_file($file_tmp, 'image/'.$nama);

            $addtotable = mysqli_query($conn,"insert into jokiff (fb, nomor, password, pesanan, bukti, setatus, id_user) values('$userid','$serve','$server','$brandtype','$nama','$brand','$brandtyp')");
            if($addtotable){
                echo "berhasil gaes";
                header("location:index.php");
            } else{
                echo "Gagal";
                header("location:index.html");
            }
        } else {
            echo '
        <script>
        alert("file kebesaran");
        window.location.keluar.php;
        </script>
        ';
    }
}

if(isset($_POST["rat"])){
    $qty = $_POST["rating"];
    $cekstocksekarang = mysqli_query($conn, "select * from rate where bintang");
        $ambildatanya = mysqli_fetch_array($cekstocksekarang);

        $stocksekarang = $ambildatanya['bintang'];
        $tambahkanstocksekarangdenganquantity = $stocksekarang+$qty;
        $tambahkanstocksekarangdenganquantit = $tambahkanstocksekarangdenganquantity/2;
        
        $addtomasuk = mysqli_query($conn,"insert into rating (bintang) values('$qty')");
        $updatestockmasuk = mysqli_query($conn, "update rate set bintang='$tambahkanstocksekarangdenganquantit'");
        if($addtomasuk&&$updatestockmasuk){
        echo "berhasil gaes";
        header("location:index.php");
    } else{
        echo "Gagal";
        header("location:index.html");
    }
}
?>
