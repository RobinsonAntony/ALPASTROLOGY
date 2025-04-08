<?php
include("include/config.php");

if (isset($_GET['mei_moli_del'])) {
    $mei_moli_del = $_GET['mei_moli_del'];

    // Check if the profile exists
    $checkSql = "SELECT * FROM `meimozigal` WHERE mei_id = $mei_moli_del";
    $checkResult = mysqli_query($con, $checkSql);
    $profileExists = mysqli_num_rows($checkResult) > 0;

    if ($profileExists) {
        // Display confirmation message
        echo "<script>
            if (confirm('Are you sure you want to delete this Quotes?')) {
                window.location.href = 'mei_moli_del.php?confirmedDelete=$mei_moli_del';
            } else {
                window.location.href = 'mei_moli';
            }
        </script>";
    } else {
        echo "Class not found.";
    }
} elseif (isset($_GET['confirmedDelete'])) {
    $mei_moli_del = $_GET['confirmedDelete'];

    $sql = "DELETE FROM `meimozigal` WHERE mei_id = $mei_moli_del";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Quotes Deleted successfully!');</script>";
        echo "<script>window.location.href ='mei_moli';</script>";
    } else {
        echo "Delete error: " . mysqli_error($con);
    }
}
?>
