<?php
session_start();

// Check if admin_id is set in the session
if (!isset($_SESSION['admin_id'])) {
    // Handle the case where admin_id is not set
    echo "Error: Admin ID not set in session.";
    exit();
}

$admin_id = $_SESSION['admin_id'];

// Destroy the session
session_destroy();

// Include the file that establishes the database connection
include("include/config.php");

// Check if the connection was successful
if (!$con) {
    // Handle database connection failure
    echo "Failed to connect to the database.";
    exit();
}

// Update the admin_live_status to 1
$sql_admin = "UPDATE `admin` SET admin_live_status = 1 WHERE admin_id = $admin_id";

// Execute the query
$sql_res = mysqli_query($con, $sql_admin);

// Check if the query was successful
if (!$sql_res) {
    // Handle query execution failure
    echo "Failed to update admin status.";
    exit();
}

// Redirect to the login page
header("Location: login.php");
exit();
?>
