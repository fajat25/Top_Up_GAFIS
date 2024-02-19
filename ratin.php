<?php
    require "function.php"; //memanggil database
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="css/st.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  />
    </head>
    <body>
        <?php
            $ambilsemuadatastock = mysqli_query($conn,"select * from rate");
            $i = 1;
            while($data=mysqli_fetch_array($ambilsemuadatastock)){
                $namabarang = $data['bintang'];

                for($i=0;$i<5;$i++){
                    if(($i+1)<=$namabarang){
                        echo '<span class="fa fa-star checked"></span>';
                    }else{
                        echo '<span class="fa fa-star "></span>';
                    }
                }
                ?>
                
                <?php
                }
                ?>
    </body>
</html>