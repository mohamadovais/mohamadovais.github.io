<?php include 'common/header.php';?>
<?php
                  if(isset($_POST['submit'])){
                    $icon_img=$_POST['icon_img'];
                    $heading=$_POST['heading'];
                    $discription=mysqli_real_escape_string($con,$_POST['discription']);
                    $link=$_POST['link'];
                    $service_status=$_POST['service_status'];
                    $create_date = date("Y-m-d");
                    if(empty($icon_img) || $icon_img == NULL || $icon_img == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>icon img required!</strong>
                                    </div>';
                    }else if(empty($heading) || $heading == NULL || $heading == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>heading required!</strong>
                                    </div>';
                    }else if(empty($discription) || $discription == NULL || $discription == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>discription required!</strong>
                                    </div>';
                    }else if(empty($link) || $link == NULL || $link == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>link required!</strong>
                                    </div>';
                    }else if(empty($service_status) || $service_status == NULL || $service_status == "0"){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>service_status required!</strong>
                                    </div>';
                    }else{
                      $sql = "INSERT INTO `service`(`icon_img`, `heading`, `discription`, `link`, `service_status`, `create_date`) VALUES ('$icon_img','$heading','$discription','$link','$service_status','$create_date')";
                      $fire = mysqli_query($con , $sql);
                      if($fire){
                          echo "<script>alert('data insert successfully');window.location.href='service_view.php';</script>";
                          ?>
            <meta http-equiv="refresh" content="10">
            <?php
                      }else{
                          echo"<script>alert('data not insert successfully');window.location.href='service.php';</script>";
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
                  <h4 class="card-title">Add Service</h4>
                  <form class="forms-sample" method="post" enctype= multipart/form-data>
                  <?php if(isset($validation)){ echo $validation ;}?>
                     <div class="mb-3 mt-3">
                            <label for="icon_img" class="form-label">Icon Image</label>
                            <input type="text" class="form-control form-control-sm" id="icon_img" name="icon_img">
                     </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Heading</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputName1" placeholder="Heading" name="heading">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Discription</label>
                      <textarea type="text" class="form-control form-control-sm" id="exampleInputUsername1"  name="discription"></textarea>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="menu_icon" class="form-label">Link</label>
                        <input type="text" class="form-control form-control-sm" id="menu_icon" name="link">
                     </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Status</label>
                      <select class="form-control form-control-sm" id="exampleInputName1" name="service_status">
                        <option selected value="0">select service status</option>
                        <option value="1">Show</option>
                        <option value="0">Hide</option>
                        </select>
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
