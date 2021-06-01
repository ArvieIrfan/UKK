<?php 
session_start();
if (!isset($_SESSION["level"])) {
  header("location:../");
  exit;
 }
 if ($_SESSION["level"] != "petugas") {
  die("What would you do ha??");
  header("location:index.php");
  exit;
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Detail Pengaduan</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <button type="button" class="nav-toggle"><i class="bx bx-menu"></i></button>
      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="../logout.php">Logout</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <main id="main">
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Detail Pengaduan</h2>
        </div>
        <div class="row justify-content-center">
        	<?php
        	require_once '../koneksi.php';
        	$sql = mysqli_query($koneksi,"SELECT * from pengaduan where id_pengaduan = '$_GET[id]'");
        	$d = mysqli_fetch_array($sql);
        	if ($sql) {
			?>
          <div class="col-lg-5 col-md-7">
              <div class="form-group">
              	<label>Tanggal Pengaduan</label>
                <input type="date" name="tgl" class="form-control" id="name" placeholder="tanggal"
                  data-rule="minlen:4" data-msg="Please enter at least 10 chars" value="<?= $d['tgl_pengaduan']; ?>" readonly>
                <div class="validate"></div>
              </div>
              <div class="form-group">
              	<label>Isi Laporan</label>
                <textarea class="form-control" name="isi_laporan" rows="5" data-rule="required" readonly><?= $d['isi_laporan']; ?></textarea>
                <div class="validate"></div>
              </div>
                <label>Foto :</label>
                <img width="170" height="200" src="../img/<?= $d['foto']; ?>">
              <div class="text-center">
                <a href="index.php" class="btn btn-success mt-5" type="submit">Kembali</a>
                <a href="proses.php?id=<?= $d['id_pengaduan']; ?>" onclick="return confirm('Yakin akan di proses?');" class="btn btn-warning mt-5 text-white" type="submit">Proses</a>
              </div>

          </div>
          <?php
	      }
	      ?>
        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>