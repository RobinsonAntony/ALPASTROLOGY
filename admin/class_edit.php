<?php include('include/header.php');
include('include/config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM `classes` WHERE `class_id` = $id";
$res = mysqli_query($con, $sql);
// print_r($res);
$row = mysqli_fetch_assoc($res);

?>

<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row  bg-white rounded mx-0">
        <div class="col-md-12 ">
            <div class="row my-2">
                <div class="col-md-12">
                    <h3>Edit Online Class</h3>
                </div>
                <div class="col-md-8">
                    <form action="actions/edit_class.php" method="post" enctype="multipart/form-data" id="addclassForm">
                        <div class="form-group">
                            <!-- <label for="class_name">Class Name</label> -->
                            <input type="hidden" name="class_id" class="form-control" id="class_id" value="<?= $row['class_id'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="class_name">Class Name</label>
                            <input type="text" name="class_name" class="form-control" id="class_name" value="<?= $row['class_name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="class_date_time">Class Date and Time</label>
                            <input type="datetime-local" name="class_date_time" class="form-control" id="class_date_time" value="<?= $row['class_date_time'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="class_link">Class Link</label>
                            <input type="text" name="class_link" class="form-control" id="class_link" value="<?= $row['class_link'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="class_desc">Class Description</label>
                            <!-- <input type="text" name="class_desc" class="form-control" id="class_desc" value="<?= $row['class_desc'] ?>"> -->
                            <textarea name="class_desc" id="class_desc" class="form-control" style="resize: none; width:100%;" cols="30" rows="8" value="<?= $row['class_desc'] ?>"><?= $row['class_desc'] ?></textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div><br>
    <a href="class" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Back </a>
</div>
<!-- Blank End -->

<?php include('include/footer.php'); ?>
