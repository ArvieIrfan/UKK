<?php 
session_start();
if (isset($_SESSION["nik"])) {
  header("location:masyarakat/");
  exit;
 } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Login into account
          </h4>
          <form class="form-box px-3" method="POST" action="">
            <div class="form-input">
              <span><i class="fa fa-envelope-o"></i></span>
              <input type="text" name="username" placeholder="Email Address" tabindex="10" required>
            </div>
            <div class="form-input">
              <span><i class="fa fa-key"></i></span>
              <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="mb-3">
              <button type="submit" name="login" class="btn btn-block text-uppercase">
                Login
              </button>
            </div>

            <hr class="my-4">

            <div class="text-center mb-2">
              Don't have an account?
              <a href="register.php" class="register-link">
                Register here
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php

  if (isset($_POST['login'])) {
    require_once 'koneksi.php';

    $user = $_POST["username"];
    $pass = $_POST["password"];

      $cek_nip = mysqli_query($koneksi, "SELECT * from masyarakat (nik, nama, username, password, telp) where username='$user' and password='$pass' ");
      if (isset($cek_nip)) {
        $_SESSION["nik"] = 1;
        header("location: masyarakat/index.php");
        exit;
      }

    // $cek_user = mysqli_query($conn, "SELECT * from pegawai where nip = '$nip' ");
    // $get_data = mysqli_fetch_array($cek_user);

    // if (empty($get_data)) {
    //   echo "<script>
    //       alert('nip anda belum terdaftar!');
    //      </script>";

    // }
    // else {
    //   if ($pass != $get_data["password"]) {
    //     echo"<script>
    //         alert('password anda salah!');
    //        </script>";
    //   }
    //   else {
    //     $_SESSION["nip"] = $get_data["nip"];
    //     $_SESSION["nama"] = $get_data["nama"];
    //     echo "<script>
    //         alert('selamat datang!');
    //         document.location='../'
    //         </script>";
    //         exit;
    //   }


    // }
  }