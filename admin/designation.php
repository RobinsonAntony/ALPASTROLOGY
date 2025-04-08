<?php
include('include/header.php');
include('include/config.php');
ini_set('display_errors', 0);
$edit = $_GET['id'];

?>
<link href='https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<link href='https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<div class="container-fluid pt-4 px-4">
    <div class="row rounded ">
        <div class="row">
            <h3 class="text-center">Designations</h3>
            <div class="col-md-6">
                <?php if (!empty($edit)) {
                    $edit_sql="SELECT * FROM `designations` WHERE desig_id = $edit";
                    $edit_res=mysqli_query($con,$edit_sql);
                    $edit_row=mysqli_fetch_assoc($edit_res);
                    
                ?>
                    <span class="fw-bold">Edit Designations</span>
                    <form action="./actions/edit_desig" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="designation">Designation</label>
                                    <input type="hidden" name="design_id" value="<?=$edit?>">
                                    <input type="text" class="form-control" name="dessignation" required title="Please enter a designation. This field is required." value="<?=$edit_row['desig_name']?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-success mt-4" name="update">Update</button>
                            </div>
                        </div>
                    </form>

                <?php

                } else {
                ?>
                    <span class="fw-bold">Add Designations</span>
                
                    <form action="./actions/add_desig" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="designation">Designation</label>
                                    <input type="text" class="form-control" name="dessignation" required title="Please enter a designation. This field is required." value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-success mt-4" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
        <hr class="mt-5">
        <div class="row" Style="background-color:#ffcc99;">
            <h3 class="text-center">Designations List</h3>
        </div>
        <div class="row" style="overflow-y:scroll; height:400px;">
            <div class="col-md-12">
                <table id="designation-table" class="display table" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Designation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_desig = "SELECT * FROM `designations`";
                        $desig_result = mysqli_query($con, $sql_desig);
                        if ($desig_result) {
                            $i = 1; // Initialize the counter outside the loop
                            while ($row = mysqli_fetch_assoc($desig_result)) {
                                $desig_id = $row['desig_id'];
                        ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $row['desig_name'] ?></td>
                                    <td>
                                        <a href="designation.php?id=<?= $desig_id ?>" class="btn btn-primary">
                                            <i class="fa fa-edit text-white"></i>
                                        </a>
                                        <a href="desig_del.php?id=<?= $desig_id ?>" class="btn btn-warning">
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
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