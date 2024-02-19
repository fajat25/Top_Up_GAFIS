<?php
include_once "cek.php";   
$pdo = include "koneksi.php";     
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/slide.css" rel="stylesheet" />
        <link href="css/s.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  />
        <style>
            
        </style>
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
                        <li><a class="dropdown-item" href="admin/login.php">Login</a></li>
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
                            <div class="col-xl-9">
                                <div class="card navbar-dark bg-dark text-white">
                                    <div class="row mt-4 mb-4">
                                        <div id="home" class="slider zoom">
                                            <input type="radio" name="choose" id="" class="choose_1">
                                            <input type="radio" name="choose" id="" class="choose_2">
                                            <div class="slides">
                                                <img src="image/LIG.jpg" alt="" class="slide s1">
                                                <img src="image/FFG.jpg" alt="" class="slide">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-3">
                                <h4 style = "font-family:courier">
                                    Hasil Ratings
                                         </h4>
                                    <div class="container">
                                            <?php
                                                $query = $pdo->prepare("select * from rate");
                                                $query->execute();
                                                while($user = $query->fetch()) {
                                                    $namabarang = $user['bintang'];
                                                    for($i=0;$i<5;$i++){
                                                        if(($i+1)<=$namabarang){
                                                            echo '<span class="fa fa-star checked"></span>';
                                                        }else{
                                                            echo '<span class="fa fa-star che"></span>';
                                                        }
                                                    }
                                                ?>
                                                <?php }?>
                                                
                                            </div>
                                            <div class="row mt-4 mb-4">
                                            <a class="btn btn-info" href="rating.php">Rating</a>
                                        </div>
                                            
                                        <div class="row mt-4 mb-4">
                                            <h6 style = "font-family:courier">
                                            Terima kasih sudah mendukung kami dengan memberikan rating anda.
                                        </h6>
                                        </div>
                            </div>
                        </div>
                    
                    </div>
                    <div class="container-fluid px-4 mt-4">
                        <h4 style = "font-family:courier">
                        Paling Populer untuk Top Up
                        </h4>
                        <div class="card navbar-dark bg-dark text-white mb-6 px-2">
                            <div class="row"> 
                                <div class="col-xl-3 col-md-5 mt-2">
                                        <a class="card bg-dark" href="topupml.php">
                                            <img  src="image/ml.png">
                                        </a>
                                        <h4 style = "font-family:courier">
                                            Mobile Legends
                                            </h4>
                                </div>
                                <div class="col-xl-3 col-md-5 mt-2">
                                        <a class="card bg-dark" href="topupff.php">
                                            <img src="image/ff.png">
                                        </a>
                                        <h4 style = "font-family:courier">
                                            Free of Fire
                                            </h4>
                                </div>
                                
                        </div>
                    </div>
                    <div class="container-fluid px-4 mt-4">
                        <h4 style = "font-family:courier">
                        Paling Populer untuk Joki
                        </h4>
                        <div class="card navbar-dark bg-dark text-white mb- px-2">
                            <div class="row"> 
                                <div class="col-xl-3 col-md-5 mt-2">
                                        <a class="card bg-dark" href="jml.php">
                                            <img  src="image/jasa.jpg">
                                        </a>
                                        <h4 style = "font-family:courier">
                                            Mobile Legends
                                            </h4>
                                </div>
                                <div class="col-xl-3 col-md-5 mt-2">
                                        <a class="card bg-dark" href="jff.php">
                                            <img src="image/joki.jpg">
                                        </a>
                                        <h4 style = "font-family:courier">
                                            Free of Fire
                                            </h4>
                                </div>
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
</html>
