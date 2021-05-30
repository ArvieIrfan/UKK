<?php
 
$tgl = $_POST['tgl'];
$nik = $_POST['nik'];
$isi = $_POST['isi_laporan'];

$foto = upload();

function upload(){

	$namafile = $_FILES['foto']['name'];
	$tmpname = $_FILES['foto']['tmp_name'];

	move_uploaded_file($tmpname, 'img/'.rand().$namafile);
	return $namafile;	
}
	$koneksi = mysqli_connect("localhost","root","","lalaala");
	$query ="INSERT into foto values('','$tgl','$nik','$isi','$foto','proses')";
	$add = mysqli_query($koneksi,$query);
	var_dump($add);
?>