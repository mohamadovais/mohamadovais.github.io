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
                                                <h6>View Menu</h6>
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Sr.</th>
                                                        <th>Menu Name</th>
                                                        <th>Menu Link</th>
                                                        <th>Menu Icon</th>
                                                        <th>Menu Status</th>
                                                        <th>Create Date</th>
                                                        <th>Update Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <?php
                                                    $sql ="SELECT * FROM  `tbl_menu` ";
                                                    $fire = mysqli_query($con,$sql);
                                                    if(mysqli_num_rows($fire)>0){
                                                        $i=0;
                                                        while($data = mysqli_fetch_assoc($fire)){
                                                            $i++;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $i?></td>
                                                                <td><?php echo $data ['menu_name'];?></td>
                                                                <td><?php echo $data ['menu_link'];?></td>
                                                                <td><?php echo $data ['menu_icon'];?></td>
                                                                <!-- <td><img src="<?php echo $data ['menu_icon'];?>" width='100px'></td> -->
                                                                <!-- <td><?php echo $data ['menu_status'];?></td> -->
                                                                <td>
                                                                <?php if ($data['menu_status']==1){ ?>
                                                                    <div class="btn btn-info btn-sm">Show</div>
                                                                <?php }else{ ?>
                                                                    <div class="btn btn-danger btn-sm">Hide</div>
                                                                <?php } ?>
                                                                    
                                                                </td>
                                                                <td><?php echo $data ['create_date'];?></td>
                                                                <td><?php echo $data ['update_date'];?></td>
                                                                <td>
                                                                    <a  href="menu_update.php?id=<?php echo $data['id'];?>" class='btn btn-success btn-sm'>Edit</a>
                                                                    <a href="menu_delete.php?id=<?php echo $data['id'];?>" class='btn btn-danger btn-sm'>Delete</a>
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


