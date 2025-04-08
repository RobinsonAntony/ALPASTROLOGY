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
            <a href="reg_class.php" class="btn btn-success m-3">Add Class Registration</a> <!-- Corrected link to add_video.php -->
        </div>
        <table id="example" class="display table table-responsive p-3"> <!-- Added "display" class for DataTables -->
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Batch Date</th>
                    <th>Name</th>
                    <th>Work/Business</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `registration`";
                $res = mysqli_query($con, $sql);

                $count = 0;
                while ($row = mysqli_fetch_assoc($res)) {
                    // print_r($row);
                    $reg_id = $row['reg_ID'];
                    $reg_batchdate = $row['reg_batchdate'];
                    $reg_name = $row['reg_name'];
                    $reg_contactno = $row['reg_contactno'];
                    $reg_workdetails = $row['reg_workdetails'];
                    $image = $row['reg_photo'];
                    $count++;

                    // $cls_date_time = date('Y-m-d h:i A', strtotime($cls_date_time)); // 'h' for 12-hour format, 'i' for minutes, 'A' for AM/PM
                ?>

                    <tr>
                        <td style="width: 60px;"><?=$count?></td>
                        <td style="width: 200px;"><?=$reg_batchdate?></td>
                        <td style="width: 200px;"><?=$reg_name?></td>
                        <td style="width: 250px;"><?=$reg_contactno?></td>
                        <td ><?=$reg_workdetails?></td>
                        <td ><img src="./<?=$image?>" alt"" style="width:100px;height:100px;"></td>
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