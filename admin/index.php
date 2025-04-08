   <?php
    include('include/header.php');
    include('include/config.php');

    ?>
   <?php
    // // Total Earn
    // $TotalEarn = "SELECT SUM(`amount`) AS total_earn FROM `order_payments`";
    // $TotalEarn_result = mysqli_query($con, $TotalEarn);
    // $rowTotalEarn = mysqli_fetch_assoc($TotalEarn_result);
    // $totalEarn = $rowTotalEarn['total_earn'];

    // // Today Earn

    // $date = date('d');
    // $month = date('m');
    // $year = date('Y');

    // $TodayDate =$year.'-' .$month.'-'.$date;
    // $TodayEarn = "SELECT SUM(amount) AS today_earn
    // FROM order_payments
    // WHERE DATE(created_dt) = '$TodayDate'";
    // $TodayEarn_result = mysqli_query($con, $TodayEarn);
    // $rowTodayEarn = mysqli_fetch_assoc($TodayEarn_result);
    // $todayEarn = $rowTodayEarn['today_earn'];

    // astrologers
    $TotalUser = "SELECT COUNT(*) AS astrologers FROM `users` as a LEFT JOIN `designations` as b ON a.user_desig=b.desig_id  WHERE b.desig_name = 'Astrologer'";
    $TotalUsers_result = mysqli_query($con, $TotalUser);
    $rowTotalUsers = mysqli_fetch_assoc($TotalUsers_result);
    $totalUsers = $rowTotalUsers['astrologers'];

    // // enquiry_course
    $enquiry = "SELECT COUNT(*) AS enquiry_course FROM `enquiry_course` WHERE course_type = 'Enquiry'";
    $enquiry_result = mysqli_query($con, $enquiry);
    $rowenquiry_course = mysqli_fetch_assoc($enquiry_result);
    $enquiry_course = $rowenquiry_course['enquiry_course'];

    // // consultations
    $booksOrder = "SELECT COUNT(*) AS consultations FROM `appointment`";
    $booksOrders_result = mysqli_query($con, $booksOrder);
    $rowbooksOrders = mysqli_fetch_assoc($booksOrders_result);
    $booksOrders = $rowbooksOrders['consultations'];

    // // Total Order
    $book_enquiry = "SELECT COUNT(*) AS book_enquiry FROM `books_enquiry` WHERE book_type='Enquiry'";
    $book_enquiry_result = mysqli_query($con, $book_enquiry);
    $rowbook_enquirys = mysqli_fetch_assoc($book_enquiry_result);
    $book_enquirys = $rowbook_enquirys['book_enquiry'];

    // // Today Order
    $total_soft = "SELECT COUNT(*) AS enq_soft FROM `enquiry_software`";
    $total_soft_result = mysqli_query($con, $total_soft);
    $rowtotal_softs = mysqli_fetch_assoc($total_soft_result);
    $total_softs = $rowtotal_softs['enq_soft'];
    
     // // Tamil Class
    $total_register = "SELECT COUNT(*) AS reg_id FROM `registration` where reg_classmedium='Tamil'";
    $total_reg_result = mysqli_query($con, $total_register);
    $rowtotal_regs = mysqli_fetch_assoc($total_reg_result);
    $total_reg = $rowtotal_regs['reg_id'];
    
    
     // // Tamil Class
    $total_eregister = "SELECT COUNT(*) AS reg_id FROM `registration` where reg_classmedium='English'";
    $total_ereg_result = mysqli_query($con, $total_eregister);
    $rowtotal_eregs = mysqli_fetch_assoc($total_ereg_result);
    $total_ereg = $rowtotal_eregs['reg_id'];

    // // Total Return Order
    // $Totalreturn = "SELECT COUNT(*) AS total_returns FROM `tbl_mst_order_return_details`";
    // $Totalreturn_result = mysqli_query($con, $Totalreturn);
    // $rowTotalreturns = mysqli_fetch_assoc($Totalreturn_result);
    // $totalreturns = $rowTotalreturns['total_returns'];

    // // Today Return Order
    // $Todayreturn = "SELECT COUNT(*) AS today_returns FROM `tbl_mst_order_return_details` WHERE DATE(`return_order_created`)='$TodayDate'";
    // $Todayreturn_result = mysqli_query($con, $Todayreturn);
    // $rowTodayreturns = mysqli_fetch_assoc($Todayreturn_result);
    // $todayreturns = $rowTodayreturns['today_returns'];

    // // Total Cancel Order
    // $Totalcancel = "SELECT COUNT(*) AS total_cancels FROM `tbl_mst_order_cancelled_details`";
    // $Totalcancel_result = mysqli_query($con, $Totalcancel);
    // $rowTotalcancels = mysqli_fetch_assoc($Totalcancel_result);
    // $totalcancels = $rowTotalcancels['total_cancels'];

    // // Today Cancel Orders
    // $Todaycancel = "SELECT COUNT(*) AS today_cancels FROM `tbl_mst_order_cancelled_details` WHERE DATE(`can_order_created`)='$TodayDate'";
    // $Todaycancel_result = mysqli_query($con, $Todaycancel);
    // $rowTodaycancels = mysqli_fetch_assoc($Todaycancel_result);
    // $todaycancels = $rowTodaycancels['today_cancels'];
    ?>

   <!-- Blank Start -->
   <div style="overflow-y:scroll; height:600px;">
   <div class="container-fluid pt-4 px-4">
       <div class="row bg-light rounded align-items-center  mx-0">
           <div class="col-md-12 text-center">
               <div class="row my-5 mx-auto">
                   <div class="col-lg-2 mx-auto py-3 bg-warning rounded ">
                       <div class="circle-tile">
                           <a href="display_profile.php">
                               <div class="circle-tile-heading ">
                                   <i class="fa-solid fa-money-bill fa-fw fa-3x text-white"></i>
                               </div>
                           </a>
                           <div class="circle-tile-content text-white">
                               <div class="circle-tile-description ">
                                   Total Astrologers
                               </div>
                               <div class="circle-tile-number fs-3 fw-bold">
                                   <?php
                                    echo $totalUsers;
                                    ?>
                               </div>
                               <a href="users" class="circle-tile-footer text-white">More Info <i class="fa fa-chevron-circle-right"></i></a>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-2 mx-auto py-3 bg-warning rounded ">
                       <div class="circle-tile">
                           <a href="display_profile.php">
                               <div class="circle-tile-heading ">
                                   <i class="fa-solid fa-money-bill fa-fw fa-3x text-white"></i>
                               </div>
                           </a>
                           <div class="circle-tile-content text-white">
                               <div class="circle-tile-description ">
                                   Total Enquiry Course
                               </div>
                               <div class="circle-tile-number fs-3 fw-bold">
                                   <?php
                                    echo $enquiry_course;
                                    ?>
                               </div>
                               <a href="all_enquiry" class="circle-tile-footer text-white">More Info <i class="fa fa-chevron-circle-right"></i></a>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-2 mx-auto py-3 bg-warning rounded ">
                       <div class="circle-tile">
                           <a href="display_profile.php">
                               <div class="circle-tile-heading ">
                                   <i class="fa-solid fa-money-bill fa-fw fa-3x text-white"></i>
                               </div>
                           </a>
                           <div class="circle-tile-content text-white">
                               <div class="circle-tile-description ">
                                   Total Consultations
                               </div>
                               <div class="circle-tile-number fs-3 fw-bold">
                                   <?php
                                    echo $booksOrders;
                                    ?>
                               </div>
                               <a href="all_enquiry" class="circle-tile-footer text-white">More Info <i class="fa fa-chevron-circle-right"></i></a>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-2 mx-auto py-3 bg-warning rounded ">
                       <div class="circle-tile">
                           <a href="display_profile.php">
                               <div class="circle-tile-heading ">
                                   <i class="fa-solid fa-money-bill fa-fw fa-3x text-white"></i>
                               </div>
                           </a>
                           <div class="circle-tile-content text-white">
                               <div class="circle-tile-description ">
                                   Total Enquiry Books
                               </div>
                               <div class="circle-tile-number fs-3 fw-bold">
                                   <?php
                                    echo $book_enquirys     ;
                                    ?>
                               </div>
                               <a href="books_order" class="circle-tile-footer text-white">More Info <i class="fa fa-chevron-circle-right"></i></a>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-2 mx-auto py-3 bg-warning rounded ">
                       <div class="circle-tile">
                           <a href="display_profile.php">
                               <div class="circle-tile-heading ">
                                   <i class="fa-solid fa-money-bill fa-fw fa-3x text-white"></i>
                               </div>
                           </a>
                           <div class="circle-tile-content text-white">
                               <div class="circle-tile-description ">
                                   Total Enquiry Software
                               </div>
                               <div class="circle-tile-number fs-3 fw-bold">
                                   <?php
                                    echo $total_softs;
                                    ?>
                               </div>
                               <a href="all_enquiry" class="circle-tile-footer text-white">More Info <i class="fa fa-chevron-circle-right"></i></a>
                           </div>
                       </div>
                   </div>
                   
               </div>
           </div>
       </div>
       <div class="container-fluid pt-4 px-4">
       <div class="row bg-light rounded align-items-center  mx-0">
           <div class="col-md-12 text-center">
               <div class="row my-5 mx-auto">
                   
                   <div class="col-lg-2 mx-auto py-3 bg-warning rounded ">
                       <div class="circle-tile">
                           <a href="display_profile.php">
                               <div class="circle-tile-heading ">
                                   <i class="fa-solid fa-money-bill fa-fw fa-3x text-white"></i>
                               </div>
                           </a>
                           <div class="circle-tile-content text-white">
                               <div class="circle-tile-description ">
                                   Tamil Class Registration
                               </div>
                               <div class="circle-tile-number fs-3 fw-bold">
                                   <?php
                                    echo $total_reg;
                                    ?>
                               </div>
                               <a href="registration" class="circle-tile-footer text-white">More Info <i class="fa fa-chevron-circle-right"></i></a>
                           </div>
                       </div>
                   </div>
                   
                   <div class="col-lg-2 mx-auto py-3 bg-warning rounded ">
                       <div class="circle-tile">
                           <a href="display_profile.php">
                               <div class="circle-tile-heading ">
                                   <i class="fa-solid fa-money-bill fa-fw fa-3x text-white"></i>
                               </div>
                           </a>
                           <div class="circle-tile-content text-white">
                               <div class="circle-tile-description ">
                                   English Class Registration
                               </div>
                               <div class="circle-tile-number fs-3 fw-bold">
                                   <?php
                                    echo $total_ereg;
                                    ?>
                               </div>
                               <a href="registration" class="circle-tile-footer text-white">More Info <i class="fa fa-chevron-circle-right"></i></a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       </div>
       <!-- Blank End -->


       <?php
        include('include/footer.php')

        ?>