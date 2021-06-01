<?php 
session_start();
if (!isset($_SESSION["level"])) {
  header("location:../");
  exit;
 }
 if ($_SESSION["level"] != "admin") {
  die("What would you do ha??");
  header("location:index.php");
  exit;
 }

 $id_petugas = $_SESSION["id_petugas"];
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
  <link href="assets/css/style.2.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
  </header>

  <main id="main">
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Detail Pengaduan</h2>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-5 col-md-7">
            <a href="verifikasi_pengaduan.php" class="btn btn-primary mb-3" type="submit">Kembali</a>
            <form method="post" action="simpan_tanggapan.php">
              <div class="form-group">
                <label>ID Pengaduan</label>
                <input type="number" name="id_pengaduan" class="form-control" id="name" placeholder=""
                  data-rule="minlen:4" data-msg="Please enter at least 10 chars" value="<?php echo $_GET['id']; ?>" readonly>
                <div class="validate"></div>
              </div>
              <div class="form-group">
              	<label>Tanggal Tanggapan</label>
                <input type="date" name="tgl" class="form-control" id="name" placeholder="tanggal"
                  data-rule="minlen:4" data-msg="Please enter at least 10 chars" value="<?= date("Y-m-d") ?>" readonly>
                <div class="validate"></div>
              </div>
              <div class="form-group">
              	<label>Tulis Tanggapan</label>
                <textarea class="form-control" name="tanggapan" rows="5" data-rule="required"></textarea>
                <div class="validate"></div>
              </div>
                <div class="form-group">
                  <label>ID Petugas</label>
                  <input type="number" name="id_petugas" class="form-control" id="name" placeholder="tanggal"
                    data-rule="minlen:4" data-msg="Please enter at least 10 chars" value="<?= $id_petugas; ?>" readonly>
                  <div class="validate"></div>
                </div>
              <div class="text-center">
                <input class="btn btn-warning mt-3 text-white" type="submit" value="Proses">
              </div>

            </form>
          </div>
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