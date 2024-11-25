<?php include 'common/header.php';?>
<?php
if(isset($_POST['submit'])){
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    if(empty($currentPassword) || $currentPassword == NULL || $currentPassword == ""){
      $validation = '<div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>currentPassword required!</strong>
                    </div>';
    }else if(empty($newPassword) || $newPassword == NULL || $newPassword == ""){
      $validation = '<div class="alert alert-danger alert-dismissible">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>newPassword required!</strong>
                      </div>';
    }else if(empty($confirmPassword) || $confirmPassword == NULL || $confirmPassword == ""){
      $validation = '<div class="alert alert-danger alert-dismissible">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>confirmPassword required!</strong>
                      </div>';
    }else{
      $sql = "SELECT * from login WHERE id='1'";
        $result = mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        if($currentPassword == $row["password"]) {
            if($newPassword == $confirmPassword){
                mysqli_query($con,"UPDATE login set password='$confirmPassword' WHERE id='1'");
                $success = "Password Changed Sucessfully";
            }else{
                $error = "New & confirm password not match";
            }
        } else{
        $error = "Current Password is not correct";
        }
    } 
}
?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Change Password</h4>
                  <?php if(isset($success)){ echo $success ;} ?>
                  <?php if(isset($error)){ echo $error ;} ?>
                  <form class="forms-sample" method="post" enctype= multipart/form-data>
                  <?php if(isset($validation)){ echo $validation ;}?>
                  <div class="form-group">
                      <label for="exampleInputUsername1">Current Password</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="current password" name="currentPassword">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">New Password</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="new password" name="newPassword">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Confirm Password</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="confirm password" name="confirmPassword">
                    </div>
                    <div class="mt-2">
                      <button class="btn btn-block btn-primary  font-weight-medium auth-form-btn" type="submit" name="submit">Change Password</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.php -->
        <?php include 'common/footer.php';?>
