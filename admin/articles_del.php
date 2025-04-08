<?php
include("include/config.php");

if (isset($_GET['art_del'])) {
    $art_id = $_GET['art_del'];

    // Check if the profile exists
    $checkSql = "SELECT * FROM `articles` WHERE art_id = $art_id";
    $checkResult = mysqli_query($con, $checkSql);
    $profileExists = mysqli_num_rows($checkResult) > 0;

    if ($profileExists) {
        // Display confirmation message
        echo "<script>
            if (confirm('Are you sure you want to delete this Article?')) {
                window.location.href = 'articles_del.php?confirmedDelete=$art_id';
            } else {
                window.location.href = 'articles.php';
            }
        </script>";
    } else {
        echo "Class not found.";
    }
} elseif (isset($_GET['confirmedDelete'])) {
    $art_id = $_GET['confirmedDelete'];

    $sql = "DELETE FROM `articles` WHERE art_id = $art_id";
    $result = mysqli_query($con, $sql);

    if ($result) {

        $sqlart = "DELETE FROM `article_content_table` WHERE art_for_id = $art_id";
        $result_art = mysqli_query($con, $sqlart);

        if ($result_art) {
            echo "<script>alert('Articles Deleted successfully!');</script>";
            echo "<script>window.location.href ='articles.php';</script>";
        }
    } else {
        echo "Delete error: " . mysqli_error($con);
    }
}
