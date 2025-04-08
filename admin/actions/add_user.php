<?php
include('../include/config.php');

if (isset($_POST['submit'])) {
    // Retrieve form data
    $username = $_POST['username'];
    $designation = $_POST['designation'];
    $user_pass = $_POST['user_pass'];
    $user_mob = $_POST['user_mob'];
    $user_image = $_FILES['userImage'];

    $unique_identifier = uniqid();
    $file_extension = pathinfo($user_image['name'], PATHINFO_EXTENSION);
    $unique_filename = 'user_profile' . $unique_identifier . '.' . $file_extension;
    $destination_folder = '../upload/user/profile/';

    if (!file_exists($destination_folder)) {
        mkdir($destination_folder, 0777, true);
    }

    $image_path = $destination_folder . $unique_filename;
    $image_paths = str_replace('../', '', $image_path);

    if (!move_uploaded_file($user_image['tmp_name'], $image_path)) {
        echo "Error moving uploaded file.";
        exit();
    }


    // Get the designation name
    $des_name_sql = "SELECT desig_name FROM `designations` WHERE desig_id = $designation";
    $des_res = mysqli_query($con, $des_name_sql);
    $des_row = mysqli_fetch_assoc($des_res);
    $des_name = $des_row['desig_name'];

    // Generate the user email
    $current_year_full = date('Y'); // Get the full year (e.g., 2023)
    $current_year = substr($current_year_full, -2); // Extract the last two digits

    // Check and increment the email counter
    $email_prefix = $des_name . $current_year;
    $email_counter_query = "SELECT MAX(SUBSTRING_INDEX(user_email, '-', -1)) AS max_counter 
                            FROM `users` 
                            WHERE user_email LIKE '$email_prefix%'";
    $email_counter_result = mysqli_query($con, $email_counter_query);
    $row = mysqli_fetch_assoc($email_counter_result);
    $max_counter = $row['max_counter'];
    if ($max_counter !== null) {
        $email_counter = str_pad(intval($max_counter) + 1, 3, '0', STR_PAD_LEFT);
    } else {
        $email_counter = '001';
    }

    $user_email = $email_prefix . '-' . $email_counter;

    // Insert the data into the database user table
    $insert_query = "INSERT INTO `users` (user_name, user_desig, user_email, users_pass, user_mob, user_image) VALUES ('$username', '$designation', '$user_email', '$user_pass', '$user_mob', '$image_paths')";

    $sql_d = "SELECT desig_name AS designation_name FROM `designations` WHERE desig_id = $designation";
    $sql_d_res = mysqli_query($con, $sql_d);
    $sql_d_row = mysqli_fetch_assoc($sql_d_res);
    $desig_name = $sql_d_row['designation_name'];
    if (mysqli_query($con, $insert_query)) {
        // $user_last_id = mysqli_insert_id($con);
        //insert in admin table
        $admin_insert = "INSERT INTO `admin`(`admin_name`, `admin_email`, `admin_password`, `admin_type`) VALUES ('$username','$user_email','$user_pass','$desig_name')";


        if (mysqli_query($con, $admin_insert)) {
            echo "<script>alert('User Added Successfully');</script>";
            echo "<script>window.location.href='../users';</script>";
        } else {
            echo "Error in admin table: " . mysqli_error($con);
        }
    } else {
        echo "Error: " . mysqli_error($con);
    }
} else {
    echo "Invalid request.";
}
