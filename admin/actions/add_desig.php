<?php
include('../include/config.php');
if(isset($_POST['submit'])){
    $desig = $_POST['dessignation'];

    $desig_insert = "INSERT INTO `designations`(`desig_name`) VALUES ('$desig')";
    $desig_res = mysqli_query($con,$desig_insert);
    if($desig_res){
        echo "<script>alert('Access Added Successfully');</script>";
        echo "<script>window.location.href='../designation';</script>";
    }else{
        echo "Error: " . mysqli_error($con);
    }
}
?>