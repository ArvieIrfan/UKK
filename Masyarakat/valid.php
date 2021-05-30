<?php
require_once '../koneksi.php';
 
$tgl = $_POST['tgl'];
$nik = $_POST['nik'];
$isi = $_POST['isi_laporan'];
$status = $_POST['status'];

$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$rand = rand();
 
if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		$res = mysqli_query($koneksi, "INSERT INTO pengaduan (id_pengaduan, tgl_pengaduan, nik, isi_laporan, foto, status) VALUES('','$tgl','$nik','$isi','$xx','$status')");
		var_dump($res);
	}else{
		header("location:index.php?alert=gagak_ukuran");
	}
}
 
?>