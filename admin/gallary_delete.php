<?php include 'common/header.php';
$id = $_GET['id'];
$sql ="DELETE FROM `gallary` WHERE id = '$id' ";
    $fire = mysqli_query($con,$sql);
    if($fire){
        echo "<script>alert('data delete successfully');window.location.href='gallary_view.php';</script>";
    }else{
        echo "<script>alert('data not delete successfully');window.location.href='gallary.php';</script>";
    }
?>