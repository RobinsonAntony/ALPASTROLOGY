<?php
include("include/config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if the profile exists
    $checkSql = "SELECT * FROM `user_access` WHERE user_desig_id = $id";
    $checkResult = mysqli_query($con, $checkSql);
    $profileExists = mysqli_num_rows($checkResult) > 0;

    if ($profileExists) {
        // Display confirmation message
        echo "<script>
            if (confirm('Are you sure you want to delete this Accesss?')) {
                window.location.href = 'access_del.php?confirmedDelete=$id';
            } else {
                window.location.href = 'access.php';
            }
        </script>";
    } else {
        echo "Class not found.";
    }
} elseif (isset($_GET['confirmedDelete'])) {
    $id = $_GET['confirmedDelete'];

    $sql = "DELETE FROM `user_access` WHERE user_desig_id = $id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Designation Deleted successfully!');</script>";
        echo "<script>window.location.href ='access.php';</script>";
    } else {
        echo "Delete error: " . mysqli_error($con);
    }
}
?>
