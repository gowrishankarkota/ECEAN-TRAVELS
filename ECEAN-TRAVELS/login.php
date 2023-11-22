<!DOCTYPE html>
<html lang="en">
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ECEANS | Log in</title>
  <link rel="shortcut icon" href="./dist/img/blogo6.jpg">
    <link rel="icon" href="./dist/img/blogo6.jpg" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
   <style>
    body {
      color: #fff; /* Text color */
      background-image: url('./dist/img/408.jpg'); /* Background image path */
      background-size: cover; /* Cover the entire page */
      background-repeat: no-repeat; /* Prevent background image from repeating */
    }
    </style>
</head>

<body class="hold-transition login-page" style="background-color: black;">
  <div class="login-box">
    <div class="login-logo">
      <img class='w-25' src="./dist/img/blogo6.jpg" alt="indoarsip-logo" style='border-radius:100px'><br>
      <a href="./index.php"></a>
      <hr>
    </div>
    <!-- /.login-logo -->
    
        <p class="login-box-msg"> <br>ECEANS TRAVELS</p>

        <form action="./include/login.php" method="post">
          <div class="input-group mb-3">
            <input type="text" name='username' class="form-control" placeholder="Username" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name='password' class="form-control" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
              <?php 
              if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
                $msg = "<div class='alert alert-danger'><strong>Fail!</strong>  " . $_SESSION['error'] . "</div>";
                echo $msg;
                $_SESSION['error'] = "";
              }
              ?> 
            </div>
            <!-- /.col -->
          </div>
        </form>


        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
  </body>
</html>
