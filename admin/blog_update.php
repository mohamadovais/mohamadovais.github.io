<?php include 'common/header.php';?>
<?php
$id = $_GET['id'] ;
$sql ="SELECT * FROM `blog` where id = '$id'";
    $fire = mysqli_query($con,$sql);
    if(mysqli_num_rows($fire)>0){
        $i=0;
        while($data = mysqli_fetch_assoc($fire)){
                    $old_blog_image=$data['blog_image'];
                    $username=$data['username'];
                    $comment=$data['comment'];
                    $title=$data['title'];
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
                  <h4 class="card-title">Update Blog</h4>
                  <form class="forms-sample" method="post" enctype= multipart/form-data>
                     <div class="mb-3 mt-3 row">
                           <div class="col-md-9">
                               <label for="image" class="form-label">Blog Image</label>
                                <input type="file" class="form-control form-control-sm" id="image" name="blog_image">
                           </div>
                           <div class="col-md-3">
                              <img src="<?php echo $old_blog_image?>" alt="" width='100%'>
                           </div>
                     </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputName1" placeholder="Username" name="username" value='<?php echo $username?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Comment</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputName1" placeholder="Comment" name="comment" value='<?php echo $comment?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control form-control-sm" id="exampleInputName1" placeholder="Title" name="title" value='<?php echo $title?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Description</label>
                      <textarea type="text" class="form-control form-control-sm" id="exampleInputUsername1" placeholder="Description"  name="description"><?php echo $description?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Status</label>
                      <select class="form-control form-control-sm" id="exampleInputName1" name="status" value='<?php echo $status?>'>
                        <option selected value="0" >select service status</option>
                            <?php if($status == '1'){?>
                            <option selected value="1">Web Design</option>
                            <option value="0">Web Application</option>
                            <?php }else if($status == '0'){?>
                            <option  value="1">Web Design</option>
                            <option selected value="0">Web Application</option>
                            <?php }else {?>
                            <option  value="1">Web Design</option>
                            <option value="0">Web Application</option>
                            <?php }?>
                      </select>
                    </div>
                    <div class="form-group">
                     <button type="submit" class="btn btn-primary btn-sm" name="submit">Submit</button>
                    </div>
                  </form>
                  <?php
                  if(isset($_POST['submit'])){
                    $blog_image = upload_image ("blog_image", "image/");
                    if($blog_image == "" OR $blog_image == 0){
                      $blog_image = $old_blog_image;
                    }
                    $username=$_POST['username'];
                    $comment=$_POST['comment'];
                    $title=$_POST['title'];
                    $description=mysqli_real_escape_string($con,$_POST['description']);
                    $status=$_POST['status'];
                    $date = date("Y-m-d");
                    $sql = "UPDATE `blog` SET `blog_image`='$blog_image',`username`='$username',`comment`='$comment',`title`='$title',`description`='$description',`status`='$status',`date`='$date' WHERE id = '$id'";
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
