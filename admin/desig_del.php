<?php
include("include/config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if the profile exists
    $checkSql = "SELECT * FROM `designations` WHERE desig_id = $id";
    $checkResult = mysqli_query($con, $checkSql);
    $profileExists = mysqli_num_rows($checkResult) > 0;

    if ($profileExists) {
        // Display confirmation message to delete user access
        echo "<script>
            if (confirm('Are you sure you want to delete User Access associated with this Designation?')) {
                window.location.href = 'desig_del.php?deleteUserAccess=$id';
            } else {
                window.location.href = 'class.php';
            }
        </script>";
    } else {
        echo "Designation not found.";
    }
} elseif (isset($_GET['deleteUserAccess'])) {
    $id = $_GET['deleteUserAccess'];

    // Delete user access entries associated with the designation
    $deleteUserAccessSql = "DELETE FROM `user_access` WHERE user_desig_id = $id";
    $deleteUserAccessResult = mysqli_query($con, $deleteUserAccessSql);

    if ($deleteUserAccessResult) {
        // Now, delete the designation
        $deleteDesignationSql = "DELETE FROM `designations` WHERE desig_id = $id";
        $deleteDesignationResult = mysqli_query($con, $deleteDesignationSql);

        if ($deleteDesignationResult) {
            echo "<script>alert('Designation and User Access Deleted successfully!');</script>";
            echo "<script>window.location.href ='designation.php';</script>";
        } else {
            echo "Error deleting designation: " . mysqli_error($con);
        }
    } else {
        echo "Error deleting user access: " . mysqli_error($con);
    }
}
?>
