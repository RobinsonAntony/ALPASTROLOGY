<?php
include('../include/config.php');

if (isset($_POST['submit'])) {
    // Get the values from the form
    $user_desig_id = $_POST['designation'];
    $user_nav = isset($_POST['access']) ? $_POST['access'] : [];

    // Insert each user_nav value into the table
    foreach ($user_nav as $value) {
        $sql = "INSERT INTO `user_access` (`user_desig_id`, `user_nav`) VALUES ($user_desig_id, $value)";
        $result = mysqli_query($con, $sql);

        if (!$result) {
            echo "Error: " . mysqli_error($con);
            break; // Exit the loop if an error occurs
        }
    }

    // Check if all insertions were successful
    if ($result) {
        echo "<script>alert('Access Added Successfully');</script>";
        echo "<script>window.location.href='../access';</script>";
    }
}
?>
