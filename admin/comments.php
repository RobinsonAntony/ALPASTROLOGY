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
            <h2 class="m-3" style="background-color:#ffcc99;" align="center">Comments</h2>
        </div>
        <table id="example" class="display table table-responsive p-3"> <!-- Added "display" class for DataTables -->
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `comments` ORDER BY cmt_id DESC";
                $res = mysqli_query($con, $sql);

                $count = 0;
                while ($row = mysqli_fetch_assoc($res)) {
                    // print_r($row);
                    $cmt_id  = $row['cmt_id'];
                    $cmt_usr_name = $row['cmt_usr_name'];
                    $cmt_usr_email = $row['cmt_usr_email'];
                    $cmt_usr_msg = $row['cmt_usr_msg'];
                    
                    $count++;

                    // $cls_date_time = date('Y-m-d h:i A', strtotime($cls_date_time)); // 'h' for 12-hour format, 'i' for minutes, 'A' for AM/PM
                ?>

                    <tr>
                        <td style="width: 60px;"><?=$count?></td>
                        <td style="width: 150px;"><?=$cmt_usr_name?></td>
                        <td style="width: 200px;"><?=$cmt_usr_email?></td>
                        <td style="width: 200px;"><?=$cmt_usr_msg?></td>
                        <td style="width: 150px;">
                            <a href="comments_delete?id=<?=$cmt_id?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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