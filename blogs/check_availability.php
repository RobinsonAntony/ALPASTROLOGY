<?php
// Include your database connection code here

if (isset($_POST['preferredDate'])) {
    // Assuming $con is your database connection

    // First, let's get the preferred date from the form
    $preferred_date = $_POST['date'];

    // Now, let's construct our SQL query to fetch users based on appointments for the preferred date
    $sql_users_appointments = "SELECT u.user_id, u.user_image, u.user_name 
                               FROM users u
                               INNER JOIN appointment a ON FIND_IN_SET(u.user_id, a.asign_to)
                               WHERE a.apt_date = '$preferred_date'
                               LIMIT 10";

    // Now, let's execute the query
    $sql_res = mysqli_query($con, $sql_users_appointments);

    // Check if the query executed successfully
    if ($sql_res) {
        // Start printing the HTML for displaying users
        echo '<div class="row">';
        while ($row = mysqli_fetch_assoc($sql_res)) {
            $user_image = $row['user_image'];
            $user_name = $row['user_name'];
            $user_id = $row['user_id'];

            echo '<div class="col-lg-2 col-md-2 col-sm-4 mb-4 mx-auto">';
            echo '<input type="checkbox" id="userCheckbox' . $user_id . '" name="selected_users[]" class="hidden-checkbox" value="' . $user_id . '">';
            echo '<label class="span" for="userCheckbox' . $user_id . '">';
            echo '<img src="./admin/' . $user_image . '" alt="' . $user_name . '" class="img-fluid rounded-circle user_image" style="width: 100px;height: 100px;">';
            echo '</label>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        // Handle the case where the query fails
        echo "Error executing SQL query: " . mysqli_error($con);
    }
}
