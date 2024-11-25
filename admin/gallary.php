<?php include 'common/header.php';?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Gallary</h4>
                  <form class="forms-sample" method="post" enctype= multipart/form-data>
                     <div class="mb-3 mt-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control form-control-sm" id="image" name="image">
                     </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Heading</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputName1" placeholder="Heading" name="heading">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Discription</label>
                      <textarea type="text" class="form-control form-control-sm" id="exampleInputUsername1"  name="description"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Status</label>
                      <select class="form-control form-control-sm" id="exampleInputName1" name="status">
                        <option selected value="0">select service status</option>
                        <option value="1">Show</option>
                        <option value="0">Hide</option>
                        </select>
                    </div>
                    <div class="form-group">
                     <button type="submit" class="btn btn-primary btn-sm" name="submit">Submit</button>
                    </div>
                  </form>
                  <?php
                  if(isset($_POST['submit'])){
                    $image = upload_image("image", "image1/");
                    $heading=$_POST['heading'];
                    $description=$_POST['description'];
                    $status=$_POST['status'];
                    $date = date("Y-m-d");
                    $sql = "INSERT INTO `gallary`(`image`, `heading`, `description`, `status`, `date`) VALUES ('$image','$heading','$description','$status','$date')";
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
