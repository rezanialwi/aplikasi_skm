<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login | Admin SKMH</title>

   <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/logo3.ico">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets2/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets2/css/sb-admin-2.min.css')?>" rel="stylesheet">

</head>

     <body class="bg-gradient-dark">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
              <img src="<?php echo base_url(); ?>assets/img/cover1.png" width="500px" height="500px" alt="User Image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
                  </div>
                  <?php
if(isset($_GET['alert'])){
if($_GET['alert']=="gagal"){
echo "<div class='alert alert-danger font-weight-bold text-center'>Maaf! Username & Password
Salah.</div>";
}else if($_GET['alert']=="belum_login"){
echo "<div class='alert alert-danger font-weight-bold text-center'>Anda Harus Login Terlebih
Dulu!</div>";
}else if($_GET['alert']=="logout"){
echo "<div class='alert alert-success font-weight-bold text-center'>Anda Telah Logout!</div>";
}
}
?>
                  <form class="user" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" id="username" aria-describedby="emailHelp" placeholder="Username...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
					<div>
					<input type="submit" value="Login" class="btn btn-primary btn-user btn-block">
          <a class="btn btn-primary btn-user btn-block" href="<?php echo site_url('prosesmodal') ?>">Kembali</a>
					</div>
                
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
  <script src="<?php echo base_url('assets2/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets2/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets2/js/sb-admin-2.min.js')?>"></script>

</body>

</html>
