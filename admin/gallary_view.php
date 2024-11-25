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
                                                <h6>View Gallary</h6>
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Sr.</th>
                                                        <th>Image</th>
                                                        <th>Heading</th>
                                                        <th>Discription</th>
                                                        <th>Status</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <?php
                                                    $sql ="SELECT * FROM  `gallary` ";
                                                    $fire = mysqli_query($con,$sql);
                                                    if(mysqli_num_rows($fire)>0){
                                                        $i=0;
                                                        while($data = mysqli_fetch_assoc($fire)){
                                                            $i++;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $i?></td>
                                                                <td><img src="<?php echo $data['image'];?>" width='100px'></td>
                                                                <td><?php echo $data['heading'];?></td>
                                                                <td><?php echo $data['description'];?></td>
                                                                <td>
                                                                <?php if ($data['status']==1){ ?>
                                                                    <div class="btn btn-info btn-sm">Show</div>
                                                                <?php }else{ ?>
                                                                    <div class="btn btn-danger btn-sm">Hide</div>
                                                                <?php } ?>
                                                                    
                                                                </td>
                                                                <td><?php echo $data['date'];?></td>
                                                                <td>
                                                                    <a  href="gallary_update.php?id=<?php echo $data['id'];?>" class='btn btn-success btn-sm'>Edit</a>
                                                                    <a href="gallary_delete.php?id=<?php echo $data['id'];?>" class='btn btn-danger  btn-sm'>Delete</a>
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


