<?php

require_once '../koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE from pengaduan where id_pengaduan='12893012'");

if ($query) {
	?>
	<script type="text/javascript">
		alert('Data sudah hapus');
		window.location="data-petugas.php";
	</script>
	<?php
}
?>