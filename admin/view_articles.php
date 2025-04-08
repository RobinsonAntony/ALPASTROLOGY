<?php
include('include/header.php');
include('include/config.php');
ini_set('display_errors', 0);
$art_id = $_GET['art_id'];

$sql = "SELECT * FROM articles WHERE art_id = $art_id";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($res);

?>

<style>
    table {
        width: 600px;
        margin: auto;
    }

    table,
    tr,
    th,
    td {
        border: 1px solid black;
    }

    p {
        text-indent: 100px;
        text-align: justify;
    }
</style>
<style>
    .ending_img {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 70vw;
    }
</style>
<div class="container-fluid pt-4 px-4">
    <div class="row rounded ">
        <div class="head">
            <h2 class="text-center"><?= $row['art_title'] ?></h2>
        </div>
        <div class="head">
            <h5 class="text-center"><?= $row['art_sub_title'] ?></h5>
        </div>
        <div class="head">
            <h5 class="text-center"><?= $row['art_author'] ?></h5>
        </div>
    </div>
    <div class="art_index_table">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">நிகழ்வு</th>
                    <th scope="col">தலைப்பு </th>
            </thead>
            <tbody>
                <?php
                $sql_art = "SELECT art_heading_name FROM article_content_table WHERE art_for_id = $art_id";
                $res_art = mysqli_query($con, $sql_art);

                if ($res_art) {
                    $i = 1;
                    while ($rows = mysqli_fetch_assoc($res_art)) {
                ?>

                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $rows['art_heading_name'] ?></td>
                        </tr>

                <?php
                        $i++;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="intro">
        <h4 class="text-center">முன்னுரை</h4>
        <p style="text-indent: 100px;text-align:justify;"><?= $row['art_intro'] ?></p>
    </div>

    <div class="row article body">
        <?php
        $sql_art = "SELECT * FROM article_content_table WHERE art_for_id = $art_id";
        $res_art = mysqli_query($con, $sql_art);

        if ($res_art) {

            while ($rows = mysqli_fetch_assoc($res_art)) {

        ?>
                <div class="article_head">
                    <h4><?= $rows['art_heading_name'] ?></h4>
                </div>
                <div class="article_body">
                    <p><?= $rows['art_body_contents'] ?></p>
                </div>


        <?php

            }
        }

        ?>
    </div>
    <div class="conclusion">
        <h4 class="text-center">முடிவுரை</h4>
        <p style="text-indent: 100px;text-align:justify;"><?= $row['art_conclusion'] ?></p>
    </div>
    <div class="thanks">
        <p class="text-center">என்றென்றும் நன்றியுடன்....</p><br>
        <p class="text-end">ALP ஜோதிடர் & <br>
            ALP ஜோதிட ஆசிரியர்<br>
            என்ற பெருமையுடன்<br>
            <span class="text-dark"><b><?= $row['art_author'] ?></b></span>
        </p>
    </div>

    <div class="ending_img">
        <img src="./img/—Pngtree—end page design_8510473.png" alt="" style="width: 200px; height: 130px;">
    </div>
    <hr>
</div>
<?php
include('include/footer.php');
?>