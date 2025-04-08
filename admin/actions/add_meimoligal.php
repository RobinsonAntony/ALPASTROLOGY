<?php
include('../include/config.php');
if(isset($_POST['submit'])){
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $quote = mysqli_real_escape_string($con, $_POST['quote']);
    $date = $_POST['date'];


    $insert = "INSERT INTO `meimozigal`( `mei_date`, `mei_quote_title`, `mei_quote`) VALUES ('$date','$title','$quote')";
    $res_insert = mysqli_query($con,$insert);
    if($res_insert){
        echo "<script>alert('Mei Mozigal Added Successfully');</script>";
        echo "<script>window.location.href='../mei_moli';</script>";
    }else{
        echo "Error: " . $insert . "<br>" . mysqli_error($con);

    }
}
?>
<?php
include('../include/config.php');
if(isset($_POST['update'])){
    $edit_mei_id = $_POST['edit_mei_id'];
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $quote = mysqli_real_escape_string($con, $_POST['quote']);
    $date = $_POST['date'];


    $insert = "UPDATE `meimozigal` SET `mei_date`='$date',`mei_quote_title`='$title',`mei_quote`='$quote' WHERE `mei_id`='$edit_mei_id'";
    $res_insert = mysqli_query($con,$insert);
    if($res_insert){
        echo "<script>alert('Mei Mozigal Update Successfully');</script>";
        echo "<script>window.location.href='../mei_moli';</script>";
    }else{
        echo "Error: " . $insert . "<br>" . mysqli_error($con);

    }
}
?>