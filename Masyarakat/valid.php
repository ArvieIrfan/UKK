<?php
require_once '../koneksi.php';

var_dump($_POST); die;
 
$tgl = $_POST['tgl'];
$nik = $_POST['nik'];
$isi = $_POST['isi_laporan'];
$status = $_POST['status'];

$file = $request->file('foto');
    	if ($file) {
    		$nama_photo = rand().$file->getClientOriginalName();
    		$file->move('photo_',$nama_photo);
    		$photo = 'photo_/'.$nama_photo;
    	}
    	else {
    		$photo = '';
    	}
		$res = mysqli_query($koneksi, "INSERT INTO pengaduan (id_pengaduan, tgl_pengaduan, nik, isi_laporan, foto, status) VALUES('','$tgl','$nik','$isi','$photo','$status')");
		var_dump($res);
 
?>