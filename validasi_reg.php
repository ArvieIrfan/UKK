<?php
require_once 'koneksi.php';
 
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];
$query="INSERT INTO masyarakat (nik, nama, username, password, telp) values('$nik','$nama','$user','$pass','$telp')";
var_dump($query);
$result = mysqli_query($koneksi, $query);
if ($result) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>