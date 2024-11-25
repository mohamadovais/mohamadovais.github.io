<?php include 'common/header.php';?>
<?php
$id = $_GET['id'] ;
$sql ="SELECT * FROM `gallary` where id = '$id'";
    $fire = mysqli_query($con,$sql);
    if(mysqli_num_rows($fire)>0){
        $i=0;
        while($data = mysqli_fetch_assoc($fire)){
                    $old_image=$data['image'];
                    $heading=$data['heading'];
                    $description=$data['description'];
                    $status=$data['status'];
                    $date=$data['date'];
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
                  <h4 class="card-title">Update Gallary</h4>
                  <form class="forms-sample" method="post" enctype= multipart/form-data>
                     <div class="mb-3 mt-3 row">
                           <div class="col-md-9">
                               <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control form-control-sm" id="image" name="image">
                           </div>
                           <div class="col-md-3">
                              <img src="<?php echo $old_image?>" alt="" width='100%'>
                           </div>
                     </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Heading</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputName1" placeholder="Heading" name="heading" value='<?php echo $heading?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Discription</label>
                      <textarea type="text" class="form-control form-control-sm" id="exampleInputUsername1"  name="description"><?php echo $description?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Status</label>
                      <select class="form-control form-control-sm" id="exampleInputName1" name="status" value='<?php echo $status?>'>
                        <option selected value="0" >select service status</option>
                            <?php if($status == '1'){?>
                            <option selected value="1">Show</option>
                            <option value="0">Hide</option>
                            <?php }else if($status == '0'){?>
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
                  <?php
                  if(isset($_POST['submit'])){
                    $image = upload_image ("image", "image/");
                    if($image == "" OR $image == 0){
                      $image = $old_image;
                    }
                    // $tmp_name=$_FILES['image']['tmp_name'];
                    // $file_name=$_FILES['image']['name'];
                    // $myimage = move_uploaded_file($tmp_name, "image/$file_name");
                    // $image = "image/$file_name";
                    // if($myimage == '' || $myimage == NULL || $myimage == '0'){
                    //     $image = $old_image;
                    // }else{
                    //     unlink($old_image);
                    // }
                    $heading=$_POST['heading'];
                    $description=$_POST['description'];
                    $status=$_POST['status'];
                    $date = date("Y-m-d");
                    $sql = "UPDATE `gallary` SET `image`='$image',`heading`='$heading',`description`='$description',`status`='$status',`date`='$date' WHERE id = '$id'";
                      $fire = mysqli_query($con , $sql);
                      if($fire){
                          echo "<script>alert('data insert successfully');window.location.href='gallary_view.php';</script>";
                      }else{
                          echo"<script>alert('data not insert successfully');window.location.href='gallary.php';</script>";
                      }
                    }
                  ?>
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
