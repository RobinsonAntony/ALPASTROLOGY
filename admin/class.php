<?php
include('include/header.php');
include('include/config.php');
?>
<!-- Include DataTables CSS and JS files -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row  rounded mx-0">
        <div class="video">
            <h2 class="m-3">All Classes</h2>
            <a href="add_class.php" class="btn btn-success m-3">Add +</a> <!-- Corrected link to add_video.php -->
        </div>
        <table id="example" class="display table table-responsive p-3"> <!-- Added "display" class for DataTables -->
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Class Name</th>
                    <th>Class Date Time</th>
                    <th>Class Link</th>
                    <th>Class Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `classes`";
                $res = mysqli_query($con, $sql);

                $count = 0;
                while ($row = mysqli_fetch_assoc($res)) {
                    // print_r($row);
                    $cls_id = $row['class_id'];
                    $cls_name = $row['class_name'];
                    $cls_date_time = $row['class_date_time'];
                    $cls_link = $row['class_link'];
                    $clas_desc = $row['class_desc'];
                    $count++;

                    $cls_date_time = date('Y-m-d h:i A', strtotime($cls_date_time)); // 'h' for 12-hour format, 'i' for minutes, 'A' for AM/PM
                ?>

                    <tr>
                        <td style="width: 60px;"><?=$count?></td>
                        <td style="width: 200px;"><?=$cls_name?></td>
                        <td style="width: 200px;"><?=$cls_date_time?></td>
                        <td style="width: 250px;"><?=$cls_link?></td>
                        <td ><?=$clas_desc?></td>
                        <td style="width: 150px;">
                            <a href="class_edit?id=<?=$cls_id?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="class_delete?id=<?=$cls_id?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>



                <?php
            
                }

                ?>
               
            </tbody>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<!-- Blank End -->
<?php
include('include/footer.php');
?>