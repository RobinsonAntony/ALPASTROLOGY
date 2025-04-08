<?php
include('include/header.php');
include('include/config.php');
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

    /* Style the selected option */

    /* Style the selected option */
    select option:checked {
        background-color: orangered;
        color: white;
    }

    select option:hover {
        background-color: orangered;
        color: black;
    }
</style>

</style>
<link href='https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<link href='https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--<div style="overflow-y:scroll; height:600px;">-->
<div class="container-fluid pt-4 px-4">
    <div class="row rounded ">
        <div class="row">
            <h3 class="text-center" style="background-color:#ffcc99;">Access</h3>
            <div class="col-md-12">
                <form action="./actions/add_access.php" method="post">
                    <div class="row">
                        <div class="col-md-5">
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
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="access" >Access</label><br>
                                <?php
                                $des_sql = "SELECT * FROM `navbar`";
                                $des_res = mysqli_query($con, $des_sql);
                                $count = 0; // Counter to keep track of checkboxes in the current row

                                while ($desig_row = mysqli_fetch_assoc($des_res)) {
                                    if ($count % 6 == 0 && $count > 0) {
                                        // Start a new row after every 6 checkboxes
                                ?>
                                    <?php
                                    }
                                    ?>
                                    <div class="form-check form-check-inline access">
                                        <input class="form-check-input checkbox" type="checkbox" name="access[]" id="access_' <?= $desig_row['nav_id'] ?>'" value="'<?= $desig_row['nav_id'] ?>'">
                                        <label class="form-check-label" for="access_' <?= $desig_row['nav_id'] ?> '"><?= $desig_row['nav_name'] ?></label>
                                    </div>
                                <?php
                                    $count++;
                                }
                                ?>
                            </div>

                        </div>
                    </div>


                    <div class="rwo">

                        <div class="col-md-2">
                            <button class="btn btn-success mt-4" name="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr class="mt-5">
        <div class="row">
            <h3 class="text-center" style="background-color:#ffcc99;">Access List</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="designation-table" class="display table" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Designation</th>
                            <th>Action</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_desig = "SELECT * FROM `user_access` as a LEFT JOIN `designations` as b ON a.user_desig_id = b.desig_id LEFT JOIN `navbar` as c ON a.user_nav = c.nav_id GROUP BY a.user_desig_id";
                        $desig_result = mysqli_query($con, $sql_desig);
                        
                        if ($desig_result) {
                            $i = 1; // Initialize the counter outside the loop
                            while ($row = mysqli_fetch_assoc($desig_result)) {
                                $desig_id = $row['user_desig_id'];
                        ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $row['desig_name'] ?></td>
                                    <td>
                                        <!-- <a href="desig_edit?id=<?= $desig_id ?>" class="btn btn-primary">
                                            <i class="fa fa-edit text-white"></i>
                                        </a> -->
                                        <a href="desig_del?id=<?= $desig_id ?>" class="btn btn-warning">
                                            <i class="fa fa-trash text-white"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="view_access?view=<?=$desig_id?>" class="btn text-white" style="background-color: orangered;">View</a>
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
<!--</div>-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        // Initialize DataTable
        $('#designation-table').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copy',
                    className: 'btn btn-primary',
                    text: 'Copy',
                },
                {
                    extend: 'csv',
                    className: 'btn btn-primary',
                    text: 'CSV',
                },
                {
                    extend: 'excel',
                    className: 'btn btn-primary',
                    text: 'Excel',
                },
                {
                    extend: 'pdf',
                    className: 'btn btn-primary',
                    text: 'PDF',
                },
                {
                    extend: 'print',
                    className: 'btn btn-primary',
                    text: 'Print',
                },
            ]
        });
    });
</script>
<?php
include('include/footer.php');
?>