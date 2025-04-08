<?php
include("include/config.php");

if (isset($_GET['event_del'])) {
    $event_del = $_GET['event_del'];

    // Check if the profile exists
    $checkSql = "SELECT * FROM `events` WHERE event_id = $event_del";
    $checkResult = mysqli_query($con, $checkSql);
    $profileExists = mysqli_num_rows($checkResult) > 0;

    if ($profileExists) {
        // Display confirmation message
        echo "<script>
            if (confirm('Are you sure you want to delete this Event?')) {
                window.location.href = 'event_del.php?confirmedDelete=$event_del';
            } else {
                window.location.href = 'event.php';
            }
        </script>";
    } else {
        echo "Class not found.";
    }
} elseif (isset($_GET['confirmedDelete'])) {
    $event_del = $_GET['confirmedDelete'];

    $sql = "DELETE FROM `events` WHERE event_id = $event_del";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Event Deleted successfully!');</script>";
        echo "<script>window.location.href ='event.php';</script>";
    } else {
        echo "Delete error: " . mysqli_error($con);
    }
}
?>
