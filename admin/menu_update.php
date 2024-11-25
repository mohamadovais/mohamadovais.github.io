<?php include 'common/header.php';?>
<?php
$id = $_GET['id'];
$sql ="SELECT * FROM `tbl_menu` where id = '$id'";
    $fire = mysqli_query($con,$sql);
    if(mysqli_num_rows($fire)>0){
        $i=0;
        while($data = mysqli_fetch_assoc($fire)){
            $menu_name=$data['menu_name'];
            $menu_link=$data['menu_link'];
            $menu_icon=$data['menu_icon'];
            $menu_status=$data['menu_status'];
            $update_date=$data['update_date'];
        }
    }

?>
<?php
                  if(isset($_POST['submit'])){
                    $menu_name=$_POST['menu_name'];
                    $menu_link=$_POST['menu_link'];
                    $menu_icon=$_POST['menu_icon'];
                    $menu_status=$_POST['menu_status'];
                    $update_date = date("Y-m-d");
                    if(empty($menu_name) || $menu_name == NULL || $menu_name == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>menu name required!</strong>
                                    </div>';
                    }else if(empty($menu_link) || $menu_link == NULL || $menu_link == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>menu link required!</strong>
                                    </div>';
                    }else if(empty($menu_icon) || $menu_icon == NULL || $menu_icon == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>menu icon required!</strong>
                                      </div>';
                    }
                    else if(empty($menu_status) || $menu_status == NULL || $menu_status == "0"){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>menu status required!</strong>
                                    </div>';
                    }
                    else{
                      $sql = "UPDATE `tbl_menu` SET `menu_name`='$menu_name',`menu_link`='$menu_link',`menu_icon`='$menu_icon',`menu_status`='$menu_status',`create_date`='',`update_date`='$update_date' WHERE id = '$id'";
                        $fire = mysqli_query($con , $sql);
                        if($fire){
                            echo "<script>alert('data insert successfully');window.location.href='menu_view.php';</script>";
                            ?>
            <meta http-equiv="refresh" content="10">
            <?php
                        }else{
                            echo"<script>alert('data not insert successfully');window.location.href='menu.php';</script>";
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
                  <h4 class="card-title">Update Menu</h4>
                  <form class="forms-sample" method="post" enctype= multipart/form-data>
                  <?php if(isset($validation)){ echo $validation;}?>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Menu Name</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputName1" placeholder="Menu Name" name="menu_name" value='<?php echo $menu_name?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Menu Link</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputName1" placeholder="Menu link" name="menu_link" value='<?php echo $menu_link?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Menu Icon</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputName1" placeholder="Menu link" name="menu_icon" value='<?php echo $menu_icon?>'>
                    </div>
                    <!-- <div class="mb-3 mt-3 row">
                       <div class="col-md-9">
                            <label for="menu_icon" class="form-label">Menu Icon</label>
                            <input type="file" class="form-control" id="menu_icon" name="menu_icon" >
                       </div>
                       <div class="col-md-3">
                         <img src="" width='100%' alt="">
                       </div>
                     </div> -->
                    <div class="form-group">
                      <label for="exampleInputEmail1">Menu Status</label>
                      <select class="form-control form-control-sm" id="exampleInputName1" name="menu_status" value='<?php echo $menu_status?>'>
                        <option selected value="0" >select menu status</option>
                        <?php if($menu_status == '1'){?>
                        <option selected value="1">Show</option>
                        <option value="0">Hide</option>
                        <?php }else if($menu_status == '0'){?>
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
