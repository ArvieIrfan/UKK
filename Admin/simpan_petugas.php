<?php

require_once '../koneksi.php';

$id = rand();
$nama = $_POST['nama_petugas'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];

$query = mysqli_query($koneksi,"INSERT into petugas values('$id','$nama','$user','$pass','$telp','$level')");

if ($query) {
	?>
	<script type="text/javascript">
		alert('Data sudah ditanggapi');
		window.location="data-petugas.php";
	</script>
	<?php
}
?>