<?php
include('include/header.php');

$event_id = $_GET['event_id'];

$sql = "SELECT * FROM events WHERE event_id = $event_id";
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
    td {
        border: 1px solid black;
    }

    .art_index_table th {
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

    .thanks {
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
    <h1><?= $row['event_title'] ?></h1>
    <p style="margin-left: 20%;"><?= $row['event_date'] ?></p>
</div>
<div class="canvas-wrap">
    <canvas id="canvas"></canvas>
</div>
<div class="art_index_table">
    <h2 class="text-center">EVENT IMAGES</h2>
    <div class="row">
        <div class="col-md-4">
            <img src="./admin/<?= $row['event_image1'] ?>" alt="" style="width: 250px;height: 250px;">
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <img src="./admin/<?= $row['event_image2'] ?>" alt="" style="width: 250px;height: 250px;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <img src="./admin/<?= $row['event_image3'] ?>" alt="" style="width: 250px;height: 250px;">
        </div>
        <div class="col-md-4">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="./admin/<?= $row['event_image4'] ?>" alt="" style="width: 250px;height: 250px;">
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <img src="./admin/<?= $row['event_image5'] ?>" alt="" style="width: 250px;height: 250px;">
        </div>
    </div>
</div>
<div class="row about_event">
    <h3 class="text-center">EVENT DESCRIPTION</h3>
    <p style="text-align: justify;text-indent:130px;width: 1000px;margin:auto;"><?=$row['event_desc']?></p>
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
include('include/footer.php');
?>