<?php
include('include/header.php');
include('include/config.php');
ini_set('display_errors', 0);
$event_edit = $_GET['event_edit'];

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
            if (!empty($event_edit)) {
                $user_sql = "SELECT * FROM `events` WHERE event_id = $event_edit";
                $user_res = mysqli_query($con, $user_sql);
                $user_row = mysqli_fetch_assoc($user_res);
            ?>
                <h3 class="text-center" style="background-color:#ffcc99;">Events</h3>
                <div class="col-md-12">
                    <span class="fs-5"><b>Edit Events</b></span><br>
                    <form action="./actions/add_event.php" method="post" autocomplete="off" enctype="multipart/form-data">
                        <div class="row">
                            <input type="hidden" name="edit_user_id" value="<?= $event_edit ?>">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="user_name">User Name</label>
                                    <input type="text" class="form-control" name="event_name" required title="Enter User Name" value="<?= $user_row['event_title'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="designation">Event Description</label>
                                    <input type="text" class="form-control" name="event_desc" value="<?= $user_row['event_desc'] ?>" required title="Enter User Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="designation">Event Date</label>
                                    <input type="date" class="form-control" name="event_date" value="<?= $user_row['event_date'] ?>" required title="Enter User Name">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="user_pass">Images</label>
                                <img src="./<?= $user_row['event_image1'] ?>" alt="" style="width: 80px;height:80px;">
                                <input type="file" name="Images1" id="user_pass" class="form-control"  title="Enter User Password">
                            </div>
                            <div class="col-md-2">
                                <label for="user_mob">Images</label>
                                <img src="./<?= $user_row['event_image2'] ?>" alt="" style="width: 80px;height:80px;">
                                <input type="file" name="Images2" id="user_mob" class="form-control"  title="Enter User Mobile">
                            </div>
                            <div class="col-md-2">
                                <label for="user_pass">Images</label>
                                <img src="./<?= $user_row['event_image3'] ?>" alt="" style="width: 80px;height:80px;">
                                <input type="file" name="Images3" id="user_pass" class="form-control" title="Enter User Password">
                            </div>
                            <div class="col-md-2">
                                <label for="user_mob">Images</label>
                                <img src="./<?= $user_row['event_image4'] ?>" alt="" style="width: 80px;height:80px;">
                                <input type="file" name="Images4" id="user_mob" class="form-control" title="Enter User Mobile">
                            </div>

                            <div class="col-md-2">
                                <label for="user_mob">Images</label>
                                <img src="./<?= $user_row['event_image5'] ?>" alt="" style="width: 80px;height:80px;">
                                <input type="file" name="Images5" id="user_mob" class="form-control" title="Enter User Mobile">
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">

                                    <button class="btn btn-success mt-4" class="form-control" name="update">Update</button>
                                </div>
                            </div>
                    </form>
                </div>
        </div>
    <?php
            } else {
    ?>
        <h3 class="text-center" style="background-color:#ffcc99;">Events</h3>
        <div class="col-md-12">
            <span class="fs-5"><b>Add Events</b></span><br>
            <form action="./actions/add_event.php" method="post" autocomplete="off" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="user_name">Event Name</label>
                            <input type="text" class="form-control" name="event_name" required title="Enter User Name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="designation">Event Description</label>
                            <input type="text" class="form-control" name="event_desc" required title="Enter User Name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="designation">Event Date</label>
                            <input type="date" class="form-control" name="event_date" required title="Enter User Name">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <label for="user_pass">Images</label>
                        <input type="file" name="Images1" id="user_pass" class="form-control" required title="Enter User Password">
                    </div>
                    <div class="col-md-2">
                        <label for="user_mob">Images</label>
                        <input type="file" name="Images2" id="user_mob" class="form-control" required title="Enter User Mobile">
                    </div>
                    <div class="col-md-2">
                        <label for="user_pass">Images</label>
                        <input type="file" name="Images3" id="user_pass" class="form-control" title="Enter User Password">
                    </div>
                    <div class="col-md-2">
                        <label for="user_mob">Images</label>
                        <input type="file" name="Images4" id="user_mob" class="form-control" title="Enter User Mobile">
                    </div>

                    <div class="col-md-2">
                        <label for="user_mob">Images</label>
                        <input type="file" name="Images5" id="user_mob" class="form-control" title="Enter User Mobile">
                    </div>
                    <div class="col-md-2">
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
    <h3 class="text-center" style="background-color:#ffcc99;">List of Events</h3>
</div>
<div class="row">
    <div class="col-md-12">
        <table id="designation-table" class="display table" style="width:100%">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Event</th>
                    <th>Event Description</th>
                    <th style="width: 150px;">Event Date</th>
                    <th style="width: 150px;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql_event = "SELECT * FROM `events` ORDER BY event_id DESC";
                $event_result = mysqli_query($con, $sql_event);

                if ($event_result) {
                    $i = 1; // Initialize the counter outside the loop
                    while ($row = mysqli_fetch_assoc($event_result)) {
                        $event_id = $row['event_id'];
                ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $row['event_title'] ?></td>
                            <td><?= $row['event_desc'] ?></td>
                            <td><?= $row['event_date'] ?></td>

                            <td>
                                <a href="event?event_edit=<?= $event_id ?>" class="btn btn-primary">
                                    <i class="fa fa-edit text-white"></i>
                                </a>
                                <a href="event_del?event_del=<?= $event_id ?>" class="btn btn-warning">
                                    <i class="fa fa-trash text-white"></i>
                                </a>
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