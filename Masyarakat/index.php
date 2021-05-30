<?php 
session_start();
if (!isset($_SESSION["nik"])) {
  header("location:../");
  exit;
 } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>

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

<body style="background-image: url(../img/bb.jpg); background-size: cover;">

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

  <section id="hero">
    <div class="hero-container">
      <h1>Selamat Datang!</h1>
      <h2>Silahkan kan tulis keluh kesah yang sedang anda rasakan di negeri ini :)</h2>
    </div>
  </section>

  <main id="main">
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Pengaduan</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-5 col-md-7">
            <form action="valid.php" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
              <div class="form-group">
                <input type="date" name="tgl" class="form-control" id="name" placeholder="tanggal"
                  data-rule="minlen:4" data-msg="Please enter at least 10 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="nik" id="subject" placeholder="nik"
                  data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="isi_laporan" rows="5" data-rule="required"
                  data-msg="Please write something for us" placeholder="Beri tahu kami keluhan anda!"></textarea>
                <div class="validate"></div>
              </div>
              <div class="form-group bg-white" style="border-radius: 5px;">
                <label>Foto :</label>
                <input type="file" name="foto" required><br>
                <small style>Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</small>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
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