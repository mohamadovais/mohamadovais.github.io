<?php include 'common/header.php';?>
<?php
$id = $_GET['id'] ;
$sql ="SELECT * FROM `service` where id = '$id'";
    $fire = mysqli_query($con,$sql);
    if(mysqli_num_rows($fire)>0){
        $i=0;
        while($data = mysqli_fetch_assoc($fire)){
                    $icon_img=$data['icon_img'];
                    $heading=$data['heading'];
                    $discription=$data['discription'];
                    $link=$data['link'];
                    $service_status=$data['service_status'];
                    $update_date=$data['update_date'];
        }
    }

?>
 <?php
                  if(isset($_POST['submit'])){
                    $icon_img=$_POST['icon_img'];
                    $heading=$_POST['heading'];
                    $discription=$_POST['discription'];
                    $link=$_POST['link'];
                    $service_status=$_POST['service_status'];
                    $update_date = date("Y-m-d");
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
                    }else if(empty($service_status) || $service_status == NULL || $service_status == "2"){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>service_status required!</strong>
                                    </div>';
                    }
                    else{
                      $sql = "UPDATE `service` SET `icon_img`='$icon_img',`heading`='$heading',`discription`='$discription',`link`='$link',`service_status`='$service_status',`update_date`='$update_date' WHERE id = '$id'";
                        $fire = mysqli_query($con , $sql);
                        if($fire){
                            echo "<script>alert('data insert successfully');window.location.href='service_view.php';</script>";
                            // ?>
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
                  <h4 class="card-title">Service Update </h4>
                  <form class="forms-sample" method="post" enctype= multipart/form-data>
                  <?php if(isset($validation)){ echo $validation ;}?>
                      <div class="mb-3 mt-3 ">
                            <label for="exampleInputEmail1" class="form-label">Icon Image</label>
                            <input type="text" class="form-control form-control-sm" id="exampleInputName1" name="icon_img" value='<?php echo $icon_img?>'>
                       </div>
                       <div class="form-group">
                            <label for="exampleInputEmail1">Heading</label>
                            <input type="text" class="form-control form-control-sm" id="exampleInputName1" placeholder="Heading" name="heading"  value='<?php echo $heading?>'>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Discription</label>
                            <textarea type="text" class="form-control form-control-sm" id="exampleInputUsername1"  name="discription"><?php echo $discription?></textarea>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="menu_icon" class="form-label">Link</label>
                            <input type="text" class="form-control form-control-sm" id="menu_icon" name="link" value='<?php echo $link?>'>
                        </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Service Status</label>
                      <select class="form-control form-control-sm" id="exampleInputName1" name="service_status">
                       <option selected value="2" >select Service status</option>
                        <?php if($service_status == '1'){?>
                        <option selected value="1">Show</option>
                        <option value="0">Hide</option>
                        <?php }else if($service_status == '0'){?>
                        <option  value="1">Show</option>
                        <option selected value="0">Hide</option>
                        <?php }else {?>
                          <option  value="1">Show</option>
                        <option value="0">Hide</option>
                        <?php }?>
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
