<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aplikasi Peduli Diri - Register</title>

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
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2 text-capitalize">Registrasi Akun Peduli Diri</h1>
                    <p>Silahkan masukan NIK dan Nama Lengkap anda</p>
                  </div>
                  <form class="user" action="proses_register.php" method="post">
                    <div class="form-group">
                      <input type="text" name="nik" required class="form-control form-control-user"
                        aria-describedby="emailHelp" placeholder="Masukan NIK anda...">
                    </div>
                    <div class="form-group">
                      <input type="text" name="nama_lengkap" class="form-control form-control-user"
                        placeholder="Masukan Nama lengkap anda...">
                    </div>
                    <section>
                      <span class="mr-3">Jenis Kelamin : </span>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="laki-laki" value="laki-laki" checked>
                        <label class="form-check-label" for="laki-laki">laki-laki</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="perempuan" value="perempuan">
                        <label class="form-check-label" for="perempuan">perempuan</label>
                      </div>
                    </section>
                    <button type="submit" class="btn btn-primary btn-user btn-block mt-3">
                      <i class="fa fa-spinner"></i> Register
                    </button>
                    <hr>
                    <a href="index.php" class="btn btn-facebook btn-user btn-block">
                      <i class="fa fa-arrow-left fa-fw"></i> Sudah punya akun? silahkan Login
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