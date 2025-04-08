<?php
include('include/config.php');

if (isset($_POST['apt_id']) && isset($_POST['is_viewed'])) {
    $apt_id = $_POST['apt_id'];
    $is_viewed = $_POST['is_viewed'];

    $sql = "UPDATE appointment SET is_viewed = ? WHERE apt_id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ii", $is_viewed, $apt_id);

    if ($stmt->execute()) {
        echo "Status updated successfully!";
    } else {
        echo "Failed to update status!";
    }
}
?>
