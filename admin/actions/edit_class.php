
<?php
include('../include/config.php');


if (isset($_POST['submit'])) {
    $class_id = $_POST['class_id'];
    $class_name = $_POST['class_name'];
    $class_date_time = $_POST['class_date_time'];
    $class_link = $_POST['class_link'];
    $class_desc = $_POST['class_desc'];
    $datetimeWithoutSeconds = strtok($class_date_time, ".");


    $sql = "UPDATE `classes` SET `class_name`='$class_name',`class_date_time`='$class_date_time',`class_link`='$class_link',`class_desc`='$class_desc' WHERE `class_id` = '$class_id'";


    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Data Updated successfully!');</script>";
        echo "<script>window.location.href ='../class';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
