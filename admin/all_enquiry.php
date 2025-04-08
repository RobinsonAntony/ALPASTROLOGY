<?php
include('include/header.php');
include('include/config.php');
?>
<style>
    .active-tab {
        background-color: black;
        /* Change this color to the desired active tab color */
        color: #fff;
        /* Change this color to the desired text color for the active tab */
    }
</style>
<div class="container-fluid pt-4 px-4">
    <div class="row rounded ">
        <div class="row">

            <div class="col-md-2">
                <button class="btn btn-primary" id="Course_tab">Course</button>
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary" id="Consultation_tab">Consultation</button>
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary" id="Software_tab">Software</button>
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary" id="all_tab">All</button>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>

        </div>
        <br><br><br>
        <hr>
        <div class="row">
            <div class="tab-content" id="all_content">
            </div>
            <div class="tab-content" id="course_content">
                <div class="video">
                    <h2 class="m-3">Enquiry For Course</h2>
                </div>
                <table id="example" class="display table table-responsive p-3"> <!-- Added "display" class for DataTables -->
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <!--<th>Email</th>-->
                            <th>Mobile</th>
                            <th>Course</th>
                            <th>Address</th>
                            <th style="width: 300px;">Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `enquiry_course` WHERE course_type = 'Enquiry' ORDER BY course_id DESC";
                        $res = mysqli_query($con, $sql);

                        $count = 0;
                        while ($row = mysqli_fetch_assoc($res)) {
                            // print_r($row);
                            $enquiry_id = $row['course_id'];
                            $enquiry_user_name = $row['course_user_name'];
                            $enquiry_user_email = $row['course_user_email'];
                            $enquiry_user_mob = $row['course_user_mob'];
                            $enquiry_course = $row['course_name'];
                            $enquiry_user_address = $row['course_user_address'];
                            $course_user_create_dt = $row['course_user_create_dt'];
                            $count++;

                            // $cls_date_time = date('Y-m-d h:i A', strtotime($cls_date_time)); // 'h' for 12-hour format, 'i' for minutes, 'A' for AM/PM
                        ?>

                            <tr>
                                <td style="width: 60px;"><?= $count ?></td>
                                <td style="width: 200px;"><?= $enquiry_user_name ?></td>
                                <!--<td style="width: 200px;"><?= $enquiry_user_email ?></td>-->
                                <td style="width: 250px;"><?= $enquiry_user_mob ?></td>
                                <td style="width: 250px;"><?= $enquiry_course ?></td>
                                <td style="width: 250px;"><?= $enquiry_user_address ?></td>
                                <td style="width: 300px;"><?= date('d-m-Y',strtotime($course_user_create_dt)) ?></td>
                                <td style="width: 150px;">
                                    <a href="course_delete?id=<?= $enquiry_id ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                     <input type="checkbox" class="viewed-checkbox_course" data-id="<?= $enquiry_id ?>" 
                                                <?= $row['is_viewed'] ? 'checked disabled' : '' ?> />
                                </td>
                            </tr>



                        <?php

                        }

                        ?>

                    </tbody>
                </table>
            </div>
            <div class="tab-content" id="consultation_content">
                <div class="video">
                    <h2 class="m-3">Consultations</h2>
                </div>
                <table id="example" class="display table table-responsive p-3"> <!-- Added "display" class for DataTables -->
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <!--<th>Email</th>-->
                            <th>Mobile</th>
                            <th>Prefered Date & Time</th>
                            <th>Services</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `appointment` ORDER BY apt_id DESC";
                        $res = mysqli_query($con, $sql);

                        $count = 0;
                        while ($row = mysqli_fetch_assoc($res)) {
                            // print_r($row);
                            $apt_id = $row['apt_id'];
                            $apt_user_name = $row['apt_user_name'];
                            $apt_user_email = $row['apt_user_email'];
                            $apt_user_mobile = $row['apt_user_mobile'];
                            $apt_user_address = $row['apt_user_address'];
                            $apt_date = $row['apt_date'];
                            $apt_time = date("h:i A", strtotime($row['apt_time']));
                            $apt_services = $row['apt_services'];
                            $apt_created_dt = $row['apt_created_dt'];
                            $count++;

                            // $cls_date_time = date('Y-m-d h:i A', strtotime($cls_date_time)); // 'h' for 12-hour format, 'i' for minutes, 'A' for AM/PM
                        ?>

                            <tr>
                                <td style="width: 60px;"><?= $count ?></td>
                                <td style="width: 150px;"><?= $apt_user_name ?></td>
                                <!--<td style="width: 200px;"><?= $apt_user_email ?></td>-->
                                <td style="width: 200px;"><?= $apt_user_mobile ?></td>
                                <td style="width: 250px;"><?= $apt_date ?> <?= $apt_time ?></td>
                                <td style="width: 250px;"><?= $apt_services ?></td>
                                <td style="width: 250px;"><?= $apt_user_address ?></td>
                                <td style="width: 250px;"><?= date('d-m-Y',strtotime($apt_created_dt)) ?></td>
                                <td style="width: 150px;">
                                    <a href="appointment_delete?id=<?= $apt_id ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                      <input type="checkbox" class="viewed-checkbox" data-id="<?= $apt_id ?>" 
                                                <?= $row['is_viewed'] ? 'checked disabled' : '' ?> />
                                </td>
                            </tr>



                        <?php

                        }

                        ?>

                    </tbody>
                </table>
            </div>
            <div class="tab-content" id="software_content">
                <div class="video">
                    <h2 class="m-3">Enquiry Software</h2>
                </div>
                <table id="example" class="display table table-responsive p-3"> <!-- Added "display" class for DataTables -->
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <!--<th>Email</th>-->
                            <th>Mobile</th>
                            <th>Course</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `enquiry_software` WHERE soft_type ='Enquiry' ORDER BY soft_id DESC";
                        $res = mysqli_query($con, $sql);

                        $count = 0;
                        while ($row = mysqli_fetch_assoc($res)) {
                            // print_r($row);
                            $enquiry_soft_id  = $row['soft_id'];
                            $enquiry_user_name = $row['soft_user_name'];
                            $enquiry_user_mob     = $row['soft_user_mob'];
                            $enquiry_user_email = $row['soft_user_email'];
                            $enquiry_user_address = $row['soft_user_address'];
                            $enquiry_software = $row['software_name'];
                            $soft_create_dt = $row['soft_create_dt'];
                            $count++;

                            // $cls_date_time = date('Y-m-d h:i A', strtotime($cls_date_time)); // 'h' for 12-hour format, 'i' for minutes, 'A' for AM/PM
                        ?>

                            <tr>
                                <td style="width: 60px;"><?= $count ?></td>
                                <td style="width: 200px;"><?= $enquiry_user_name ?></td>
                                <!--<td style="width: 200px;"><?= $enquiry_user_email ?></td>-->
                                <td style="width: 250px;"><?= $enquiry_user_mob ?></td>
                                <td style="width: 250px;"><?= $enquiry_software ?></td>
                                <td style="width: 250px;"><?= $enquiry_user_address ?></td>
                                <td style="width: 250px;"><?= date('d-m-Y',strtotime($soft_create_dt)) ?></td>
                                <td style="width: 150px;">
                                    <a href="software_delete?id=<?= $enquiry_soft_id ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                     <input type="checkbox" class="viewed-checkbox_software" data-id="<?= $enquiry_soft_id ?>" 
                                                <?= $row['is_viewed'] ? 'checked disabled' : '' ?> />
                                </td>
                            </tr>



                        <?php

                        }

                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php
