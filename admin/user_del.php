<?php
include("include/config.php");

if (isset($_GET['user_del'])) {
    $id = $_GET['user_del'];

    // Check if the profile exists
    $checkSql = "SELECT * FROM `users` WHERE user_id = $id";
    $checkResult = mysqli_query($con, $checkSql);
    $profileExists = mysqli_num_rows($checkResult) > 0;

    if ($profileExists) {
        // Get user email
        $getUserEmailSql = "SELECT user_email FROM `users` WHERE user_id = $id";
        $getUserEmailResult = mysqli_query($con, $getUserEmailSql);
        $userData = mysqli_fetch_assoc($getUserEmailResult);
        $userEmail = $userData['user_email'];

        // Check if user email matches admin email
        $checkAdminSql = "SELECT * FROM `admin` WHERE admin_email = '$userEmail'";
        $checkAdminResult = mysqli_query($con, $checkAdminSql);
        $isAdmin = mysqli_num_rows($checkAdminResult) > 0;

        // Display confirmation message
        echo "<script>
            if (confirm('Are you sure you want to delete this User?')) {
                window.location.href = 'user_del.php?confirmedDelete=$id&isAdmin=$isAdmin&userEmail=$userEmail';
            } else {
                window.location.href = 'users.php';
            }
        </script>";

    } else {
        echo "User not found.";
    }
} elseif (isset($_GET['confirmedDelete'])) {
    $id = $_GET['confirmedDelete'];
    $isAdmin = $_GET['isAdmin'];
    $userEmail = $_GET['userEmail'];

    $sql = "DELETE FROM `users` WHERE user_id = $id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('User Deleted successfully!');</script>";

        // If the user is an admin, delete from the admin table as well
        if ($isAdmin) {
            $deleteAdminSql = "DELETE FROM `admin` WHERE admin_email = '$userEmail'";
            $deleteAdminResult = mysqli_query($con, $deleteAdminSql);

            if (!$deleteAdminResult) {
                echo "Error deleting from admin table: " . mysqli_error($con);
            }
        }

        echo "<script>window.location.href ='users.php';</script>";
    } else {
        echo "Delete error: " . mysqli_error($con);
    }
}
?>
