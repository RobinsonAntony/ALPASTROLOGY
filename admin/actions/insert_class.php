
<?php
include('../include/config.php');


if (isset($_POST['submit'])) {
    $class_name = $_POST['class_name'];
    $class_date_time = $_POST['class_date_time'];
    $class_link = $_POST['class_link'];
    $class_desc = $_POST['class_desc'];
    $datetimeWithoutSeconds = strtok($class_date_time, ".");


    $sql = "INSERT INTO `classes` (`class_name`, `class_date_time`, `class_link`, `class_desc`) VALUES ('$class_name', '$datetimeWithoutSeconds', '$class_link', '$class_desc')";


    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Data Inserted successfully!');</script>";
        echo "<script>window.location.href ='../class';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
