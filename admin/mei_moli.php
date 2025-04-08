<?php
include('include/header.php');
include('include/config.php');
ini_set('display_errors', 0);
$mei_moli = $_GET['mei_moli'];

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
            if (!empty($mei_moli)) {
                $mei_sql = "SELECT * FROM `meimozigal` WHERE mei_id = $mei_moli";
                $mei_res = mysqli_query($con, $mei_sql);
                $mei_row = mysqli_fetch_assoc($mei_res);
            ?>
                <h3 class="text-center" style="background-color:#ffcc99;">Mei Mozigal</h3>
                <div class="col-md-12">
                    <span class="fs-5" ><b>Edit Mei Mozigal</b></span><br>
                    <form action="./actions/add_meimoligal.php" method="post" autocomplete="off" enctype="multipart/form-data">
                        <div class="row">
                            <input type="hidden" name="edit_mei_id" value="<?= $mei_moli ?>">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mei_name">Title</label>
                                    <input type="text" class="form-control" name="title" required title="Enter mei Name" value="<?= $mei_row['mei_quote_title'] ?>">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="designation">Quote</label>
                                    <textarea name="quote" id=""  cols="15" rows="4" class="form-control"><?= $mei_row['mei_quote'] ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-top:-60px;">
                                <div class="form-group">
                                    <label for="designation">Date</label>
                                    <input type="date" class="form-control" name="date" value="<?= $mei_row['mei_date'] ?>" required title="Enter mei Name">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            
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
        <h3 class="text-center" style="background-color:#ffcc99;">Mei Mozigal</h3>
        <div class="col-md-12" >
            <span class="fs-5"><b>Add Mei Mozigal</b></span><br>
            <form action="./actions/add_meimoligal.php" method="post" autocomplete="off" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="mei_name">Title</label>
                            <input type="text" class="form-control" name="title" required title="Enter mei Name">
                        </div>
                    </div>
                   
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="designation">Quotes</label>
                            <textarea name="quote" id="" cols="15" rows="4" class="form-control"></textarea>
                        </div>
                    </div>
                     <div class="col-md-4" style="margin-top:-60px;">
                        <div class="form-group">
                            <label for="designation">Date</label>
                            <input type="date" class="form-control" name="date" required title="Enter mei Name">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    
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
    <h3 class="text-center" style="background-color:#ffcc99 !important;">List of Mei Mozigal</h3>
</div>
<div class="row" style="overflow-y:scroll; height:500px;">
    <div class="col-md-12" >
        <table id="designation-table" class="display table" style="width:100%">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Quotes</th>
                    <th style="width: 150px;">Date</th>
                    <th style="width: 150px;">Action</th>
                </tr>
            </thead>
            <tbody >
                <?php
                $sql_event = "SELECT * FROM `meimozigal`";
                $event_result = mysqli_query($con, $sql_event);

                if ($event_result) {
                    $i = 1; // Initialize the counter outside the loop
                    while ($row = mysqli_fetch_assoc($event_result)) {
                        $mei_id = $row['mei_id'];
                ?>
                        <tr >
                            <td><?= $i ?></td>
                            <td><?= $row['mei_quote_title'] ?></td>
                            <td><?= $row['mei_quote'] ?></td>
                            <td><?= date('M d, y', strtotime($row['mei_date'])) ?></td>
                            
                            <td>
                                <a href="mei_moli?mei_moli=<?= $mei_id ?>" class="btn btn-primary">
                                    <i class="fa fa-edit text-white"></i>
                                </a>
                                <a href="mei_moli_del?mei_moli_del=<?= $mei_id ?>" class="btn btn-warning">
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