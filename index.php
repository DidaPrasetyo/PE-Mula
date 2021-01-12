<?php 

include('config.php');

session_start();
if (isset($_SESSION['login'])) {
    echo "<script> location.replace('dashboard.php'); </script>";
}
if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($koneksi,$_POST['username']);
    $password = mysqli_real_escape_string($koneksi,$_POST['password']);
    
    $sql = mysqli_query($koneksi, "SELECT * from user WHERE username ='$username'");
    $cek = mysqli_num_rows($sql);

    if ($cek > 0) {
        $data = mysqli_fetch_assoc($sql);
        $dbid = $data['id'];
        $dbpassword = $data['password'];
        $dblevel = $data['level'];
        $verify = password_verify($password, $dbpassword);
        
        if ($verify == 1) {
            $sql = mysqli_query($koneksi, "SELECT * from info_user WHERE id_user ='$dbid'");
            $data = mysqli_fetch_assoc($sql);
            $_SESSION['id'] = $dbid;
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['level'] = $dblevel;
            $_SESSION['login'] = 'login';
            header('location:dashboard.php');
        } else {
            header('location:login.php?gagal=1');   
        }

    } else {
        header('location:login.php?gagal=1');
    }
    return;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <?php
                                    if (isset($_GET['gagal'])) { ?>
                                        <div class="text-center">
                                            <h1 class="h5" style="color: red">Username dan/atau password anda salah!</h1>
                                        </div>
                                    <?php } ?>
                                    <form class="user" action="" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Username..." name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" name="login" value="Login"></input>
                                        <!-- <a href="" class="btn btn-primary btn-user btn-block"> -->
                                            <!-- Login -->
                                        <!-- </a> -->
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>