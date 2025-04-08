<?php
include('include/header.php');

$art_id = $_GET['art_id'];

$sql = "SELECT * FROM articles WHERE art_id = $art_id";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($res);
?>
<style>
  *,
  *:before,
  *:after {
    box-sizng: border-box;
  }

  html {
    font-family: "SF Text", "San Francisco", "Helvetica", sans-serif;
    color: #333;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 300;
  }

  body {
    margin: 0;
    padding: 0;
    background: #fff;
  }

  .header {
    font-family: "SF Display", "San Francisco", "Helvetica", sans-serif;
    background-color: #215;
    background-image: linear-gradient(to bottom, rgba(119, 17, 85, 0.5), transparent);
    min-height: 200px;
    padding: 2rem;
    color: #fff;
    text-align: center;
  }

  .header h1 {
    font-size: 50px;
    font-weight: 300;
  }

  .header p {
    font-weight: 200;
  }

  .content {
    min-height: 200px;
    padding: 1rem 2rem 2rem 2rem;
    margin: 0 auto;
    max-width: 900px;
    font-size: 15px;
  }

  .art_index_table {
    min-height: 200px;
    padding: 1rem 2rem 2rem 2rem;
    margin: 0 auto;
    max-width: 900px;
  }
  .art_index_table table,
  th,
  td{
    border: 1px solid black;
  }

  .art_index_table th{
    background-color: #481155;
    color: white;
  }

  .content p:first-child:first-line {
    line-height: 1;
  }

  .content p:first-child:first-letter {
    font-size: 42px;
    font-weight: 300;
    vertical-align: 0;
  }

  .canvas-wrap {
    max-width: 100%;
    overflow: hidden;
    position: relative;
  }

  canvas {
    display: block;
  }

  .cheading {
    text-align: center;
    color: black;
    margin-top: 20px;
    font-family: "SF Display", "San Francisco", "Helvetica", sans-serif;
    font-size: 20px;
    font-weight: bold;
  }

  .thanks{
    min-height: 200px;
        padding: 1rem 2rem 2rem 2rem;
        margin: 0 auto;
        max-width: 900px;
  }

  .ending_img {
        display: flex;
        justify-content: center;
        align-items: center;
 
        min-height: 200px;
        padding: 1rem 2rem 2rem 2rem;
        margin: 0 auto;
        max-width: 900px;
    }
</style>


<div class="header">
  <h1><?= $row['art_title'] ?></h1>
  <p><?= $row['art_sub_title'] ?></p>
  <p style="margin-left: 20%;"><?= $row['art_author'] ?></p>
</div>
<div class="canvas-wrap">
  <canvas id="canvas"></canvas>
</div>
<div class="art_index_table">
  <table class="table">
    <thead>
      <tr>
        <th scope="col" style="text-align:center;">நிகழ்வு</th>
        <th scope="col" style="text-align:center;">தலைப்பு </th>
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
            <td scope="row" style="text-align:center;"><?= $i ?></td>
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
<h1 class="cheading">முன்னுரை</h1>
<div class="content">
  
  <?= $row['art_intro'] ?>
</div>

<?php
      $sql_art2 = "SELECT * FROM article_content_table WHERE art_for_id = $art_id";
      $res_art2 = mysqli_query($con, $sql_art2);

      if ($res_art2) {
        $i = 1;
        while ($rows = mysqli_fetch_assoc($res_art2)) {
      ?>

            <h1 class="cheading"><?= $rows['art_heading_name'] ?></h1>
            <div class="content">
              <p><?= $rows['art_body_contents'] ?></p>
              
            </div>

      <?php
          $i++;
        }
      }
      ?>

<h1 class="cheading">முடிவுரை</h1>
<div class="content">
  
  <?= $row['art_conclusion'] ?>
</div>

<div class="thanks">
        <p class="text-center">என்றென்றும் நன்றியுடன்....</p><br>
        <p class="text-end">
            <!--ALP ஜோதிடர் & <br>-->
            <!--ALP ஜோதிட ஆசிரியர்<br>-->
            <!--என்ற பெருமையுடன்<br>-->
            <span class="text-dark"><b><?= $row['art_author'] ?></b></span>
        </p>
