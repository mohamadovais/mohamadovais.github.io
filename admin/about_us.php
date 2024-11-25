<?php include 'common/header.php';?>
<?php
$sql ="SELECT * FROM `about_us` ";
    $fire = mysqli_query($con,$sql);
    if(mysqli_num_rows($fire)>0){
        while($data = mysqli_fetch_assoc($fire)){
            $heading=$data['heading'];
            $main_heading=$data['main_heading'];
            $old_icon_one_img=$data['icon_one_img'];
            $heading_one=$data['heading_one'];
            $discription_one=$data['discription_one'];
            $old_icon_two_img=$data['icon_two_img'];
            $heading_two=$data['heading_two'];
            $discription_two=$data['discription_two'];
            $old_user_img=$data['user_img'];
            $experience_year=$data['experience_year'];
           
        }
    }

?>
 <?php
                  if(isset($_POST['submit'])){
                    $heading=$_POST['heading'];
                    $main_heading=$_POST['main_heading'];
                    $icon_one_img = upload_image ("icon_one_img", "image/");
                    if($icon_one_img == "" OR $icon_one_img == 0){
                      $icon_one_img = $old_icon_one_img;
                    }
                    $heading_one=$_POST['heading_one'];
                    $discription_one=mysqli_real_escape_string($con,$_POST['discription_one']);
                    $icon_two_img = upload_image ("icon_two_img", "image/");
                    if($icon_two_img == "" OR $icon_two_img == 0){
                      $icon_two_img = $old_icon_two_img;
                    }
                    $heading_two=$_POST['heading_two'];
                    $discription_two=mysqli_real_escape_string($con,$_POST['discription_two']);
                    $user_img = upload_image ("user_img", "image/");
                    if($user_img == "" OR $user_img == 0 OR $user_img == null){
                      $user_img = $old_user_img;
                    }
                    $experience_year=$_POST['experience_year'];
                    if(empty($heading) || $heading == NULL || $heading == ""){
                      $validation ='<div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>heading required!</strong>
                                    </div>';
                    }else if(empty($main_heading) || $main_heading == NULL || $main_heading == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>main_heading required!</strong>
                                    </div>';
                    }else if(empty($icon_one_img) || $icon_one_img == NULL || $icon_one_img == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>icon_one_img required!</strong>
                                      </div>';
                    }else if(empty($heading_one) || $heading_one == NULL || $heading_one == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>heading_one required!</strong>
                                      </div>';
                    }else if(empty($discription_one) || $discription_one == NULL || $discription_one == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>discription_one required!</strong>
                                    </div>';
                    }else if(empty($icon_two_img) || $icon_two_img == NULL || $icon_two_img == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>icon_two_img required!</strong>
                                      </div>';
                    }else if(empty($heading_two) || $heading_two == NULL || $heading_two == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>heading_two required!</strong>
                                      </div>';
                    }else if(empty($discription_two) || $discription_two == NULL || $discription_two == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>discription_two required!</strong>
                                    </div>';
                    }else if(empty($user_img) || $user_img == NULL || $user_img == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>user_img required!</strong>
                                      </div>';
                    }else if(empty($experience_year) || $experience_year == NULL || $experience_year == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>experience_year required!</strong>
                                      </div>';
                    }else {
                      $sql = "UPDATE `about_us` SET `heading`='$heading',`main_heading`='$main_heading',`icon_one_img`='$icon_one_img',`heading_one`='$heading_one',`discription_one`='$discription_one',`icon_two_img`='$icon_two_img',`heading_two`='$heading_two',`discription_two`='$discription_two',`user_img`='$user_img',`experience_year`='$experience_year' WHERE id = '1'";
                        $fire = mysqli_query($con, $sql);
                        if($fire){
                            echo "<script>alert('data successfully insert');window.location.href='about_us.php';</script>";
                            ?>
                            <meta http-equiv="refresh" content="10">
                            <?php
                        }else{
                            echo "<script>alert('i am bad');window.location.href='about_us.php';</script>";
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
                  <h4 class="card-title">About Us</h4>
                  <form class="forms-sample" method="post" enctype= multipart/form-data>
                  <?php if(isset($validation)){ echo $validation ;}?>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Heading</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" placeholder="Heading" name="heading" value='<?php echo $heading ?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Main Heading</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" placeholder="Main Heading " name="main_heading" value='<?php echo $main_heading ?>'>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-9">
                        <label for="exampleInputEmail1">Icon One Image </label>
                        <input type="file" class="form-control form-control-sm" id="exampleInputEmail1"  name="icon_one_img">
                      </div>
                      <div class="col-md-3">
                         <img src="<?php echo $old_icon_one_img?>" alt="" width='100%'>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Heading One</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" placeholder="Heading One" name="heading_one" value='<?php echo $heading_one ?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Discription One</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" placeholder="Discription One" name="discription_one" value='<?php echo $discription_one ?>'>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-9">
                        <label for="exampleInputEmail1">Icon Two Image </label>
                        <input type="file" class="form-control form-control-sm" id="exampleInputEmail1"  name="icon_two_img">
                      </div>
                      <div class="col-md-3">
                         <img src="<?php echo $old_icon_two_img?>" alt="" width='100%'>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Heading Two</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" placeholder="Heading Two" name="heading_two" value='<?php echo $heading_two ?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Discription Two</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" placeholder="Discription Two" name="discription_two" value='<?php echo $discription_two ?>'>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-9">
                           <label for="exampleInputEmail1">User Image</label>
                            <input type="file" class="form-control form-control-sm " id="exampleInputEmail1"  name="user_img">
                        </div>
                        <div class="col-md-3">
                            <img src="<?php echo $old_user_img?>" alt="" width='100%'>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Experience Year</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" placeholder="Experience Year" name="experience_year" value='<?php echo $experience_year ?>'>
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
