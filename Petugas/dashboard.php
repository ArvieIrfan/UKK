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

  <title>Siimple - Bootstrap Landing Page Template</title>

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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome.min.css"/>
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
          <h2>Tanggapan</h2>
        </div>

        <div class="row justify-content-center">
          <table class="table">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>ID Pengaduan</th>
                      <th>Tanggal Pengaduan</th>
                      <th>NIK</th>
                      <th>Isi Laporan</th>
                      <th>Foto</th>
                      <th>Status</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <?php 
              require_once '../koneksi.php';
              $no = 1;
              $data = mysqli_query($koneksi,"select * from pengaduan where status='0'");
              while($d = mysqli_fetch_array($data)){
                  ?>
                  <tbody>
                      <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $d['id_pengaduan']; ?></td>
                          <td><?php echo $d['tgl_pengaduan']; ?></td>
                          <td><?php echo $d['nik']; ?></td>
                          <td><?php echo $d['isi_laporan']; ?></td>
                          <td width="100"><?php echo $d['foto']; ?></td>
                          <td><?php echo $d['status']; ?></td>
                          <td>
                            <a class="mr-2" href="info.php?id=<?php echo $d['id_pengaduan']; ?>"><i class="ti-info">Detail</i></a>
                        </td>
                      </tr>
                  </tbody>
                  <?php 
              }
              ?>
            </table>
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