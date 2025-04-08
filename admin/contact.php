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
            <h2 class="m-3" style="background-color:#ffcc99;">General Enquiries</h2>
        </div>
        <table id="example" class="display table table-responsive p-3"> <!-- Added "display" class for DataTables -->
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>  
                    <th>Subject</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `contact` ORDER BY cont_id  DESC";
                $res = mysqli_query($con, $sql);

                $count = 0;
                while ($row = mysqli_fetch_assoc($res)) {
                    // print_r($row);
                    $cont_id  = $row['cont_id'];
                    $cont_username = $row['cont_username'];
                    $cont_mobile = $row['cont_mobile'];
                    $cont_email = $row['cont_email'];
                    $cont_subject = $row['cont_subject'];
                    $cont_message = $row['cont_message'];
                    $count++;

                    // $cls_date_time = date('Y-m-d h:i A', strtotime($cls_date_time)); // 'h' for 12-hour format, 'i' for minutes, 'A' for AM/PM
                ?>

                    <tr>
                        <td style="width: 60px;"><?=$count?></td>
                        <td style="width: 150px;"><?=$cont_username?></td>
                        <td style="width: 200px;"><?=$cont_mobile?></td>
                        <td style="width: 200px;"><?=$cont_email?></td>
                        <td style="width: 250px;"><?=$cont_message?></td>
                        <td style="width: 250px;"><?=$cont_subject?></td>
                        <td style="width: 150px;">
                            <a href="contact_delete?id=<?=$cont_id?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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