<?php
include('../include/config.php');

if (isset($_POST['submit'])) {
    // Retrieve form data
    $video_title = $_POST['video_title'];
    $video_src = $_POST['video_src'];
    $video_link = $_POST['video_link'];
    $video_pic = $_FILES['video_pic'];

    // Generate a unique identifier for the filename
    $unique_identifier = uniqid();

    // Get the file extension
    $file_extension = pathinfo($video_pic['name'], PATHINFO_EXTENSION);

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
    $image_paths = str_replace('../','',$image_path);

    // Insert the data into the database user table
    $insert_query = "INSERT INTO `videos`(`video_title`, `video_src`, `video_link`, `video_pic`) VALUES ('$video_title','$video_src','$video_link','$image_paths')";

    if (mysqli_query($con, $insert_query)) {
        // Move the uploaded image to the desired folder
        if (move_uploaded_file($video_pic['tmp_name'], $image_path)) {
            echo "<script>alert('Video Added Successfully');</script>";
            echo "<script>window.location.href='../video';</script>";
        } else {
            echo 'File move failed.';
        }
    } else {
        echo "Error: " . mysqli_error($con);
    }
} else {
    echo "Invalid request.";
}
?>
