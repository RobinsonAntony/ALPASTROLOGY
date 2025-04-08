<?php
include('../include/config.php');
if(isset($_POST['update'])){
    $edit_id=$_POST['design_id'];
    $edit_desig=$_POST['dessignation'];

    $desig_insert = "UPDATE `designations` SET `desig_name`='$edit_desig' WHERE desig_id = $edit_id";
    $desig_res = mysqli_query($con,$desig_insert);
    if($desig_res){
        echo "<script>alert('Designation Update Successfully');</script>";
        echo "<script>window.location.href='../designation';</script>";
    }else{
        echo "Error: " . mysqli_error($con);
    }
}


?>