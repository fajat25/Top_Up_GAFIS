<?php
require "function.php"; //memanggil database
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Top Up FF</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">
    </script>
    <style>
        .zoomable{
            width : 100px; 
        } 
        .zoomable:hover{
            transform: scale(2.5);
            transition: 0.3s ease;
        }
        </style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Ga Fis</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
    </nav>
    <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Data dan Laporan</div>
                            <a class="nav-link collapsed" href="##" data-bs-toggle="collapse" data-bs-target="#collapsePages1" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Game
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages1" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Mobile Legends
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="admintopupml.php">Data Produk</a>
                                            <a class="nav-link" href="trantopupml.php">Transaksi</a>
                                            <a class="nav-link" href="datatopupml.php">Laporan</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Free Fire
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="admintopupff.php">Data Produk</a>
                                            <a class="nav-link" href="trantopupff.php">Transaksi</a>
                                            <a class="nav-link" href="datatopupff.php">Laporan</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Joki
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Mobile Legends
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="adminjokiml.php">Data Produk</a>
                                            <a class="nav-link" href="tranjokiml.php">Transaksi</a>
                                            <a class="nav-link" href="datajokiml.php">Laporan</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Free Fire
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="adminjokiff.php">Data Produk</a>
                                            <a class="nav-link" href="tranjokiff.php">Transaksi</a>
                                            <a class="nav-link" href="datajokiff.php">Laporan</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Laporan Data Barang</h1>
                    <div class="card mb-4">
                        <div class="card-body">
                            <form method="POST" action="" class="form-inline">
                                <select name="Kat" class="form-control">
                                    <?php
                                        $query    =mysqli_query($conn, "select * from topupff GROUP BY jumlahdm ORDER BY jumlahdm");
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                    <option value="<?=$data['jumlahdm'];?>"><?php echo $data['jumlahdm'];?>
                                    </option>
                                    <?php
                                        }
                                        ?>
                                </select>
                                <input type="submit" class="btn btn-secondary ml-3" value="Pilih">
                                <a class="btn btn-secondary ml-3" href="admin/datatopupml.php">Refresh</a>
                            </form>

                            <br>
                            <form method="POST" action="" class="form-inline">
                                <input type="date" name="tang" class="form-control">
                                <input type="date" name="tangg" class="form-control ml-3">
                                <input type="submit" name="tangga" class="btn btn-secondary ml-3" value="Pilih">
                                <a class="btn btn-secondary ml-3" href="index.php">Refresh</a>
                            </form>
                        </div>
                        <div class="container">
                            <div class="data-tables datatable-dark">
                                <table class="table table-bordered" id="mauexport">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>User Id</th>
                                            <th>Jumlah DM</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($_POST['Kat'])) {
                                            $unit_kerja=$_POST['Kat'];
                                            $tamPeg=mysqli_query($conn, "select * from topupff where setatus='selsai' and jumlahdm='$unit_kerja' ORDER BY idcu DESC");
                                        } else { 
                                            if (isset($_POST['tangga'])) {
                                            $mulai=$_POST['tang'];
                                            $selsai=$_POST['tangg'];
                                            $tamPeg=mysqli_query($conn, "select * from topupff setatus='selsai' and tanggal BETWEEN '$mulai' and DATE_ADD('$selsai', INTERVAL 1 DAY) ORDER BY idcu DESC");
                                        } else {
                                            $tamPeg=mysqli_query($conn, "select * from topupff where setatus='selsai'");
                                        }
                                    }
                                            $i = 1;
                                            while ($data = mysqli_fetch_array($tamPeg)){
                                        $tanggal = $data['tanggal'];
                                        $namabarang = $data['userid'];
                                        $qty = $data['jumlahdm'];
                                        $img = $data['pengirim'];

                                    ?>

                                        <tr>
                                            <td><?php echo $tanggal++;?></td>
                                            <td><?php echo $namabarang;?></td>
                                            <td><?php echo $qty;?></td>
                                            <td><?php echo $img;?></td>
                                        </tr>
                                        <?php
                                    };
                                    ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <script>
                        $(document).ready(function() {
                            $('#mauexport').DataTable({
                                dom: 'Bfrtip',
                                buttons: [
                                    'excel', 'pdf', 'print'
                                ]
                            });
                        });
                        </script>


                        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
                        <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
                        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
                        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
                        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                            crossorigin="anonymous">
                        </script>
                        <script src="js/scripts.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
                            crossorigin="anonymous"></script>
                        <script src="assets/demo/chart-area-demo.js"></script>
                        <script src="assets/demo/chart-bar-demo.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous">
                        </script>
                        <script src="js/datatables-simple-demo.js"></script>



</body>

</html>