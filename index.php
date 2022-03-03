<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aplikasi Peduli Diri - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row d-flex justify-content-center align-items-center">

      <div class="col-xl-12 col-lg-12 col-md-11">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="bg-white p-5 rounded border-bottom text-center">
            <h1 class="h2 text-capitalize text-primary">Selamat datang di aplikasi Peduli diri</h1>
            <p>Silahkan Login Terlebih Dahulu Sebelum Melanjutkan Ke Halaman Utama</p>
          </div>

          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6 d-flex justify-content-center align-items-center border-bottom">
                <img src="img/undraw_posting_photo.svg" alt="ilustration" class="img-fluid p-5 border-right">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="">
                    <p>Silahkan masukan NIK dan Nama Lengkap anda</p>
                  </div>
                  <form class="user" method="post" action="proses_login.php">
                    <div class="form-group">
                      <input type="text" name="nik" required class="form-control form-control-user"
                        id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan NIK anda...">
                    </div>
                    <div class="form-group">
                      <input type="text" name="nama_lengkap" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Masukan Nama lengkap anda...">
                    </div>
                    <section>
                      <span class="mr-3">Sebagai : </span>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="user" value="user" checked>
                        <label class="form-check-label" for="user">User</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="type" id="admin" value="admin">
                        <label class="form-check-label" for="admin">Admin</label>
                      </div>
                    </section>
                    <button type="submit" class="btn btn-primary btn-user btn-block mt-3">
                      <i class="fa fa-spinner"></i> Login
                    </button>
                    <hr>
                    <a href="register.php" class="btn btn-facebook btn-user btn-block">
                      Belum punya akun? silahkan daftar <i class="fa fa-arrow-right fa-fw"></i>
                    </a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>