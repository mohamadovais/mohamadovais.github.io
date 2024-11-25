<?php include 'common/header.php';?>
<?php
$id = $_GET['id'] ;
$sql ="SELECT * FROM `message` where id = '$id'";
    $fire = mysqli_query($con,$sql);
    if(mysqli_num_rows($fire)>0){
        $i=0;
        while($data = mysqli_fetch_assoc($fire)){
                    $name=$data['name'];
                    $subject=$data['subject'];
                    $email=$data['email'];
                    $msg=$data['msg'];
                    $status=$data['status'];
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
                  <h4 class="card-title">Contact Update</h4>
                  <form class="forms-sample" method="post" enctype= multipart/form-data>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control form-control-sm" readonly id="exampleInputName1" placeholder="name" name="name" value='<?php echo $name?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Subject</label>
                      <input type="text" class="form-control form-control-sm" readonly id="exampleInputName1" placeholder="subject" name="subject" value='<?php echo $subject?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control form-control-sm" readonly id="exampleInputName1" placeholder="Email" name="email" value='<?php echo $email?>'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Message</label>
                      <textarea type="text" class="form-control form-control-sm" readonly id="exampleInputUsername1"  name="msg"><?php echo $msg?></textarea>
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Status</label>
                      <select class="form-control form-control-sm" id="exampleInputName1"  name="status" value='<?php echo $status?>'>
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
                    $status=$_POST['status'];
                    $update_date = date("Y-m-d");
                    $sql = "UPDATE `message` SET `update_date`='$update_date',`status`='$status' WHERE id = '$id'";
                      $fire = mysqli_query($con , $sql);
                      if($fire){
                          echo "<script>alert('data Update successfully');window.location.href='';</script>";
                      }else{
                          echo"<script>alert('data not Update successfully');window.location.href='';</script>";
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
