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
                                                <h6>Contact View</h6>
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Sr.</th>
                                                        <th>Name</th>
                                                        <th>Subject</th>
                                                        <th>Email</th>
                                                        <th>C_Date</th>
                                                        <th>U_Date</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <?php
                                                    $sql ="SELECT * FROM  `message` ";
                                                    $fire = mysqli_query($con,$sql);
                                                    if(mysqli_num_rows($fire)>0){
                                                        $i=0;
                                                        while($data = mysqli_fetch_assoc($fire)){
                                                            $i++;
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $i?></td>
                                                                <td><?php echo $data['name'];?></td>
                                                                <td><?php echo $data['subject'];?></td>
                                                                <td><?php echo $data['email'];?></td>
                                                                <td><?php echo $data ['create_date'];?></td>
                                                                <td><?php echo $data ['update_date'];?></td>
                                                                <td>
                                                                <?php if ($data['status']==1){ ?>
                                                                    <div class="btn btn-info btn-sm">Show</div>
                                                                <?php }else{ ?>
                                                                    <div class="btn btn-danger btn-sm">Hide</div>
                                                                <?php } ?>
                                                                    
                                                                </td>
                                                                
                                                                <td>
                                                                    <a href="contact_que_update.php?id=<?php echo $data['id'];?>" class="btn btn-success btn-sm">View</a>
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


