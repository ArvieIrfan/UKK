<?php

require_once '../koneksi.php';

$id = $_POST['id_petugas'];
$nama = $_POST['nama_petugas'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];

$query = mysqli_query($koneksi,"UPDATE petugas set nama_petugas='$nama', username='$user', password='$pass', telp='$telp', level='$level' where id_petugas='$id'");

if ($query) {
	?>
	<script type="text/javascript">
		alert('Data sudah di ganti');
		window.location="data-petugas.php";
	</script>
	<?php
}
?>