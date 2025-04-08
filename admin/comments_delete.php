
<?php
include("include/config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if the profile exists
    $checkSql = "SELECT * FROM `comments` WHERE cmt_id = $id";
    $checkResult = mysqli_query($con, $checkSql);
    $profileExists = mysqli_num_rows($checkResult) > 0;

    if ($profileExists) {
        // Display confirmation message
        echo "<script>
            if (confirm('Are you sure you want to delete this comments?')) {
                window.location.href = 'comments_delete.php?confirmedDelete=$id';
            } else {
                window.location.href = 'comments.php';
            }
        </script>";
    } else {
        echo "Class not found.";
    }
} elseif (isset($_GET['confirmedDelete'])) {
    $id = $_GET['confirmedDelete'];

    $sql = "DELETE FROM `comments` WHERE cmt_id = $id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('comments Deleted successfully!');</script>";
        echo "<script>window.location.href ='comments.php';</script>";
    } else {
        echo "Delete error: " . mysqli_error($con);
    }
}
