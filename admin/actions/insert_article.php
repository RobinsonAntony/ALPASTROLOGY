<?php
include('../include/config.php');
ini_set('display_errors', 1);

if (isset($_POST['article_submit'])) {
    $art_title = mysqli_real_escape_string($con, $_POST['art_title']);
    $art_sub_title = mysqli_real_escape_string($con, $_POST['art_sub_title']);
    $art_author = mysqli_real_escape_string($con, $_POST['author_name']);
    $art_intro = mysqli_real_escape_string($con, $_POST['intro']);
    $art_conclusion = mysqli_real_escape_string($con, $_POST['conclusion']);
    $article_image = $_FILES['article_image'];

    $headings = isset($_POST['index_table']) ? $_POST['index_table'] : [];
    $contents = isset($_POST['table_contents']) ? $_POST['table_contents'] : [];

    $unique_identifier = uniqid();
    $file_extension = pathinfo($article_image['name'], PATHINFO_EXTENSION);
    $unique_filename = 'art_pic' . $unique_identifier . '.' . $file_extension;
    $destination_folder = '../upload/article/book/';

    if (!file_exists($destination_folder)) {
        mkdir($destination_folder, 0777, true);
    }

    $image_path = $destination_folder . $unique_filename;
    $image_paths = str_replace('../', '', $image_path);

    if ($article_image['error'] !== UPLOAD_ERR_OK) {
        echo "File upload failed with error code: " . $article_image['error'];
        exit();
    }

    if (!move_uploaded_file($article_image['tmp_name'], $image_path)) {
        echo "Error moving uploaded file.";
        exit();
    }

    $art_insert_qry = "INSERT INTO `articles`(`art_title`, `art_sub_title`, `art_author`, `art_intro`, `art_conclusion`, `art_image`) 
                      VALUES ('$art_title','$art_sub_title','$art_author','$art_intro', '$art_conclusion','$image_paths')";

    $qry_result = mysqli_query($con, $art_insert_qry);

    if ($qry_result) {
        $last_insert_id = mysqli_insert_id($con);

        foreach ($headings as $key => $heading) {
            $content = mysqli_real_escape_string($con, $contents[$key]);
            $sql_content = "INSERT INTO `article_content_table`(`art_for_id`, `art_heading_name`, `art_body_contents`) 
                            VALUES ('$last_insert_id', '$heading', '$content')";
            $content_res = mysqli_query($con, $sql_content);

            if (!$content_res) {
                echo "Error: " . $sql_content . "<br>" . mysqli_error($con);
                exit;
            }
        }

        echo "<script>alert('Article Inserted successfully!');</script>";
        echo "<script>window.location.href ='../articles';</script>";
    } else {
        echo "Error: " . $art_insert_qry . "<br>" . mysqli_error($con);
    }
}
?>
