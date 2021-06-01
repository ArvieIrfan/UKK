<?php

require_once '../koneksi.php';
$id = rand();
$id_p = $_POST['id_pengaduan'];
$tgl = $_POST['tgl'];
$tanggapan = $_POST['tanggapan'];
$id_petugas = $_POST['id_petugas'];

$query = mysqli_query($koneksi,"INSERT into tanggapan values('$id','$id_p','$tgl','$tanggapan','$id_petugas')");
$query_u = mysqli_query($koneksi,"UPDATE pengaduan set status='selesai' where id_pengaduan='$id_p'");

if ($query) {
	?>
	<script type="text/javascript">
		alert('Data sudah ditanggapi');
		window.location="verifikasi_pengaduan.php";
	</script>
	<?php
}
?>