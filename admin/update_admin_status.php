<?php
include('include/config.php');

if (isset($_POST['profileId']) && isset($_POST['profileStatus'])) {
    $profileId = $_POST['profileId'];
    $profileStatus = $_POST['profileStatus'];

    // Update profile status in the database
    $sql = "UPDATE `admin` SET `admin_live_status` = $profileStatus WHERE `admin_id` = $profileId";

    $result = mysqli_query($con, $sql);

    if ($result) {
            echo "Profile status updated successfully.";
       
    } else {
        echo "Failed to update users status.";
    }
} else {
    echo "Invalid request.";
}
?>
