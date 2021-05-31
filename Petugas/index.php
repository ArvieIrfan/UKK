<?php 
session_start();
if (isset($_SESSION["level"])) {
  header("location:dashboard.php");
  exit;
 } 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Transparent Login Form</title>
	<link rel="stylesheet" type="text/css" href="../css/petugas.css">
	<link href="http://infiniteiotdevices.com/images/logo.png" rel="icon" sizes="16x16" type="image/gif" />
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="loginBox">
		<h2>Log In Here</h2>
		<form method="POST" action="">
			<p>Email</p>
			<input type="text" name="username" placeholder="Enter Email">
			<p>Password</p>
			<input type="password" name="password" placeholder="••••••••">
			<input type="submit" name="login" value="LOGIN">
		</form>
	</div>
</body>
</html>
<?php

  if (isset($_POST['login'])) {
    require_once '../koneksi.php';

    $user = $_POST["username"];
    $pass = $_POST["password"];

      $cek_nip = mysqli_query($koneksi, "SELECT * from petugas (username) where username='$user' and password='$pass' ");
      if (isset($cek_nip)) {
        $_SESSION["level"] = 1;
        header("location: dashboard.php");
        exit;
      }
     }