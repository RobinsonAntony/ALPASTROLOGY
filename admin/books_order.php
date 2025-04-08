<?php
include('include/header.php');
include('include/config.php');
?>
<!-- Include DataTables CSS and JS files -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row  rounded mx-0" style="overflow-y:scroll; height:600px;">
        <div class="video">
            <h2 class="m-3" style="background-color:#ffcc99;" align="center">Books Order</h2>
        </div>
        <table id="example" class="display table table-responsive p-3"> <!-- Added "display" class for DataTables -->
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Books</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `books_enquiry` WHERE book_type = 'Order' ORDER BY book_enq_id DESC";
                $res = mysqli_query($con, $sql);

                $count = 0;
                while ($row = mysqli_fetch_assoc($res)) {
                    // print_r($row);
                    $book_enq_id = $row['book_enq_id'];
                    $book_enq_name = $row['book_enq_name'];
                    $book_enq_email = $row['book_enq_email'];
                    $book_enq_mobile = $row['book_enq_mobile'];
                    $book_enq_address = $row['book_enq_address'];
                    $book_enq_books = $row['book_enq_books'];
                    $book_enq_create_dt=$row['book_enq_create_dt'];
                    $count++;

                    // $cls_date_time = date('Y-m-d h:i A', strtotime($cls_date_time)); // 'h' for 12-hour format, 'i' for minutes, 'A' for AM/PM
                ?>

                    <tr>
                        <td style="width: 60px;"><?=$count?></td>
                        <td style="width: 200px;"><?=$book_enq_name?></td>
                        <td style="width: 200px;"><?=$book_enq_email?></td>
                        <td style="width: 250px;"><?=$book_enq_mobile?></td>
                        <td style="width: 250px;"><?=$book_enq_books?></td>
                        <td style="width: 250px;"><?=$book_enq_address?></td>
                         <td style="width: 250px;"><?=date('d-m-Y',strtotime($book_enq_create_dt))  ?></td>
                        <td style="width: 150px;">
                            <a href="OrderBooks_delete?id=<?=$book_enq_id?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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