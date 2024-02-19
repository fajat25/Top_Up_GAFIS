	
<?php
	
    session_start();
        
    $gagal = false;
        
    if(!empty($_POST)) {
        
        $pdo = include "koneksi.php";
        
        $query = $pdo->prepare("select * from user where username=:username");
        
        $query->execute(array('username' => $_POST['username']));
        
        $user = $query->fetch();
        
        if (!$user) {
        
            $gagal = true;
        
        } elseif($user['aktif'] != 1 || $user['password'] != sha1($_POST['password'].$user['salt'])){
        
            $gagal = true;
        
        } else {
        
            $_SESSION['browser'] = md5($_SERVER['HTTP_USER_AGENT']);
        
            $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
        
            $_SESSION['user'] = array(
        
                'id' => $user['id'],
        
                'nama' => $user['nama']
        
            );
        
            header("Location: index.php");
        
            exit;
        
        }
        
    }
        
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ga Fis</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</head>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Ga Fis</a>
            <!-- Sidebar Toggle-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="admin/login.php">Login admin</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

<body class="bg-dark">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                    
                                        <h3 class="text-center font-weight-light my-4">Login</h3>
                                    </div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-floating mb-3">
                                                <input name="username" class="form-control" id="inputEmail" type="text"
                                                    placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="password" class="form-control" id="inputPassword"
                                                    type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary">Login</button>
                                        </form>
                                        <div class="card-footer text-center py-3">
                                        <div class="small"><a href="registrasi.php">buat akun</a></div>
                                    </div>
                                   
                                    </div>
                                    <?php
                                        if ($gagal) {
                                            echo '<h6 style = "font-family:courier">
                                            Username atau password salah
                                        </h6>';
                                        }?>
                                </div>
                            </div>
                        </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous">
        </script>
        <script src="js/scripts.js"></script>
</body>

</html>