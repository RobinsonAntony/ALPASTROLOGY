<?php
include('include/config.php');
include('include/header.php');
$view_id = $_GET['view'];
$view_sql = "SELECT b.desig_name, c.nav_name
             FROM `user_access` as a
             LEFT JOIN `designations` as b ON a.user_desig_id = b.desig_id
             LEFT JOIN `navbar` as c ON a.user_nav = c.nav_id
             WHERE a.user_desig_id = $view_id";
$view_result = mysqli_query($con, $view_sql);
?>

<div class="container-fluid pt-4 px-4">
    <div class="row rounded ">
        <h3 class="text-center">View Access</h3>
        <div class="card mx-auto mt-4" style="width: 50%; background-color: orange;">
            <?php
            if ($view_result == true) {
                $prevDesigName = null;
                while ($view_row = mysqli_fetch_assoc($view_result)) {
                    $currentDesigName = $view_row['desig_name'];
            ?>

                    <?php if ($currentDesigName != $prevDesigName) { ?>
                        <div class="card-body">
                            <h4 class="card-title text-white"><?= $currentDesigName ?> </h4>
                            <hr class="text-white">
                            <h5 class="card-subtitle mb-2 text-muted">Access Details</h5>
                            <ul class="list-group list-group-flush rounded  ">
                    <?php } ?>
                            <li class="list-group-item"><?= $view_row['nav_name'] ?></li>

                    <?php
                    $prevDesigName = $currentDesigName;
                }
                ?>
                            </ul>
                        </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php
include('include/footer.php');
?>
