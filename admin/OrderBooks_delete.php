<?php
include("include/config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if the profile exists
    $checkSql = "SELECT * FROM `books_enquiry` WHERE book_enq_id = $id";
    $checkResult = mysqli_query($con, $checkSql);
    $profileExists = mysqli_num_rows($checkResult) > 0;

    if ($profileExists) {
        // Display confirmation message
        echo "<script>
            if (confirm('Are you sure you want to delete this Order?')) {
                window.location.href = 'OrderBooks_delete.php?confirmedDelete=$id';
            } else {
                window.location.href = 'books_order.php';
            }
        </script>";
    } else {
        echo "Class not found.";
    }
} elseif (isset($_GET['confirmedDelete'])) {
    $id = $_GET['confirmedDelete'];

    $sql = "DELETE FROM `books_enquiry` WHERE book_enq_id = $id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Order Deleted successfully!');</script>";
        echo "<script>window.location.href ='books_order.php';</script>";
    } else {
        echo "Delete error: " . mysqli_error($con);
    }
}
?>
