<?php
include('../include/config.php');
ini_set('display_errors', 1);

if (isset($_POST['article_update'])) {
    $artid = mysqli_real_escape_string($con, $_POST['articleId']);
    $art_title = mysqli_real_escape_string($con, $_POST['art_title']);
    $art_sub_title = mysqli_real_escape_string($con, $_POST['art_sub_title']);
    $art_author = mysqli_real_escape_string($con, $_POST['author_name']);
    $art_intro = mysqli_real_escape_string($con, $_POST['intro']);
    $art_conclusion = mysqli_real_escape_string($con, $_POST['conclusion']);
    $oldArt_image = $_POST['oldarticle_image'];
    $newarticle_image = $_FILES['article_image'];



    $headings = isset($_POST['index_table']) ? $_POST['index_table'] : [];
    $contents = isset($_POST['table_contents']) ? $_POST['table_contents'] : [];

    if (!empty($newarticle_image['name'])) { // Check if a file has been selected for upload
        if ($newarticle_image['error'] !== UPLOAD_ERR_OK) {
            echo "File upload failed with error code: " . $newarticle_image['error'];
            exit();
        }

        // Process the file upload
        $unique_identifier = uniqid();
        $file_extension = pathinfo($newarticle_image['name'], PATHINFO_EXTENSION);
        $unique_filename = 'art_pic' . $unique_identifier . '.' . $file_extension;
        $destination_folder = '../upload/article/book/';

        if (!file_exists($destination_folder)) {
            mkdir($destination_folder, 0777, true);
        }

        $image_path = $destination_folder . $unique_filename;
        $image_paths = str_replace('../', '', $image_path);

        if (!move_uploaded_file($newarticle_image['tmp_name'], $image_path)) {
            echo "Error moving uploaded file.";
            exit();
        }

        // Update the SQL query to include the new article image path
        $art_insert_qry = "UPDATE `articles` SET `art_title`='$art_title',`art_sub_title`='$art_sub_title',`art_author`='$art_author',`art_intro`='$art_intro',`art_image`='$image_paths',`art_conclusion`='$art_conclusion' WHERE `art_id`='$artid'";
    } else {
        // Update the SQL query without the new article image path
        $art_insert_qry = "UPDATE `articles` SET `art_title`='$art_title',`art_sub_title`='$art_sub_title',`art_author`='$art_author',`art_intro`='$art_intro',`art_conclusion`='$art_conclusion' WHERE `art_id`='$artid'";
    }



    $qry_result = mysqli_query($con, $art_insert_qry);

    if ($qry_result) {
        $last_insert_id = mysqli_insert_id($con);

        foreach ($headings as $key => $heading) {
            $content = mysqli_real_escape_string($con, $contents[$key]);
            $sql_content = "UPDATE `article_content_table` SET`art_heading_name`='$heading',`art_body_contents`='$content' WHERE `art_for_id`='$artid'";
            $content_res = mysqli_query($con, $sql_content);

            if (!$content_res) {
                echo "Error: " . $sql_content . "<br>" . mysqli_error($con);
                exit;
            }
        }

        echo "<script>alert('Article Updated successfully!');</script>";
        echo "<script>window.location.href ='../articles';</script>";
    } else {
        echo "Error: " . $art_insert_qry . "<br>" . mysqli_error($con);
    }
}
