<?php
 
$tgl = $_POST['tgl'];
$nik = $_POST['nik'];
$isi = $_POST['isi_laporan'];
$id = rand();

$foto = upload();

function upload(){

	$namafile = $_FILES['foto']['name'];
	$tmpname = $_FILES['foto']['tmp_name'];
	move_uploaded_file($tmpname, '../img/'.rand().'_'.$namafile);
	return $namafile;	
}

	$foto = rand().'_'.$foto;
	$koneksi = mysqli_connect("localhost","root","","pekat");
	$query ="INSERT into pengaduan values('$id','$tgl','$nik','$isi','$foto','proses')";
	$add = mysqli_query($koneksi,$query);
		if ($add) {
		  header("location:index.php");
		} else {
		  echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
		}
?>