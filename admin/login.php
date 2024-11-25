<?php session_start(); include 'common/connect.php';
if(isset($_SESSION['user_id'])){
  echo "<script>window.location.href='index.php';</script>";
}
?>
 <?php 
              if(isset($_POST['submit'])){
                $email=$_POST['email'];
                $password=$_POST['password'];
                if(empty($email) || $email == NULL || $email == ""){
                  $validation = '<div class="alert alert-danger alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>email required!</strong>
                                </div>';
                }else if(empty($password) || $password == NULL || $password == ""){
                  $validation = '<div class="alert alert-danger alert-dismissible">
                                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      <strong>password required!</strong>
                                  </div>';
                }else {
                  $sql ="SELECT *  FROM `login` WHERE `email` = '$email' and  `password` = '$password'";
                $fire = mysqli_query($con , $sql);
                if(mysqli_num_rows($fire)>0){
                  while($data = mysqli_fetch_assoc($fire)){
                    $_SESSION['user_id'] = $data['id'];
                  }
                  echo "<script>alert('login successfully');window.location.href='index.php';</script>";
                  ?>
                  <meta http-equiv="refresh" content="10">
                  <?php
                }else{
                  echo "<script>alert('user not found ! ');window.location.href='login.php';</script>";
                }
                }
              }
              
              ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="post">
              <?php if(isset($validation)){ echo $validation ;}?>
                <div class="form-group">
                  <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="Enter Your Email" name="email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-sm  font-weight-medium auth-form-btn" type="submit" name="submit">SIGN IN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