include('include/footer.php');
?>
<script>
    $(document).ready(function() {
        // Hide other tab contents initially
        // $("#all_tab").hide();
        // $("#Course_tab").hide();
        // $("#Consultation_tab").hide();
        // $("#Software_tab").hide();

        // Show the default tab content
        $("#all_content").hide();
        $("#course_content").show();
        $("#consultation_content").hide();
        $("#software_content").hide();

        // Add click event listeners to the tabs
        $("#all_tab").click(function() {
            $("#course_content").hide();
            $("#consultation_content").hide();
            $("#software_content").hide();
            $("#all_content").show();
        });

        $("#Course_tab").click(function() {
            $("#all_content").hide();
            $("#consultation_content").hide();
            $("#software_content").hide();
            $("#course_content").show();
        });

        $("#Consultation_tab").click(function() {
            $("#all_content").hide();
            $("#course_content").hide();
            $("#software_content").hide();
            $("#consultation_content").show();
        });

        $("#Software_tab").click(function() {
            $("#all_content").hide();
            $("#course_content").hide();
            $("#consultation_content").hide();
            $("#software_content").show();
        });
    });
</script>
<script>
    // Get the tab buttons
    var allTab = document.getElementById('all_tab');
    var courseTab = document.getElementById('Course_tab');
    var consultationTab = document.getElementById('Consultation_tab');
    var softwareTab = document.getElementById('Software_tab');

    // Add click event listeners to the buttons
    allTab.addEventListener('click', function() {
        setActiveTab(allTab, 'all_content');
    });

    courseTab.addEventListener('click', function() {
        setActiveTab(courseTab, 'course_content');
    });

    consultationTab.addEventListener('click', function() {
        setActiveTab(consultationTab, 'consultation_content');
    });

    softwareTab.addEventListener('click', function() {
        setActiveTab(softwareTab, 'software_content');
    });

    // Function to set the active tab
    function setActiveTab(tab) {
        // Remove 'active-tab' class from all tabs
        allTab.classList.remove('active-tab');
        courseTab.classList.remove('active-tab');
        consultationTab.classList.remove('active-tab');
        softwareTab.classList.remove('active-tab');

        // Add 'active-tab' class to the clicked tab
        tab.classList.add('active-tab');

        // Hide other content types
        document.getElementById('all_content').style.display = 'none';
        document.getElementById('course_content').style.display = 'none';
        document.getElementById('consultation_content').style.display = 'none';
        document.getElementById('software_content').style.display = 'none';

        // Show the corresponding content
        document.getElementById(contentId).style.display = 'block';
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $(".viewed-checkbox").on("change", function() {
        var apt_id = $(this).data("id");
        var isChecked = $(this).is(":checked") ? 1 : 0;
        
        if (confirm("Are you sure you want to mark this as viewed?")) {
            $.ajax({
                url: "update_viewed_status.php",
                type: "POST",
                data: { apt_id: apt_id, is_viewed: isChecked },
                success: function(response) {
                    alert(response);
                    //   window.location.reload(true); // Force full page reload
                },
                error: function() {
                    alert("Something went wrong! Try again.");
                }
            });
        } else {
            $(this).prop("checked", !isChecked); // Revert the change if canceled
        }
    });
    $(".viewed-checkbox_course").on("change", function() {
        var apt_id = $(this).data("id");
        var isChecked = $(this).is(":checked") ? 1 : 0;
        
        if (confirm("Are you sure you want to mark this as viewed?")) {
            $.ajax({
                url: "update_viewed_status_course.php",
                type: "POST",
                data: { apt_id: apt_id, is_viewed: isChecked },
                success: function(response) {
                    alert(response);
                    //  window.location.reload(true); // Force full page reload
                },
                error: function() {
                    alert("Something went wrong! Try again.");
                }
            });
        } else {
            $(this).prop("checked", !isChecked); // Revert the change if canceled
        }
    });
    $(".viewed-checkbox_software").on("change", function() {
        var apt_id = $(this).data("id");
        var isChecked = $(this).is(":checked") ? 1 : 0;
        
        if (confirm("Are you sure you want to mark this as viewed?")) {
            $.ajax({
                url: "update_viewed_status_software.php",
                type: "POST",
                data: { apt_id: apt_id, is_viewed: isChecked },
                success: function(response) {
                    alert(response);
                    //   window.location.reload(true); // Force full page reload
                },
                error: function() {
                    alert("Something went wrong! Try again.");
                }
            });
        } else {
            $(this).prop("checked", !isChecked); // Revert the change if canceled
        }
    });
});
</script>