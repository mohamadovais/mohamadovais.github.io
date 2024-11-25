<?php include 'common/header.php';?>
<?php
$sql ="SELECT * FROM `form_web` ";
    $fire = mysqli_query($con,$sql);
    if(mysqli_num_rows($fire)>0){
        while($data = mysqli_fetch_assoc($fire)){
            $title=$data['title'];
            $old_logo=$data['logo'];
            $old_logo_light=$data['logo_light'];
            $old_upload_favicon=$data['upload_favicon'];
            $keyword=$data['keyword'];
            $description=$data['description'];
            $phone=$data['phone'];
            $email=$data['email'];
            $address=$data['address'];
            $facebook_link=$data['facebook_link'];
            $instagram_link=$data['instagram_link'];
            $youtube_link=$data['youtube_link'];
        }
    }

?>
 <?php
                  if(isset($_POST['submit'])){
                    $title=$_POST['title'];
                    $logo = upload_image ("logo", "image/");
                    if($logo == "" OR $logo == 0){
                      $logo = $old_logo;
                    }
                    $logo_light = upload_image ("logo_light", "image/");
                    if($logo_light == "" OR $logo_light == 0){
                      $logo_light = $old_logo_light;
                    }
                    $upload_favicon = upload_image ("upload_favicon", "image/");
                    if($upload_favicon == "" OR $upload_favicon == 0 OR $upload_favicon == null){
                      $upload_favicon = $old_upload_favicon;
                    }
                    $keyword=$_POST['keyword'];
                    $description=mysqli_real_escape_string($con,$_POST['description']);
                    $phone=$_POST['phone'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $facebook_link=$_POST['facebook_link'];
                    $instagram_link=$_POST['instagram_link'];
                    $youtube_link=$_POST['youtube_link'];
                    if(empty($title) || $title == NULL || $title == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>title required!</strong>
                                      </div>';
                    }else if(empty($logo) || $logo == NULL || $logo == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>logo required!</strong>
                                      </div>';
                    }else if(empty($logo_light) || $logo_light == NULL || $logo_light == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>logo_light required!</strong>
                                      </div>';
                    }else if(empty($upload_favicon) || $upload_favicon == NULL || $upload_favicon == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>upload_favicon required!</strong>
                                      </div>';
                    }else if(empty($keyword) || $keyword == NULL || $keyword == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>keyword required!</strong>
                                      </div>';
                    }else if(empty($description) || $description == NULL || $description == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>description required!</strong>
                                      </div>';
                    }else if(empty($phone) || $phone == NULL || $phone == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>phone required!</strong>
                                      </div>';
                    }else if(empty($email) || $email == NULL || $email == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>email required!</strong>
                                      </div>';
                    }else if(empty($address) || $address == NULL || $address == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>address required!</strong>
                                      </div>';
                    }else if(empty($facebook_link) || $facebook_link == NULL || $facebook_link == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>facebook_link required!</strong>
                                      </div>';
                    }else if(empty($instagram_link) || $instagram_link == NULL || $instagram_link == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>instagram_link required!</strong>
                                      </div>';
                    }else if(empty($youtube_link) || $youtube_link == NULL || $youtube_link == ""){
                      $validation = '<div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          <strong>youtube_link required!</strong>
                                      </div>';
                    }else{
                      $sql = "UPDATE `form_web` SET `title`='$title',`logo`='$logo',`logo_light`='$logo_light',`upload_favicon`='$upload_favicon',`keyword`='$keyword',`description`='$description',`phone`='$phone',`email`='$email',`address`='$address',`facebook_link`='$facebook_link',`instagram_link`='$instagram_link',`youtube_link`='$youtube_link' WHERE id = '1' ";
                        $fire = mysqli_query($con, $sql);
                        if($fire){
                            echo "<script>alert('data successfully insert');window.location.href='web-setting-forms.php';</script>";
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
                  <h6 class="card-title">Web Setting Forms</h6>
                  <form class="forms-sample" method="post" enctype= multipart/form-data>
                  <?php if(isset($validation)){ echo $validation ;}?>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Title</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" placeholder="Asthetic Human" name="title" value='<?php echo $title ?>'>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-9">
                        <label for="exampleInputEmail1">Upload logo </label>
                        <input type="file" class="form-control form-control-sm" id="exampleInputEmail1"  name="logo">
                      </div>
                      <div class="col-md-3">
                         <img src="<?php echo $old_logo?>" alt="" width='100%'>
                      </div>
                    </div>
                    <div class="form-group row">
                     <div class="col-md-9">
                      <label for="exampleInputEmail1">Upload logo Light </label>
                        <input type="file" class="form-control form-control-sm" id="exampleInputEmail1"  name="logo_light">
                     </div>
                     <div class="col-md-3">
                     <img src="<?php echo $old_logo_light?>" alt="" width='100%'>
                     </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-9">
                        <label for="exampleInputEmail1">Upload Favicon</label>
                        <input type="file" class="form-control form-control-sm" id="exampleInputEmail1"  name="upload_favicon">
                      </div>
                      <div class="col-md-3">
                      <img src="<?php echo $old_upload_favicon?>" alt="" width='100%'>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3 mt-3">
                            <label for="comment">Keyword:</label>
                            <textarea class="form-control form-control-sm" rows="5" id="comment" name="keyword" ><?php echo $keyword?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3 mt-3">
                            <label for="comment">Description:</label>
                            <textarea class="form-control form-control-sm" rows="5" id="comment" name="description" ><?php echo $description?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="Enter Your Number" name="phone" value='<?php echo $phone?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="Enter Your Email" name="email" value='<?php echo $email?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Address</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="Enter Your Address" name="address" value='<?php echo $address?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Facebook link</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="Enter Your Facebook Link" name="facebook_link" value='<?php echo $facebook_link?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Instagram link</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="Enter Your Instagram Link" name="instagram_link" value='<?php echo $instagram_link?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Youtube link</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" placeholder="Enter Your Youtube Link" name="youtube_link" value='<?php echo $youtube_link?>'>
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
