<?php
include('../include/config.php');

if (isset($_POST['submit'])) {
    // Retrieve form data
    $video_edit = $_POST['edit_id'];
    $video_title = $_POST['video_title'];
    $video_src = $_POST['video_src'];
    $video_link = $_POST['video_link'];

    // Check if a new image is provided
    if (isset($_FILES['video_pic']) && is_uploaded_file($_FILES['video_pic']['tmp_name'])) {
        // Generate a unique identifier for the filename
        $unique_identifier = uniqid();

        // Get the file extension
        $file_extension = pathinfo($_FILES['video_pic']['name'], PATHINFO_EXTENSION);

        // Construct a unique filename
        $unique_filename = 'video_pic_' . $unique_identifier . '.' . $file_extension;

        // Construct the path to the destination folder
        $destination_folder = '../upload/video/thumbnail/';

        // Check if the destination folder exists, create it if not
        if (!file_exists($destination_folder)) {
            mkdir($destination_folder, 0777, true); // You might adjust the permission level (0777) based on your needs
        }

        // Construct the full path to the image
        $image_path = $destination_folder . $unique_filename;
        $image_paths = str_replace('../', '', $image_path);

        // Move the uploaded image to the desired folder
        if (move_uploaded_file($_FILES['video_pic']['tmp_name'], $image_path)) {
            // Update the data in the database user table, including the image information
            $update_query = "UPDATE `videos` SET `video_title`='$video_title', `video_src`='$video_src', `video_link`='$video_link', `video_pic`='$image_paths' WHERE `video_id`='$video_edit'";
        } else {
            echo 'File move failed.';
            exit;
        }
    } else {
        // Update the data in the database user table without the image information
        $update_query = "UPDATE `videos` SET `video_title`='$video_title', `video_src`='$video_src', `video_link`='$video_link' WHERE `video_id`='$video_edit'";
    }

    // Debugging statements
    echo "Update Query: $update_query<br>";
    echo "Image Path: $image_paths<br>";

    if (mysqli_query($con, $update_query)) {
        echo "<script>alert('Video Updated Successfully');</script>";
        echo "<script>window.location.href='../video';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
} else {
    echo "Invalid request.";
}
?>
