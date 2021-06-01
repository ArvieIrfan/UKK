<?php
session_start();
if (!isset($_SESSION["level"])) {
  header("location: ../");
}
 $nik = $_SESSION["nik"];
 $tgl = date("Y-m-d");
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
  <link href="assets/css/style.2.css" rel="stylesheet">
</head>

<body>

  <main id="main">
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title mt-1">
          <h2>Edit Petugas</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-5 col-md-7">
            <?php
            require_once '../koneksi.php';
            $query = mysqli_query($koneksi,"SELECT * from petugas where id_petugas='$_GET[id]'");
            if ($d = mysqli_fetch_array($query)) {
            ?>
            <form action="update_petugas.php" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
              <div class="form-group">
                <input type="number" class="form-control" name="id_petugas" id="subject" placeholder="Id Petugas" value="<?= $d['id_petugas']; ?>" readonly>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="nama_petugas" id="subject" placeholder="Nama Petugas" value="<?= $d['nama_petugas']; ?>">
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="username" id="subject" placeholder="Username" value="<?= $d['username']; ?>" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" id="subject" placeholder="Password" value="<?= $d['password']; ?>" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="telp" id="subject" placeholder="telp" value="<?= $d['telp']; ?>" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <select class="form-control" name="level">Level
                  <option value="<?= $d['level']; ?>"><?= $d['level']; ?></option>
                  <option value="admin">Admin</option>
                  <option value="petugas">Petugas</option>
                </select>
                <div class="validate"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
            <?php
          }
          ?>
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