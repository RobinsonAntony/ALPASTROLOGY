<?php
include('include/header.php');
include('include/config.php');
$login_id = $_SESSION['admin_id'];

?>
<!-- Include DataTables CSS and JS files -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row  rounded mx-0"  >
        <div class="video" style="background-color:#ffcc99;" align="center">
            <h2 class="m-3" >Consultations</h2>
        </div>
        <table id="example" class="display table table-responsive p-3" style="overflow-y:scroll; height:500px;"> <!-- Added "display" class for DataTables -->
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Services</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `appointment` as a LEFT JOIN `appt_asign` as b ON a.apt_id = b.apt_for_id ORDER BY apt_id DESC";
                // $sql = "SELECT * FROM `appointment` as a LEFT JOIN `appt_asign` as b ON a.apt_id = b.apt_for_id WHERE FIND_IN_SET('$login_id', asign_id) ORDER BY apt_id DESC";
                $res = mysqli_query($con, $sql);
                $count = 0;
                while ($row = mysqli_fetch_assoc($res)) {
                    // print_r($row);
                    $apt_id = $row['apt_id'];
                    $apt_user_name = $row['apt_user_name'];
                    $apt_user_email = $row['apt_user_email'];
                    $apt_user_mobile = $row['apt_user_mobile'];
                    $apt_user_address = $row['apt_user_address'];
                    $apt_date = date("d-m-Y", strtotime($row['apt_date']));
                    $apt_time = date("h:i A", strtotime($row['apt_time']));
                    $apt_services = $row['apt_services'];
                    $count++;

                    // $cls_date_time = date('Y-m-d h:i A', strtotime($cls_date_time)); // 'h' for 12-hour format, 'i' for minutes, 'A' for AM/PM
                ?>

                    <tr>
                        <td style="width: 60px;"><?=$count?></td>
                        <td style="width: 200px;"><?=$apt_user_name?></td>
                        <td style="width: 200px;"><?=$apt_user_email?></td>
                        <td style="width: 250px;"><?=$apt_user_mobile?></td>
                        <td style="width: 250px;"><?=$apt_user_address?></td>
                        <td style="width: 250px;"><?=$apt_date?></td>
                        <td style="width: 250px;"><?=$apt_time?></td>
                        <td style="width: 250px;"><?=$apt_services?></td>
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