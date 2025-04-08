<?php
include('include/header.php');
include('include/config.php');
ini_set('display_errors', 0);
$user_edit = $_GET['user_edit'];

?>
<style>
    .access input[type="checkbox"]:checked {
        background-color: orangered;
        color: orangered;
    }

    select {
        width: 200px;
        padding: 5px;
    }

    select option:checked {
        background-color: orangered;
        color: white;
    }

    select option:hover {
        background-color: orangered;
        color: black;
    }
</style>


<div class="container-fluid pt-4 px-4">
    <div class="row rounded ">
        <div class="row">
            <?php
            if (!empty($user_edit)) {
                $user_sql = "SELECT * FROM `users` as a LEFT JOIN `designations` as b ON  a.user_desig=b.desig_id WHERE user_id = $user_edit";
                $user_res = mysqli_query($con, $user_sql);
                $user_row = mysqli_fetch_assoc($user_res);
            ?>
                <h3 class="text-center" >Users</h3>
                <div class="col-md-12">
                    <span class="fs-5"><b>Edit Users</b></span><br>
                    <form action="./actions/edit_user.php" method="post" autocomplete="off" enctype="multipart/form-data">
                        <div class="row">
                            <input type="hidden" name="edit_user_id" value="<?= $user_edit ?>">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user_name">User Name</label>
                                    <input type="text" class="form-control" name="username" required title="Enter User Name" value="<?= $user_row['user_name'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="designation">Designation</label>
                                    <select class="form-control" name="designation" required>
                                        <option value="">Select a designation</option> <!-- Placeholder option with an empty value -->
                                        <?php
                                        $des_sql = "SELECT * FROM `designations`";
                                        $des_res = mysqli_query($con, $des_sql);

                                        while ($desig_row = mysqli_fetch_assoc($des_res)) {
                                            $selected = ($desig_row['desig_id'] == $user_row['user_desig']) ? 'selected' : '';
                                            echo "<option value='" . $desig_row['desig_id'] . "' $selected>" . $desig_row['desig_name'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="userimage">Image</label>
                                    <input type="file" name="userImage" id="userImage">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="user_pass">User Password</label>
                                <input type="password" name="user_pass" id="user_pass" class="form-control" required title="Enter User Password" value="<?= $user_row['users_pass'] ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="user_mob">User Mobile</label>
                                <input type="text" name="user_mob" id="user_mob" class="form-control" required title="Enter User Mobile" value="<?= $user_row['user_mob'] ?>">
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">

                                    <button class="btn btn-success mt-4" class="form-control" name="submit">Submit</button>
                                </div>
                            </div>
                    </form>
                </div>
        </div>
    <?php
            } else {
    ?>
        <h3 class="text-center">Users</h3>
        <div class="col-md-12">
            <span class="fs-5"><b>Add Users</b></span><br>
            <form action="./actions/add_user.php" method="post" autocomplete="off" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="user_name">User Name</label>
                            <input type="text" class="form-control" name="username" required title="Enter User Name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <select class="form-control" name="designation" required>
                                <option value="">Select a designation</option> <!-- Placeholder option with an empty value -->
                                <?php
                                $des_sql = "SELECT * FROM `designations`";
                                $des_res = mysqli_query($con, $des_sql);

                                while ($desig_row = mysqli_fetch_assoc($des_res)) {
                                    echo "<option value='" . $desig_row['desig_id'] . "'>" . $desig_row['desig_name'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="userimage">Image</label>
                            <input type="file" name="userImage" id="userImage">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <label for="user_pass">User Password</label>
                        <input type="password" name="user_pass" id="user_pass" class="form-control" required title="Enter User Password">
                    </div>
                    <div class="col-md-4">
                        <label for="user_mob">User Mobile</label>
                        <input type="text" name="user_mob" id="user_mob" class="form-control" required title="Enter User Mobile">
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">

                            <button class="btn btn-success mt-4" class="form-control" name="submit">Submit</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
<?php
            }
?>

</div>
<hr class="mt-5">
<div class="row">
    <h3 class="text-center" style="background-color:#ffcc99;">List of Users</h3>
</div>
<div class="row">
    <div class="col-md-12">
        <table id="users-table" class="display table" style="width:100%">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>User ID</th>
                    <th>Password</th>
                    <th>Mobile</th>
                    <th>Images</th>
                    <th>Action</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql_desig = "SELECT * FROM `users` as a LEFT JOIN `designations` as b ON a.user_desig = b.desig_id ";
                $desig_result = mysqli_query($con, $sql_desig);

                if ($desig_result) {
                    $i = 1; // Initialize the counter outside the loop
                    while ($row = mysqli_fetch_assoc($desig_result)) {
                        $user_id = $row['user_id'];
                ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $row['user_name'] ?></td>
                            <td><?= $row['desig_name'] ?></td>
                            <td><?= $row['user_email'] ?></td>
                            <td><?= $row['users_pass'] ?></td>
                            <td><?= $row['user_mob'] ?></td>
                            <td><img src="<?= $row['user_image'] ?>" alt="" style="width: 80px;height:80px;"></td>
                            <td>
                                <a href="users?user_edit=<?= $user_id ?>" class="btn btn-primary">
                                    <i class="fa fa-edit text-white"></i>
                                </a>
                                <a href="user_del?user_del=<?= $user_id ?>" class="btn btn-warning">
                                    <i class="fa fa-trash text-white"></i>
                                </a>
                            </td>
                            <td>
                                <?php
                                $statusButtonClass = ($row['user_status'] == 0) ? 'btn btn-success status' : 'btn btn-danger status';
                                $statusButtonText = ($row['user_status'] == 0) ? 'Active' : 'Inactive';

                                echo '<button class="' . $statusButtonClass . '" data-profile-id="' . $user_id . '">' . $statusButtonText . '</button>';
                                ?>
                            </td>


                        </tr>
                <?php
                        $i++; // Increment the counter inside the loop
                    }
                }
                ?>
            </tbody>
        </table>

    </div>
</div>

</div>
</div>
<?php
include('include/footer.php');
?>
<script>
    $(document).ready(function() {
        // Handle status change button click
        $(document).on('click', 'button.status', function() {
            var button = $(this);
            var profileId = button.data('profile-id');
            var profileStatus = (button.hasClass('btn-success')) ? 1 : 0;

            // Display confirmation dialog using SweetAlert
            Swal.fire({
                title: 'Confirmation',
                text: 'Are you sure you want to change the status?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Send AJAX request to update profile status
                    $.ajax({
                        url: 'update_user_status.php',
                        method: 'POST',
                        data: {
                            profileId: profileId,
                            profileStatus: profileStatus
                        },
                        success: function(response) {
                            // Update button style and text
                            if (profileStatus === 0) {
                                button.removeClass('btn-danger').addClass('btn-success').text('Active');
                            } else {
                                button.removeClass('btn-success').addClass('btn-danger').text('Inactive');
                            }
                            // Show success message
                            Swal.fire({
                                title: 'Success',
                                text: response,
                                icon: 'success',
                                showConfirmButton: false,
                                timer: 800
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            });
        });
    });
</script>