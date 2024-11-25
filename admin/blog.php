<?php include 'common/header.php';?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Blog</h4>
                  <form class="forms-sample" method="post" enctype= multipart/form-data>
                     <div class="mb-3 mt-3">
                            <label for="blog_image" class="form-label">Blog Image</label>
                            <input type="file" class="form-control form-control-sm" id="blog_image" name="blog_image">
                     </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputName1" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Comment</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputName1" placeholder="Comment" name="comment">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputName1" placeholder="Title" name="title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Description</label>
                      <textarea type="text" class="form-control form-control-sm" id="exampleInputUsername1"  name="description"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Status</label>
                      <select class="form-control form-control-sm" id="exampleInputName1" name="status">
                        <option selected value="0">select blog status</option>
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
                    $blog_image = upload_image ("blog_image", "image/");
                    $username=$_POST['username'];
                    $comment=$_POST['comment'];
                    $title=$_POST['title'];
                    $description=mysqli_real_escape_string($con,$_POST['description']);
                    $status=$_POST['status'];
                    $date = date("Y-m-d");
                    $sql = "INSERT INTO `blog`(`blog_image`, `username`, `comment`, `title`, `description`, `status`, `date`) VALUES ('$blog_image','$username','$comment','$title','$description','$status','$date')";
                      $fire = mysqli_query($con , $sql);
                      if($fire){
                          echo "<script>alert('data insert successfully');window.location.href='blog_view.php';</script>";
                      }else{
                          echo"<script>alert('data not insert successfully');window.location.href='blog.php';</script>";
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
