<!DOCTYPE html>
<html lang="en">
<?php
include('include/config.php');
session_start();
if (!isset($_SESSION['admin_name'])) {
    header("Location: login.php");
    exit;
}
$admin_type = $_SESSION['admin_type'];
$admin_id = $_SESSION['admin_id'];
$sql_admin = "SELECT * FROM `admin` WHERE admin_id = $admin_id";
$admin_res = mysqli_query($con, $sql_admin);
$admin_row = mysqli_fetch_assoc($admin_res);
$admin_online = $admin_row['admin_live_status'];
?>

<head>
    <meta charset="utf-8">
    <title>ALP-Admin panel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

</head>
<style>
    .sidebar .navbar .navbar-nav .nav-link {
        padding: 7px 11px !important;
    }

    .alp {
        font-size: 34px;
        -webkit-text-stroke-width: 0.5px;
        -webkit-text-stroke-color: red;
        -webkit-text-fill-color: orange;
        text-shadow: 5px 5px 10px gray;
    }
</style>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-white ">
                <!-- <a href="#" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-warning alp"><b>ALP Astrology</b></h3>
                </a> -->
                <div class="align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle ms-3" src="img/logo.png" alt="" style="width: 130px; height: 130px;">
                        <!-- <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div> -->
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-center"><?php echo $_SESSION['admin_name'] ?> </h6>
                        <span class="ms-4">[<?= $_SESSION['admin_type'] ?>] <a href="logout"><i class="fas fa-sign-out-alt text-secondary"></i></a></span>
                    </div>
                </div>
                <!-- ... (previous code) ... -->

                <div class="navbar-nav w-100">
                    <?php
                    if ($_SESSION['admin_type'] == 'admin') {
                        $sql = "SELECT * FROM `navbar` where nav_Status=0";
                        $res = mysqli_query($con, $sql);

                        if ($res) {
                            while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                                <a href="<?= $row['nav_link'] ?>" class="nav-item nav-link"><i class="<?= $row['nav_icon'] ?> me-2"></i><?= $row['nav_name'] ?></a>
                            <?php
                            }
                        }
                    } else {
                        $sql2 = "SELECT * FROM `designations` AS a 
                                LEFT JOIN `user_access` AS b ON a.desig_id = b.user_desig_id 
                                LEFT JOIN `navbar` AS c ON b.user_nav = c.nav_id 
                                WHERE a.desig_name = '$admin_type' and c.nav_Status=0";
                        $res2 = mysqli_query($con, $sql2);

                        if ($res2) {
                            while ($row2 = mysqli_fetch_assoc($res2)) {
                            ?>
                                <a href="<?= $row2['nav_link'] ?>" class="nav-item nav-link"><i class="<?= $row2['nav_icon'] ?> me-2"></i><?= $row2['nav_name'] ?></a>
                    <?php
                            }
                        }
                    }
                    ?>

                    <a href="logout" class="nav-item nav-link"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
                </div>

                <!-- ... (remaining code) ... -->

            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand   sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class=" mb-0" style="color: orange;"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0" style="color: orange;">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/logo.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['admin_name'] ?> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end  border-0 rounded-0 rounded-bottom m-0">

                            <a href="logout" class="dropdown-item">Logout<i class="fas fa-sign-out-alt text-dark"></i></a>
                        </div>
                    </div>

                </div>


            </nav>
            <div class="nav_online ms-4">
                <?php
                $statusButtonClass = ($admin_online == 0) ? 'btn btn-success status' : 'btn btn-danger status';
                $statusButtonText = ($admin_online == 0) ? 'Online' : 'Offline';

                echo '<button class="' . $statusButtonClass . '" data-profile-id="' . $admin_id . '">' . $statusButtonText . '</button>';
                ?>
            </div>
            <!-- Navbar End -->
            <script>
                // Get the current page URL
                var currentUrl = window.location.href;

                // Get all the anchor tags in the menu
                var menuLinks = document.querySelectorAll('.navbar-nav a');

                // Loop through each link and check if it matches the current page URL
                for (var i = 0; i < menuLinks.length; i++) {
                    var link = menuLinks[i].getAttribute('href');

                    // Compare the link with the current URL
                    if (currentUrl.indexOf(link) !== -1) {
                        // Add a class to mark the link as active
                        menuLinks[i].classList.add('active');
                        break; // Exit the loop once a match is found
                    }
                }
            </script>
            <script>
                $(document).ready(function() {
                    // Handle status change button click
                    $(document).on('click', 'button.status', function() {
                        var button = $(this);
                        var profileId = button.data('profile-id');
                        var profileStatus = (button.hasClass('btn-success')) ? 1 : 0;

                        // Display confirmation dialog using SweetAlert
                        Swal.fire({
                            title: 'Confirmation',
                            text: 'Are you sure you want to change the status?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Yes',
                            cancelButtonText: 'No'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Send AJAX request to update profile status
                                $.ajax({
                                    url: 'update_admin_status.php',
                                    method: 'POST',
                                    data: {
                                        profileId: profileId,
                                        profileStatus: profileStatus
                                    },
                                    success: function(response) {
                                        // Update button style and text
                                        if (profileStatus === 0) {
                                            button.removeClass('btn-danger').addClass('btn-success').text('online');
                                        } else {
                                            button.removeClass('btn-success').addClass('btn-danger').text('Offline');
                                        }
                                        // Show success message
                                        Swal.fire({
                                            title: 'Success',
                                            text: response,
                                            icon: 'success',
                                            showConfirmButton: false,
                                            timer: 800
                                        });
                                    },
                                    error: function(xhr, status, error) {
                                        console.error(error);
                                    }
                                });
                            }
                        });
                    });
                });
            </script>