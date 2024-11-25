<?php include 'common/header.php';
$id = $_GET['id'];
$sql ="DELETE FROM `blog` WHERE id = '$id' ";
    $fire = mysqli_query($con,$sql);
    if($fire){
        echo "<script>alert('data delete successfully');window.location.href='blog_view.php';</script>";
    }else{
        echo "<script>alert('data not delete successfully');window.location.href='blog.php';</script>";
    }
?>