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
            <h2 class="m-3">Apply For Course</h2>
        </div>
        <table id="example" class="display table table-responsive p-3"> <!-- Added "display" class for DataTables -->
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Course</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `enquiry_course` WHERE course_type = 'Apply'";
                $res = mysqli_query($con, $sql);

                $count = 0;
                while ($row = mysqli_fetch_assoc($res)) {
                    // print_r($row);
                    $apply_id = $row['course_id'];
                    $apply_user_name = $row['course_user_name'];
                    $apply_user_email = $row['course_user_email'];
                    $apply_user_mob = $row['course_user_mob'];
                    $apply_course = $row['course_name'];
                    $apply_user_address = $row['course_user_address'];
                    $count++;

                    // $cls_date_time = date('Y-m-d h:i A', strtotime($cls_date_time)); // 'h' for 12-hour format, 'i' for minutes, 'A' for AM/PM
                ?>

                    <tr>
                        <td style="width: 60px;"><?=$count?></td>
                        <td style="width: 200px;"><?=$apply_user_name?></td>
                        <td style="width: 200px;"><?=$apply_user_email?></td>
                        <td style="width: 250px;"><?=$apply_user_mob?></td>
                        <td style="width: 250px;"><?=$apply_course?></td>
                        <td style="width: 250px;"><?=$apply_user_address?></td>
                        <!-- <td ><?=$clas_desc?></td> -->
                        <!-- <td style="width: 150px;">
                            <a href="class_edit?id=<?=$cls_id?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="class_delete?id=<?=$cls_id?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td> -->
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