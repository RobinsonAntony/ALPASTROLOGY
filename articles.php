<?php
include('include/header.php');

?>
<style>
    .card {
        margin: 10px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        height: 360px;
        margin-top: 25px;
        cursor: pointer;
    }

    .img-fluid {
        height: 200px;
    }

    .badge {
        border-radius: 50px;
        margin-bottom: 10px;
    }

    .articletag {
        text-align: center;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 0.6rem 0.6rem;
    }
</style>
<section class="as_breadcrum_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Articles</h1>

                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Articles</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container mt-5 mb-4">
    <h1 class="as_heading text-center"><span style="color:red;">ALP</span> Astrology Articles</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        $sql_art = "SELECT * FROM articles ORDER BY art_id DESC";
        $res_art = mysqli_query($con, $sql_art);

        if ($res_art) {
            $i = 1;
            while ($rows = mysqli_fetch_assoc($res_art)) {
        ?>

            <div class="col-md-3">
                <a href="articles_view.php?art_id=<?= $rows['art_id'] ?>">

                    <div class="card">
                        <img src="./admin/<?= $rows['art_image'] ?>" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <span class="badge bg-primary"><?= $rows['art_title'] ?></span>
                            <h5 class="card-title" style="margin-bottom:10px;font-size:13px;"><?= $rows['art_sub_title'] ?></h5>
                            <p class="card-text" style="font-size:12px;"><?= $rows['art_author'] ?></p>

                        </div>
                    </div>
                </a>
            </div>

        <?php
                $i++;
            }
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<?php
include('include/footer1.php');
?>