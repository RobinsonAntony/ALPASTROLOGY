<?php
include('../include/config.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    // Retrieve form data
    $classdate= $_POST['classdate'];
    $name = $_POST['name'];
    $emailid = $_POST['emailid'];
    $address = $_POST['address'];
    $contactno = $_POST['contactno'];
     
     $whatsappno = $_POST['whatsappno'];
    $dob = $_POST['dob'];
    $timeofbirth = $_POST['timeofbirth'];
    
      $placeofbirth = $_POST['placeofbirth'];
    $lifetimeevent1 = $_POST['lifetimeevent1'];
    $lifetimeevent2 = $_POST['lifetimeevent1'];
    
     $workdetails = $_POST['workdetails'];
    
    // $photo = $_FILES['photo'];
    $referredby = $_POST['referredby'];
    $classlevel = $_POST['classlevel'];
    $classmedium = $_POST['classmedium'];
    
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $photo = $_FILES['photo'];
        
        // Generate unique filename
        $unique_identifier = uniqid();
        $file_extension = pathinfo($photo['name'], PATHINFO_EXTENSION);
        $unique_filename = $name . $unique_identifier . '.' . $file_extension;

        $destination_folder = '../upload/registration/photo/';

        // Create destination folder if not exists
        if (!file_exists($destination_folder)) {
            mkdir($destination_folder, 0777, true);
        }

        $image_path = $destination_folder . $unique_filename;
        $image_paths = str_replace('../', '', $image_path);

        // Move uploaded file to destination folder
        if (move_uploaded_file($photo['tmp_name'], $image_path)) {
            // File uploaded successfully, proceed with database insertion
            // Insert data into database...
        } else {
            echo "Error moving uploaded file.";
        }
    } else {
        echo "File upload error.";
    }


    // // Get the designation name
    // $des_name_sql = "SELECT desig_name FROM designations WHERE desig_id = $designation";
    // $des_res = mysqli_query($con, $des_name_sql);
    // $des_row = mysqli_fetch_assoc($des_res);
    // $des_name = $des_row['desig_name'];

    // // Generate the user email
    // $current_year_full = date('Y'); // Get the full year (e.g., 2023)
    // $current_year = substr($current_year_full, -2); // Extract the last two digits

    // // Check and increment the email counter
    // $email_prefix = $des_name . $current_year;
    // $email_counter_query = "SELECT MAX(SUBSTRING_INDEX(user_email, '-', -1)) AS max_counter 
    //                         FROM users 
    //                         WHERE user_email LIKE '$email_prefix%'";
    // $email_counter_result = mysqli_query($con, $email_counter_query);
    // $row = mysqli_fetch_assoc($email_counter_result);
    // $max_counter = $row['max_counter'];
    // if ($max_counter !== null) {
    //     $email_counter = str_pad(intval($max_counter) + 1, 3, '0', STR_PAD_LEFT);
    // } else {
    //     $email_counter = '001';
    // }

    // $user_email = $email_prefix . '-' . $email_counter;

    // Insert the data into the database user table
    $insert_query = "INSERT INTO `registration`(`reg_batchdate`, `reg_name`, `reg_emailid`, `reg_address`, `reg_contactno`, `reg_whatsappno`, `reg_dob`, `reg_timeofbirth`, `reg_placeofbirth`, `reg_ltevent1`, `reg_ltevent2`, `reg_workdetails`, `reg_photo`, `reg_refferedby`,  `reg_classlevel`, `reg_classmedium`) VALUES ('$classdate','$name','$emailid','$address','$contactno','$whatsappno','$dob','$timeofbirth','$placeofbirth','$lifetimeevent1','$lifetimeevent2','$workdetails','$image_paths','$referredby','$classlevel','$classmedium')";

    // $sql_d = "SELECT desig_name AS designation_name FROM designations WHERE desig_id = $designation";
    // $sql_d_res = mysqli_query($con, $sql_d);
    // $sql_d_row = mysqli_fetch_assoc($sql_d_res);
    // $desig_name = $sql_d_row['designation_name'];
    if (mysqli_query($con, $insert_query)) {
        // $user_last_id = mysqli_insert_id($con);
        //insert in admin table
        // $admin_insert = "INSERT INTO admin(admin_name, admin_email, admin_password, admin_type) VALUES ('$username','$user_email','$user_pass','$desig_name')";


       
            echo "<script>alert('Registration Successfully done');</script>";
            echo "<script>window.location.href='../registration';</script>";
       
    } else {
        echo "Error: " . mysqli_error($con);
    }
} else {
    echo "Invalid request.";
}