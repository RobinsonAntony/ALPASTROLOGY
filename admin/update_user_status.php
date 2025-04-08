<?php
include('include/config.php');

if (isset($_POST['profileId']) && isset($_POST['profileStatus'])) {
    $profileId = $_POST['profileId'];
    $profileStatus = $_POST['profileStatus'];

    // Update profile status in the database
    $sql = "UPDATE `users` SET `user_status` = $profileStatus WHERE `user_id` = $profileId";

    $result = mysqli_query($con, $sql);

    if ($result) {
        $adminsql = "UPDATE `admin` SET `admin_status` = $profileStatus WHERE `admin_id` = $profileId";
        $resuladmint = mysqli_query($con, $adminsql);

        if ($resuladmint) {
            echo "Profile status updated successfully.";
        } else {
            echo "Failed to update admin status.";
        }
    } else {
        echo "Failed to update users status.";
    }
} else {
    echo "Invalid request.";
}
?>
