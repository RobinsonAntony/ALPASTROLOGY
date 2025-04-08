<?php
include("include/config.php");

if (isset($_GET['video_del'])) {
    $video_del = $_GET['video_del'];

    // Check if the profile exists
    $checkSql = "SELECT * FROM `videos` WHERE video_id = $video_del";
    $checkResult = mysqli_query($con, $checkSql);
    $profileExists = mysqli_num_rows($checkResult) > 0;

    if ($profileExists) {
        // Display confirmation message
        echo "<script>
            if (confirm('Are you sure you want to delete this Video?')) {
                window.location.href = 'video_del.php?confirmedDelete=$video_del';
            } else {
                window.location.href = 'video.php';
            }
        </script>";
    } else {
        echo "Class not found.";
    }
} elseif (isset($_GET['confirmedDelete'])) {
    $video_del = $_GET['confirmedDelete'];

    $sql = "DELETE FROM `videos` WHERE video_id = $video_del";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Video Deleted successfully!');</script>";
        echo "<script>window.location.href ='video.php';</script>";
    } else {
        echo "Delete error: " . mysqli_error($con);
    }
}
?>
