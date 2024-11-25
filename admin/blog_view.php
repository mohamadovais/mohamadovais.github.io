<?php include 'common/header.php';?>
      <!-- partial -->
     <div class="main-panel">        
          <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                       <div class="card p-3">
                         <div class="container-flued mt-3">
                            <div class="row">
                                    <div class="col-md-12">
                                                <h6>View Blogs</h6>
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Sr.</th>
                                                        <th>Blog Image</th>
                                                        <th>Username</th>
                                                        <th>Comment</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Status</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <?php
                                                    $sql ="SELECT * FROM  `blog` ";
                                                    $fire = mysqli_query($con,$sql);
                                                    if(mysqli_num_rows($fire)>0){
                                                        $i=0;
                                                        while($data = mysqli_fetch_assoc($fire)){
                                                            $i++;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $i?></td>
                                                                <td><img src="<?php echo $data['blog_image'];?>" width='100px'></td>
                                                                <td><?php echo $data['username'];?></td>
                                                                <td><?php echo $data['comment'];?></td>
                                                                <td><?php echo substr($data ['title'],0,5);?>...</td>
                                                                <td><?php echo substr($data ['description'],0,5);?>...</td>
                                                                <td>
                                                                <?php if ($data['status']==1){ ?>
                                                                    <div class="btn btn-info btn-sm">Show</div>
                                                                <?php }else{ ?>
                                                                    <div class="btn btn-danger btn-sm">Hide</div>
                                                                <?php } ?>
                                                                    
                                                                </td>
                                                                <td><?php echo $data['date'];?></td>
                                                                <td>
                                                                    <a  href="blog_update.php?id=<?php echo $data['id'];?>" class='btn btn-success btn-sm'>Edit</a>
                                                                    <a href="blog_delete.php?id=<?php echo $data['id'];?>" class='btn btn-danger  btn-sm'>Delete</a>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </table>
                                        </div>
                                    </div>
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


