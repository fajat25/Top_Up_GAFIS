<?php
    require "function.php"; //memanggil database
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Top Up FF</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Ga Fis</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="trantopupff.php">Transaksi</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
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
                            <div class="sb-sidenav-menu-heading">Top Up</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div>
                                Game
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="topupml.php">Mobile Legends</a>
                                    <a class="nav-link" href="topupff.php">Free Fire</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Jasa Joki</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div>
                                Joki
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="jml.php">Joki Mobile Legends</a>
                                    <a class="nav-link" href="jff.php">Joki Free Fire</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mt-4">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card navbar-dark bg-dark text-white mb-4 px-2">
                                    <img class="col-xl-12 mt-4" alt="cover" src="https://a.m.dana.id/resource/imgs/item-digital/games/free_fire.png">
                                    <div class="text-white mb-4">
                                        <div class="card-body">
                                            <h4 style = "font-family:courier">
                                            Free of Fire Game Products
                                            </h4>
                                            <h6 style = "font-family:courier">Free Fire adalah game Battle Royale dan TPS (Third Person Shooter) yang mempertemukan 50 sampai 52 pemain di satu map yang luas. Kalahkan semua musuhmu dan jadi pemenangnya!
                                            </h6>
                                            <h6 style = "font-family:courier">
                                            Download Free Fire
                                            </h6>
                                            <div class="row"> 
                                                <div class="col-xl-4 col-md-3">
                                                    <a class="card bg-dark" href="https://play.google.com/store/apps/details?id=com.mobile.legends&country=my">
                                                        <img  src="image/play.png">
                                                    </a>
                                                </div>
                                                <div class="col-xl-4 col-md-3">
                                                    <a class="card bg-dark" href="https://apps.apple.com/app/id1160056295?country=my">
                                                        <img src="image/app.png">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                            <form method="post" enctype="multipart/form-data">
                                <div class="card navbar-dark bg-dark text-white mb-4 px-2">
                                        <div class="row mt-4 mb-4">
                                        <h4 style = "font-family:courier">
                                                1. Masukan User Id
                                                </h4>
                                            <div class="col">
                                            <input type="text" class="form-control"  name="userid" placeholder="Masukan User ID" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card navbar-dark bg-dark text-white mb-4 px-2">
                                            <div class="row mt-4">
                                    <h4 style = "font-family:courier">
                                                2. Pilih Diamon
                                                </h4>
                                                <div class="col-xl-4 col-md-6 col-sm-6 col-6">
                                                    <div class="card bg-light text-muted mb-4">
                                                    <?php
                                                    $ambilsatudata = mysqli_query($conn,"select * from adminfftopup where id=1 ");
                                                    while($data=mysqli_fetch_array($ambilsatudata)){
                                                        ?>
                                                        <input type="radio" name="brandtype" id="1" class="hidebx" value="<?php echo $data['jumlahdm']; ?>">
                                                        <label for="1" class="lb1-radio">
                                                            <div class="display-box">
                                                                <div class="size"><?php echo $data['jumlahdm']; ?></div>
                                                                <div class="price"><?php echo $data['harga']; ?></div>
                                                            </div>
                                                        </label>
                                                        
                                                        <?php
                                                        };
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6 col-sm-6 col-6">
                                                    <div class="card bg-light text-muted mb-4">
                                                    <?php
                                                    $ambilsatudata = mysqli_query($conn,"select * from adminfftopup where id=2 ");
                                                    while($data=mysqli_fetch_array($ambilsatudata)){
                                                        ?>
                                                        <input type="radio" name="brandtype" id="2" class="hidebx" value="<?php echo $data['jumlahdm']; ?>">
                                                        <label for="2" class="lb1-radio">
                                                            <div class="display-box">
                                                                <div class="size"><?php echo $data['jumlahdm']; ?></div>
                                                                <div class="price"><?php echo $data['harga']; ?></div>
                                                            </div>
                                                        </label>
                                                        
                                                        <?php
                                                        };
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6 col-sm-6 col-6">
                                                    <div class="card bg-light text-muted mb-4">
                                                    <?php
                                                    $ambilsatudata = mysqli_query($conn,"select * from adminfftopup where id=3 ");
                                                    while($data=mysqli_fetch_array($ambilsatudata)){
                                                        ?>
                                                        <input type="radio" name="brandtype" id="3" class="hidebx" value="<?php echo $data['jumlahdm']; ?>">
                                                        <label for="3" class="lb1-radio">
                                                            <div class="display-box">
                                                                <div class="size"><?php echo $data['jumlahdm']; ?></div>
                                                                <div class="price"><?php echo $data['harga']; ?></div>
                                                            </div>
                                                        </label>
                                                        
                                                        <?php
                                                        };
                                                        ?>
                                                    </div>  
                                                </div>
                                                <div class="col-xl-4 col-md-6 col-sm-6 col-6">
                                                    <div class="card bg-light text-muted mb-4">
                                                    <?php
                                                    $ambilsatudata = mysqli_query($conn,"select * from adminfftopup where id=4 ");
                                                    while($data=mysqli_fetch_array($ambilsatudata)){
                                                        ?>
                                                        <input type="radio" name="brandtype" id="4" class="hidebx" value="<?php echo $data['jumlahdm']; ?>">
                                                        <label for="4" class="lb1-radio">
                                                            <div class="display-box">
                                                                <div class="size"><?php echo $data['jumlahdm']; ?></div>
                                                                <div class="price"><?php echo $data['harga']; ?></div>
                                                            </div>
                                                        </label>
                                                        
                                                        <?php
                                                        };
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6 col-sm-6 col-6">
                                                    <div class="card bg-light text-muted mb-4">
                                                    <?php
                                                    $ambilsatudata = mysqli_query($conn,"select * from adminfftopup where id=5 ");
                                                    while($data=mysqli_fetch_array($ambilsatudata)){
                                                        ?>
                                                        <input type="radio" name="brandtype" id="5" class="hidebx" value="<?php echo $data['jumlahdm']; ?>">
                                                        <label for="5" class="lb1-radio">
                                                            <div class="display-box">
                                                                <div class="size"><?php echo $data['jumlahdm']; ?></div>
                                                                <div class="price"><?php echo $data['harga']; ?></div>
                                                            </div>
                                                        </label>
                                                        
                                                        <?php
                                                        };
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6 col-sm-6 col-6">
                                                    <div class="card bg-light text-muted mb-4">
                                                    <?php
                                                    $ambilsatudata = mysqli_query($conn,"select * from adminfftopup where id=6 ");
                                                    while($data=mysqli_fetch_array($ambilsatudata)){
                                                        ?>
                                                        <input type="radio" name="brandtype" id="6" class="hidebx" value="<?php echo $data['jumlahdm']; ?>">
                                                        <label for="6" class="lb1-radio">
                                                            <div class="display-box">
                                                                <div class="size"><?php echo $data['jumlahdm']; ?></div>
                                                                <div class="price"><?php echo $data['harga']; ?></div>
                                                            </div>
                                                        </label>
                                            
                                                        <?php
                                                        };
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6 col-sm-6 col-6">
                                                    <div class="card bg-light text-muted mb-4">
                                                    <?php
                                                    $ambilsatudata = mysqli_query($conn,"select * from adminfftopup where id=7 ");
                                                    while($data=mysqli_fetch_array($ambilsatudata)){
                                                        ?>
                                                        <input type="radio" name="brandtype" id="7" class="hidebx" value="<?php echo $data['jumlahdm']; ?>">
                                                        <label for="7" class="lb1-radio">
                                                            <div class="display-box">
                                                                <div class="size"><?php echo $data['jumlahdm']; ?></div>
                                                                <div class="price"><?php echo $data['harga']; ?></div>
                                                            </div>
                                                        </label>
                                                        <?php
                                                        };
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="card navbar-dark bg-dark text-white mb-4 px-2">
                                        <div class="row mt-4 mb-4">
                                        <h4 style = "font-family:courier">
                                                3. Pilih Pembayaran
                                                </h4>
                                                <h6 style = "font-family:courier">
                                                Pembayaran bisa melalui apa saja
                                                </h6>
                                        <div class="col-xl-3 col-md-2">
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                                                    QRIS
                                                </button>
                                                
                                            </div>
                                            <div class="col-xl-8 col-md-8">
                                            <input type="file" name="file" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6 col-sm-6 col-6">
                                            <div class="card bg-light text-muted mb-4">
                                            <input type="hidden" name="setatus" value="Proses">
                                                <button type="submit" class="btn btn-danger" name="addnewba">
                                                    Bayar
                                                </button>
                                            </div>
                                        </div>                                                                                                       
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
    <div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Scan Code</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                        <a class="card bg-dark" href="https://apps.apple.com/app/id1160056295?country=my">
                            <img src="image/qirscode.jpg">
                        </a>
        </div>
    </div>
</div>
</html>
