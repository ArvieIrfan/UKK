
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Login into account
          </h4>
          <form class="form-box px-3" method="POST" action="validasi_reg.php">
            <div class="form-input">
              <span><i class="fa fa-user-plus"></i></span>
              <input type="number" name="nik" placeholder="nik" required>
            </div>
            <div class="form-input">
              <span><i class="fas fa-user"></i></span>
              <input type="text" name="nama" placeholder="nama" required >
            </div>
            <div class="form-input">
              <span><i class="fa fa-users"></i></span>
              <input type="username" name="username" placeholder="username" required>
            </div>
            <div class="form-input">
              <span><i class="fa fa-key"></i></span>
              <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-input">
              <span><i class="fas fa-phone"></i></span>
              <input type="number" name="telp" placeholder="No Telp" required>
            </div>

            <div class="mb-3">
              <button type="submit" class="btn btn-block text-uppercase">
                Registrasi
              </button>
            </div>

            <hr class="my-4">

            <div class="text-center mb-2">
              Already have an account?
              <a href="index.php" class="register-link">
                login here
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>