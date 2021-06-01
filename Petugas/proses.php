<?php
require_once '../koneksi.php';

$query = mysqli_query($koneksi,"UPDATE pengaduan set status='proses' where id_pengaduan='$_GET[id]'");
if ($query) {
	header("location: dashboard.php");
}