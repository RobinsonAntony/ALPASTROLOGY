<?php
include('include/header.php');
include('include/config.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  .highlight {
    padding-bottom: 16px;
  }

  .highlight-thumb {
    position: relative;
    overflow: hidden;
    margin-top: 24px;
    margin-bottom: 24px;
  }

  .highlight-thumb::after {
    content: "";
    background: rgba(0, 0, 0, 0.45);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
  }

  .highlight-thumb:hover .highlight-title {
    opacity: 0;
    visibility: hidden;
  }

  .highlight-thumb:hover .highlight-icon {
    opacity: 1;
    visibility: visible;
    color: red;
  }

  .highlight-thumb:hover .highlight-image {
    transform: scale(1.2);
  }

  .highlight-info {
    position: absolute;
    z-index: 2;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    text-align: center;
  }

  .highlight-image {
    display: block;
    width: 100%;
    height: 200px;
    transition: transform 2s;
  }

  .highlight-title {
    color: #ffffff;
    transition: opacity 1s;
    margin-bottom: 0;
    font-size: 25px;
  }

  .highlight-icon {
    color: red;
    font-size: 62px;
    opacity: 0;
    transition: transform 1s;
    visibility: hidden;
    position: absolute;
    z-index: 2;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .highlight-icon:hover {
    color: #ffffff;
  }
</style>
<section class="as_breadcrum_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1>Videos</h1>

        <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li>Videos</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="highlight mt-5">
  <h1 class="as_heading text-center"><span style="color:red;">ALP</span> Astrology Videos</h1>
  <div class="container">
    <div class="row">
      <?php
      $sql_video = "SELECT * FROM videos order by video_id desc";
      $res_video = mysqli_query($con, $sql_video);

      if ($res_video) {
        $i = 1;
        while ($rows = mysqli_fetch_assoc($res_video)) {
      ?>

      <div class="col-lg-4 col-md-6 col-12">
        <div class="highlight-thumb">
          <img src="./admin/<?= $rows['video_pic'] ?>" class="highlight-image img-fluid" alt="">

          <div class="highlight-info">
            <h3 class="highlight-title as_font14" style="font-size:16px;"><?= $rows['video_title'] ?></h3>
            <a href="<?= $rows['video_link'] ?>" class="fa-brands fa-youtube highlight-icon" target="_blank"></a>
          </div>
        </div>
      </div>

      <?php
          $i++;
        }
      }
      ?>
      

      <!-- <div class="col-lg-4 col-md-6 col-12">
        <div class="highlight-thumb">
          <img src="assets/images/book_02.jpg" class="highlight-image img-fluid" alt="">

          <div class="highlight-info">
            <h3 class="highlight-title as_font14">Videos Heading</h3>

            <a href="https://www.youtube.com/watch?v=jKCO3744hI4" class="fa-brands fa-youtube highlight-icon"></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-12">
        <div class="highlight-thumb">
          <img src="assets/images/book_03.jpg" class="highlight-image img-fluid" alt="">

          <div class="highlight-info">
            <h3 class="highlight-title as_font14">Videos Heading</h3>

            <a href="https://www.youtube.com/watch?v=jKCO3744hI4" class="fa-brands fa-youtube highlight-icon"></a>
          </div>
        </div>
      </div> -->

    </div>
  </div>
</section>


<?php
include('include/footer1.php');
?>