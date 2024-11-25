<?php include 'common/header.php';?>
<?php
$sql ="SELECT * FROM `slider` ";
    $fire = mysqli_query($con,$sql);
    if(mysqli_num_rows($fire)>0){
        while($data = mysqli_fetch_assoc($fire)){
            $main_heading=$data['main_heading'];
            $discription=$data['discription'];
            $old_banner_img=$data['banner_img'];
            $old_cv_upload=$data['cv_upload'];
        }
    }
?>
<?php
                  if(isset($_POST['submit'])){
                    $main_heading=mysqli_real_escape_string($con,$_POST['main_heading']);
                    $discription=mysqli_real_escape_string($con,$_POST['discription']);
                    $banner_img = upload_image ("banner_img", "image/");
                    if($banner_img == "" OR $banner_img == 0){
                      $banner_img = $old_banner_img;
                    }
                    $cv_upload = upload_image ("cv_upload", "image/");
                    if($cv_upload == "" OR $cv_upload == 0 OR $cv_upload == null){
                      $cv_upload = $old_cv_upload;
                    }
                    if(empty($main_heading) || $main_heading == NULL || $main_heading == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>main heading required!</strong>
                                    </div>';
                    }else if(empty($discription) || $discription == NULL || $discription == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>discription required!</strong>
                                    </div>';
                    }else if(empty($banner_img) || $banner_img == NULL || $banner_img == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>banner img required!</strong>
                                    </div>';
                    }else if(empty($cv_upload) || $cv_upload == NULL || $cv_upload == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>cv upload required!</strong>
                                    </div>';
                    }else{
                      $sql = "UPDATE `slider` SET `main_heading`='$main_heading',`discription`='$discription',`banner_img`='$banner_img',`cv_upload`='$cv_upload' WHERE id = '1'";
                      $fire = mysqli_query($con, $sql);
                      if($fire){
                          echo "<script>alert('data successfully insert');window.location.href='slider.php';</script>";
                          ?>
                          <meta http-equiv="refresh" content="10">
                          <?php
                      }else{
                          echo "<script>alert('i am bad');window.location.href='index.php';</script>";
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
                  <h5 class="card-title">Slider</h5>
                  <form class="forms-sample" method="post" enctype= multipart/form-data>
                  <?php if(isset($validation)){ echo $validation ;}?>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Main Heading</label>
                      <textarea type="text" class="form-control form-control-sm" id="exampleInputUsername1"  name="main_heading"><?php echo $main_heading?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Discription</label>
                      <textarea type="text" class="form-control form-control-sm" id="exampleInputUsername1"  name="discription"><?php echo $discription?></textarea>
                    </div>
                    <div class="form-group row">
                     <div class="col-md-9">
                      <label for="exampleInputEmail1">Banner Image</label>
                        <input type="file" class="form-control form-control-sm" id="exampleInputEmail1"  name="banner_img">
                     </div>
                     <div class="col-md-3">
                     <img src="<?php echo $old_banner_img?>" alt="" width='100%'>
                     </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-9">
                        <label for="exampleInputEmail1">Cv Upload</label>
                        <input type="file" class="form-control form-control-sm" id="exampleInputEmail1"  name="cv_upload">
                      </div>
                      <div class="col-md-3">
                         <img src="<?php echo $old_cv_upload?>" alt="" width='100%'>
                      </div>
                    </div>
                    
                    <div class="form-group">
                     <button type="submit" class="btn btn-primary btn-sm" name="submit">Submit</button>
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
