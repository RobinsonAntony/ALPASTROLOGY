<?php
include('../include/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    // Escape user inputs to prevent SQL injection
    $event_name = mysqli_real_escape_string($con, $_POST['event_name']);
    $event_desc = mysqli_real_escape_string($con, $_POST['event_desc']);
    $event_date = $_POST['event_date'];

    // Check if the event folder exists, if not, create it
    $event_folder = "../upload/event/";
    if (!file_exists($event_folder)) {
        mkdir($event_folder, 0777, true);
    }

    // Handle image uploads
    $image_paths = [];
    for ($i = 1; $i <= 5; $i++) {
        $image_name = "Images" . $i;
        if (isset($_FILES[$image_name]) && $_FILES[$image_name]['error'] == 0) {
            $image_tmp = $_FILES[$image_name]['tmp_name'];
            $image_extension = pathinfo($_FILES[$image_name]['name'], PATHINFO_EXTENSION);
            $unique_filename = time() . "_" . mt_rand(1000, 9999) . "." . $image_extension;
            $image_path = $event_folder . $unique_filename;
            move_uploaded_file($image_tmp, $image_path);
            $paths_insert = $event_folder.$unique_filename;
            $image_paths[] = str_replace("../", "", $paths_insert);
        }
    }

    // Fill in missing indices with empty values
    $image_paths = array_pad($image_paths, 5, '');

    // Insert data into the database
    $sql = "INSERT INTO `events` (`event_title`, `event_desc`, `event_image1`, `event_image2`, `event_image3`, `event_image4`, `event_image5`, `event_date`) 
            VALUES ('$event_name', '$event_desc', '$image_paths[0]', '$image_paths[1]', '$image_paths[2]', '$image_paths[3]', '$image_paths[4]', '$event_date')";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Event Added Successfully');</script>";
        echo "<script>window.location.href='../event';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}
?>
<?php
include('../include/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    // Escape user inputs to prevent SQL injection
    $event_id = mysqli_real_escape_string($con, $_POST['edit_user_id']);
    $event_name = mysqli_real_escape_string($con, $_POST['event_name']);
    $event_desc = mysqli_real_escape_string($con, $_POST['event_desc']);
    $event_date = $_POST['event_date'];

    // Check if the event folder exists, if not, create it
    $event_folder = "../upload/event/";
    if (!file_exists($event_folder)) {
        mkdir($event_folder, 0777, true);
    }

    // Handle image updates
    $image_paths = [];
    for ($i = 1; $i <= 5; $i++) {
        $image_name = "Images" . $i;
        $image_sql = "SELECT event_image1,event_image2,event_image3,event_image4,event_image5 FROM events WHERE event_id = $event_id";
        $image_res = mysqli_query($con,$image_sql);
        $user_row = mysqli_fetch_assoc($image_res);
        $existing_image_path = $user_row['event_image' . $i];

        if (isset($_FILES[$image_name]) && $_FILES[$image_name]['error'] == 0) {
            // New image selected, upload and update path
            $image_tmp = $_FILES[$image_name]['tmp_name'];
            $image_extension = pathinfo($_FILES[$image_name]['name'], PATHINFO_EXTENSION);
            $unique_filename = time() . "_" . mt_rand(1000, 9999) . "." . $image_extension;
            $image_path = $event_folder . $unique_filename;
            move_uploaded_file($image_tmp, $image_path);
            $paths_insert = $event_folder.$unique_filename;
            $image_paths[] = str_replace("../", "", $paths_insert);
        } else {
            // No new image selected, use the existing image path
            $image_paths[] = $existing_image_path;
        }
    }

    // Update data in the database using prepared statement
    $sql = "UPDATE `events` SET 
            `event_title`=?,
            `event_desc`=?,
            `event_image1`=?,
            `event_image2`=?,
            `event_image3`=?,
            `event_image4`=?,
            `event_image5`=?,
            `event_date`=?
            WHERE `event_id`=?";

    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssssi", $event_name, $event_desc, $image_paths[0], $image_paths[1], $image_paths[2], $image_paths[3], $image_paths[4], $event_date, $event_id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Event Updated Successfully');</script>";
        echo "<script>window.location.href='../event';</script>";
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    // Close the prepared statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
?>



