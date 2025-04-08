<?php
include('../include/config.php');

if (isset($_POST['submit'])) {
    // Retrieve form data
    $user_id = $_POST['edit_user_id'];
    $username = $_POST['username'];
    $designation = $_POST['designation'];
    $user_pass = $_POST['user_pass'];
    $user_mob = $_POST['user_mob'];
    $user_image = $_FILES['userImage'];


    // Get the designation name
    $des_name_sql = "SELECT desig_name FROM `designations` WHERE desig_id = $designation";
    $des_res = mysqli_query($con, $des_name_sql);
    $des_row = mysqli_fetch_assoc($des_res);
    $des_name = $des_row['desig_name'];



 


    $user_img_sql = "SELECT user_image FROM `users` WHERE user_id = $user_id";
    $user_res = mysqli_query($con, $user_img_sql);
    $user_row = mysqli_fetch_assoc($user_res);
    $user_profileImage = $user_row['user_image'];


if (empty($_FILES['userImage'])){
    $img_locate = $user_profileImage;
}else{


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

    $img_locate = $image_paths;

}


    // Update the user table
    $update_user_query = "UPDATE `users` 
                        SET user_name = '$username', 
                            user_desig = '$designation', 
                            users_pass = '$user_pass', 
                            user_mob = '$user_mob',
                            user_image = '$img_locate' 
                        WHERE user_id = $user_id";

    // Update the admin table based on the admin_email
    $update_admin_query = "UPDATE `admin` 
                            SET admin_name = '$username', 
                                admin_password = '$user_pass', 
                                admin_type = '$des_name' 
                            WHERE admin_email IN (SELECT user_email FROM `users` WHERE user_id = $user_id)";

    if (mysqli_query($con, $update_user_query) && mysqli_query($con, $update_admin_query)) {
        echo "<script>alert('User Updated Successfully');</script>";
        echo "<script>window.location.href='../users';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
} else {
    echo "Invalid request.";
}
?>