</div>

<div class="ending_img">
    <img src="admin/img/—Pngtree—end page design_8510473.png" alt="" style="width: 200px; height: 130px;">
</div>


<script>
  (function() {
    "use strict";

    var cvs, ctx;
    // var nodes = 5;
    var waves = [];
    var waveHeight = 30;
    var colors = ["#f00", "#0f0", "#00f"];

    function init() {
      cvs = document.getElementById("canvas");
      ctx = cvs.getContext("2d");
      resizeCanvas(cvs);

      for (var i = 0; i < 3; i++) {
        var temp = new wave(colors[i], 1, 5);
      }

      setInterval(update, 16);
    }

    function randomColor() {
      // body
      var h = Math.round(Math.random() * 360);
      return "hsl(" + h + ", 100%, 50%)";
    }

    function update(array) {
      // body
      // ctx.clearRect(0, 0, cvs.width, cvs.height);
      var fill = window
        .getComputedStyle(document.querySelector(".header"), null)
        .getPropertyValue("background-color");
      ctx.fillStyle = fill;
      ctx.globalCompositeOperation = "source-over";
      ctx.fillRect(0, 0, cvs.width, cvs.height);
      ctx.globalCompositeOperation = "screen";
      for (var i = 0; i < waves.length; i++) {
        for (var j = 0; j < waves[i].nodes.length; j++) {
          bounce(waves[i].nodes[j]);
        }
        drawWave(waves[i]);
        // drawLine(waves[i].nodes);
        // drawNodes(waves[i].nodes);
      }
      ctx.globalCompositeOperation = "hue";
      ctx.fillStyle = fill;
      // ctx.fillRect(0, 0, cvs.width, cvs.height);
    }

    function wave(color, lambda, nodes) {
      // body
      this.color = color;
      this.lambda = lambda;
      this.nodes = [];
      var tick = 1;
      for (var i = 0; i <= nodes + 2; i++) {
        var temp = [((i - 1) * cvs.width) / nodes, 0, Math.random() * 200, 0.3];
        // this.speed * plusOrMinus
        this.nodes.push(temp);
        console.log(temp);
      }
      console.log(this.nodes);
      waves.push(this);
    }

    function bounce(node) {
      node[1] = (waveHeight / 2) * Math.sin(node[2] / 20) + cvs.height / 2;
      node[2] = node[2] + node[3];
    }

    function drawWave(obj) {
      var diff = function(a, b) {
        return (b - a) / 2 + a;
      };
      ctx.fillStyle = obj.color;
      ctx.beginPath();
      ctx.moveTo(0, cvs.height);
      ctx.lineTo(obj.nodes[0][0], obj.nodes[0][1]);
      for (var i = 0; i < obj.nodes.length; i++) {
        if (obj.nodes[i + 1]) {
          ctx.quadraticCurveTo(
            obj.nodes[i][0],
            obj.nodes[i][1],
            diff(obj.nodes[i][0], obj.nodes[i + 1][0]),
            diff(obj.nodes[i][1], obj.nodes[i + 1][1])
          );
        } else {
          ctx.lineTo(obj.nodes[i][0], obj.nodes[i][1]);
          ctx.lineTo(cvs.width, cvs.height);
        }
      }
      ctx.closePath();
      ctx.fill();
    }

    function drawNodes(array) {
      ctx.strokeStyle = "#888";
      for (var i = 0; i < array.length; i++) {
        if (array[i + 1]) {
          ctx.lineTo(array[i + 1][0], array[i + 1][1]);
        }
      }
      ctx.stroke();
    }

    function resizeCanvas(canvas, width, height) {
      if (width && height) {
        canvas.width = width;
        canvas.height = height;
      } else {
        if (window.innerHeight > 1920) {
          canvas.width = window.innerWidth;
        } else {
          canvas.width = 1920;
        }

        canvas.height = waveHeight;
      }
    }

    document.addEventListener("DOMContentLoaded", init, false);
  })();
</script>
<?php
include('include/footer1.php');
?>