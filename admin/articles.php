<?php
include('include/header.php');
include('include/config.php');
ini_set('display_errors', 0);

?>
<style>
    .access input[type="checkbox"]:checked {
        background-color: orangered;
        color: orangered;
    }

    select {
        width: 200px;
        padding: 5px;
    }

    select option:checked {
        background-color: orangered;
        color: white;
    }

    select option:hover {
        background-color: orangered;
        color: black;
    }
</style>


<div class="container-fluid pt-4 px-4">
    <div class="row rounded ">
        <div class="row">
            <div class="col-md-2">

                <a href="add_articles" class="btn btn-success">Article +</a>
            </div>
        </div>
        <hr class="mt-5">
        <div class="row">
            <h3 class="text-center" style="background-color:#ffcc99;">List of Articles</h3>
        </div>
        <div class="row" style="overflow-y:scroll; height:500px;">
            <div class="col-md-12">
                <table id="designation-table" class="display table" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 50px;">S.No</th>
                            <th style="width: 200px;">Title</th>
                            <th style="width: 200px;">Sub Title</th>
                            <th style="width: 200px;">Author</th>
                            <th style="width: 200px;">Article</th>
                            <th style="width: 150px;">Action</th>
                            <th style="width: 150px;">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_desig = "SELECT * FROM `articles`";
                        $desig_result = mysqli_query($con, $sql_desig);

                        if ($desig_result) {
                            $i = 1; // Initialize the counter outside the loop
                            while ($row = mysqli_fetch_assoc($desig_result)) {
                                $art_id  = $row['art_id'];
                        ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $row['art_title'] ?></td>
                                    <td><?= $row['art_sub_title'] ?></td>
                                    <td><?= $row['art_author'] ?></td>
                                    <td><img src="<?= $row['art_image'] ?>" alt="" style="width: 100px;"></td>
                                    <td>
                                        <a href="articles_edit?art_edit=<?= $art_id ?>" class="btn btn-primary">
                                            <i class="fa fa-edit text-white"></i>
                                        </a>
                                        <a href="articles_del?art_del=<?= $art_id ?>" class="btn btn-warning">
                                            <i class="fa fa-trash text-white"></i>
                                        </a>
                                    </td>
                                    <td><a href="view_articles?art_id=<?=$art_id?>" class="btn btn-primary">view</a></td>
                                </tr>
                        <?php
                                $i++; // Increment the counter inside the loop
                            }
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