<?php
 
$tgl = $_POST['tgl'];
$nik = $_POST['nik'];
$isi = $_POST['isi_laporan'];
$id = rand();

$foto = upload();

function upload(){

	$namafile = $_FILES['foto']['name'];
	$tmpname = $_FILES['foto']['tmp_name'];
	$foto = rand().'_'.$namafile;
	move_uploaded_file($tmpname, '../img/'.$namafile);
	return $namafile;	
}

	$koneksi = mysqli_connect("localhost","root","","pekat");
	$query ="INSERT into pengaduan values('$id','$tgl','$nik','$isi','$foto','0')";
	$add = mysqli_query($koneksi,$query);
		if ($add) {
			echo "<script>
				alert('Keluhan anda sedang disampaikan dilahkan di tunggu :)');
				  </script>";
		  header("location:index.php");
		} else {
		  echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
		}
?>