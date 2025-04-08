<?php
include('include/header.php');
include('include/config.php');
ini_set('display_errors', 0);
$video_edit = $_GET['video_edit'];

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
            if (!empty($video_edit)) {
                $user_sql = "SELECT * FROM `videos` WHERE video_id = $video_edit";
                $user_res = mysqli_query($con, $user_sql);
                $user_row = mysqli_fetch_assoc($user_res);
            ?>
                <h3 class="text-center">Video</h3>
                <div class="col-md-12">
                    <span class="fs-5"><b>Edit Users</b></span><br>
                    <form action="./actions/edit_video.php" method="post" autocomplete="off" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="hidden" name="edit_id" value="<?=$video_edit?>">
                                <div class="form-group">
                                    <label for="video_title">Videos Title</label>
                                    <input type="text" class="form-control" name="video_title" value="<?=$user_row['video_title']?>" required title="Enter Video Title">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="video_src">Videos Title</label>
                                    <textarea name="video_src" class="form-control" value="" id="video_id" cols="30" rows="10" style="resize: none;height: 20px;"><?=$user_row['video_src']?></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="video_link">Videos Link</label>
                                    <input type="text" class="form-control" name="video_link" value="<?=$user_row['video_link']?>" required title="Enter Video link">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="video_pic">Thumnail Picture</label>
                                    <input type="file" class="form-control" name="video_pic" value="<?=$user_row['video_link']?>"  title="Enter Video Picture">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button class="btn btn-success mt-4" class="form-control" name="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php
            } else {
            ?>
                <h3 class="text-center">Videos</h3>
                <div class="col-md-12">
                    <span class="fs-5"><b>Add Videos</b></span><br>
                    <form action="./actions/add_video.php" method="post" autocomplete="off" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="video_title">Videos Title</label>
                                    <input type="text" class="form-control" name="video_title" required title="Enter Video Title">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="video_src">Videos Source</label>
                                    <textarea name="video_src" class="form-control" id="" cols="30" rows="10" style="resize: none;height: 20px;"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="video_link">Videos Link</label>
                                    <input type="text" class="form-control" name="video_link" required title="Enter Video link">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="video_pic">Thumnail Picture</label>
                                    <input type="file" class="form-control" name="video_pic" value="<?=$user_row['video_pic']?>" required title="Enter Video Picture">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button class="btn btn-success mt-4" class="form-control" name="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php
            }
            ?>

        </div>
        <hr class="mt-5">
        <div class="row">
            <h3 class="text-center">Videos</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="designation-table" class="display table" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 50px;">S.No</th>
                            <th style="width: 200px;">Title</th>
                            <th style="width: 200px;">Source</th>
                            <th style="width: 200px;">Link</th>
                            <th style="width: 200px;">Image</th>
                            <th style="width: 150px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_desig = "SELECT * FROM `videos`";
                        $desig_result = mysqli_query($con, $sql_desig);

                        if ($desig_result) {
                            $i = 1; // Initialize the counter outside the loop
                            while ($row = mysqli_fetch_assoc($desig_result)) {
                                $video_id = $row['video_id'];
                        ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $row['video_title'] ?></td>
                                    <td><?= $row['video_src'] ?></td>
                                    <td><?= $row['video_link'] ?></td>
                                    <td><img src="<?= $row['video_pic'] ?>" alt="" style="width: 80px;"></td>
                                    <td style="display: flex;">
                                        <a href="video?video_edit=<?= $video_id ?>" class="btn btn-primary" style="margin: 0px 5px;">
                                            <i class="fa fa-edit text-white"></i>
                                        </a>
                                        <a href="video_del?video_del=<?= $video_id ?>" class="btn btn-warning" style="margin: 0px 5px;">
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