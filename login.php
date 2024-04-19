<?php 

session_start();
include("config.php");

if(isset($_POST['login'])){
	
	// ambil data dari formulir
	$username = mysqli_real_escape_string($db,$_POST['username']);;
	$password = mysqli_real_escape_string($db,$_POST['password']);;
	
	// buat query update
	$cekLogin		= mysqli_query($db,"SELECT * FROM tbl_admin WHERE username='".$username."' AND password='".md5($password)."' AND status_admin='1'");

	
	if(mysqli_num_rows($cekLogin) == 1){
		$login = mysqli_fetch_array($cekLogin);
		$_SESSION['id_admin'] 	= $login['id_admin'];
		$_SESSION['nama_admin'] 	= $login['nama_admin'];
		$_SESSION['username'] 	= $login['username'];
		echo '<script>window.location="index.php"</script>';
		
	}else{
		$_SESSION['error'] = 'Username dan password anda salah';
	}
	
	
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/AdminLTE/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-image:url('assets/AdminLTE/dist/img/bg2.jpg');                                                    
                                                      background-attachment: fixed;
                                                      background-repeat: no-repeat;
                                                      background-size:100% 100%;
                                                      height: 100vh;">>
<div class="login-box" style="margin-top: -3cm;">
  <br>
  <br>
  <div class="login-logo">
    <a href="index.php" class="text-dark">
      <h3 ><b>SISTEM PAKAR PEMILIHAN METODE DIET</b></h3>
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg text-lg"><b>Login</b></p>
    
    <!-- alert -->
    <?php
      if (isset($_SESSION['success']) && $_SESSION['success'] <> ''){
          echo '<div class="alert alert-success" role="alert">'. $_SESSION['success'].'</div>';
          $_SESSION['success'] = '';
      }elseif(isset($_SESSION['error']) && $_SESSION['error'] <> ''){
          echo '<div class="alert alert-danger" role="alert">'. $_SESSION['error'].'</div>';
          $_SESSION['error'] = '';
      } 
      ?>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12 text-center">
            <button type="submit" name="login" value="login" class="btn btn-primary btn-block"><i class="fa fa-key"></i> Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/AdminLTE/dist/js/adminlte.min.js"></script>
</body>
</html>
