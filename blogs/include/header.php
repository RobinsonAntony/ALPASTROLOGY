<?php
include('config.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ALP Astrology</title>
    <meta charset="UTF-8">
    <meta name="description" content="ALP Astrology">
    <meta name="keywords" content="Astrology course ,Learn astrology,Astrology education ,Tamil astrology, Astrology websites, near astrologer, Best books on astrology, Psychological astrology, World no 1 astrologer, astrology horoscope">
    <meta name="author" content="Pothuvudaimoorthy">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11434561810">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11434561810');
</script>

<!-- Event snippet for Contact conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-11434561810/ByJyCPvipf0YEJKitswq'});
</script>
<!-- Event snippet for Contact conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-11434561810/ByJyCPvipf0YEJKitswq',
      'event_callback': callback
  });
  return false;
}
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3QCQZ8GP72"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3QCQZ8GP72');
</script>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W63PZTL3');</script>
<!-- End Google Tag Manager -->


    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link href="assets/css/font.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/js/plugin/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/plugin/select2/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/plugin/airdatepicker/datepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
   
    <script src="./assets/js/revealx.js"></script>
    <script src="./assets/js/revealy.js"></script>

    <script src="./assets/js/spinner.js"></script>
</head>

<style>
    /**
 * index.scss
 * - Add any styles you want here!
 */



    /* main-header start */
    [data-target="#mainMenu"] {
        position: relative;
        z-index: 999;
    }

    #mainMenu li>a {
        font-size: 12.5px;
        letter-spacing: 1px;
        color: #fff;
        font-weight: 400;
        position: relative;
        z-index: 1;
        text-decoration: none;
    }

    .main-header.fixed-nav #mainMenu li>a {
        color: #fff;
        text-decoration: none;
    }

    #mainMenu li:not(:last-of-type) {
        margin-right: 30px;
    }

    #mainMenu li>a::before {
        position: absolute;
        content: "";
        width: calc(100% - 1px);
        height: 1px;
        background: orange;
        bottom: -6px;
        left: 0;

        -webkit-transform: scale(0, 1);
        -ms-transform: scale(0, 1);
        transform: scale(0, 1);
        -webkit-transform-origin: right center;
        -ms-transform-origin: right center;
        transform-origin: right center;
        z-index: -1;

        -webkit-transition: transform 0.5s ease;
        transition: transform 0.5s ease;
    }

    #mainMenu li>a:hover::before,
    #mainMenu li>a.active::before {
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        transform: scale(1, 1);
        -webkit-transform-origin: left center;
        -ms-transform-origin: left center;
        transform-origin: left center;
        background-color: orange;
    }

    .main-header.fixed-nav #mainMenu li>a::before {
        background: #000;
    }

    .main-header {
        /* position: fixed; */
        /* top: 25px; */
        left: 0;
        z-index: 99;
        width: 100%;
        -webkit-transition: all 0.4s ease;
        transition: all 0.4s ease;
    }

    .main-header.fixed-nav {
        top: 0;
        background: #fff;
        -webkit-box-shadow: 0 8px 12px -8px rgba(0, 0, 0, 0.09);
        box-shadow: 0 8px 12px -8px rgba(0, 0, 0, 0.09);
        -webkit-transition: all 0.4s ease;
        transition: all 0.4s ease;
    }

    .main-header.fixed-nav .navbar-brand>img:last-of-type {
        display: block;
    }

    .main-header.fixed-nav .navbar-brand>img:first-of-type {
        display: none;
    }

    .navbar-brand {
        color: #fff;
    }

    .main-header .navbar-brand img {
        max-width: 90px;
        animation: fadeInLeft 0.4s both 0.4s;
    }
     /* google translate */
    #google_translate_element {
        width: 150px;
    }

    #goog-gt-tt {
        display: none !important;
    }

    .VIpgJd-ZVi9od-aZ2wEe {
        display: none !important;
    }

    .g_trans {
        margin-top: 3px;
        margin-right: 58px;
        /* margin-left: 100px; */
        position: fixed;
        /* right: 100px; */
        /* padding-left: 7px; */
        right: 65px;
        /*top: 41px;*/
        top: 0px;
        right: -35px;
    }

    .g_trans {
        /* margin-top: 2px; */
        /* margin-right: 10px; */
        /* margin-left: 100px; */
        /* position: fixed; */
        /* right: 100px; */
        /* padding-left: 7px; */
    }

    .goog-te-combo {
        width: 70px !important;
    }

    .VIpgJd-ZVi9od-l4eHX-hSRGPd,
    .VIpgJd-ZVi9od-l4eHX-hSRGPd:link,
    .VIpgJd-ZVi9od-l4eHX-hSRGPd:visited,
    .VIpgJd-ZVi9od-l4eHX-hSRGPd:hover,
    .VIpgJd-ZVi9od-l4eHX-hSRGPd:active {
        display: none !important;
    }

    .skiptranslate del {
        display: none;
    }

    .VIpgJd-ZVi9od-aZ2wEe-wOHMyf {
        z-index: 9724790009779 !important;
        top: 0;
        left: unset;
        right: -5px;
        display: none !important;
        border-radius: 50%;
        border: 2px solid gold;
    }

    .VIpgJd-ZVi9od-aZ2wEe-OiiCO {
        width: 80px;
        height: 80px;
    }

    /*hide google translate link | logo | banner-frame */
    .goog-logo-link,
    .gskiptranslate,
    .goog-te-gadget span,
    .goog-te-banner-frame,
    #goog-gt-tt,
    .goog-te-balloon-frame,
    div#goog-gt- {
        display: none !important;
    }

    .goog-te-gadget {
        color: transparent !important;
        font-size: 0px;
    }

    .goog-text-highlight {
        background: none !important;
        box-shadow: none !important;
    }

    #google_translate_element select {
        background: #f6edfd;
        color: #383ffa;
        border: none;
        border-radius: 3px;
        padding: 2px 2px
    }



    /* main-header end */
    @media (max-width: 991px) {

        /*header starts*/
        .collapse.in {
            display: block !important;
            padding: 0;
            clear: both;
        }

        .navbar-toggler {
            margin: 0;
            padding: 0;
            width: 40px;
            height: 40px;
            position: absolute;
            top: 37%;
            right: 0;
            border: none;
            border-radius: 0;
            outline: none !important;
        }

        .main-header .navbar {
            float: none;
            width: 100%;
            padding-left: 0;
            padding-right: 0;
            text-align: center;
        }

        .main-header .navbar-nav {
            margin-top: 70px;
        }

        .main-header .navbar-nav li .nav-link {
            text-align: center;
            padding: 20px 15px;
            border-radius: 0px;
            background-color: rgb(9 9 31);
        }

        .main-header .navbar-toggler .icon-bar {
            background-color: #fff;
            margin: 0 auto 6px;
            border-radius: 0;
            width: 30px;
            height: 3px;
            position: absolute;
            right: 0;
            -webkit-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }


        .main-header .navbar .navbar-toggler .icon-bar:first-child {
            margin-top: 3px;
        }

        .main-header .navbar-toggler .icon-bar-1 {
            width: 10px;
            top: 0px;
        }

        .main-header .navbar-toggler .icon-bar-2 {
            width: 16px;
            top: 12px;
        }

        .main-header .navbar-toggler .icon-bar-3 {
            width: 20px;
            top: 21px;
        }

        .main-header .current .icon-bar {
            margin-bottom: 5px;
            border-radius: 0;
            display: block;
        }

        .main-header .current .icon-bar-1 {
            width: 18px;
        }

        .main-header .current .icon-bar-2 {
            width: 30px;
        }

        .main-header .current .icon-bar-3 {
            width: 10px;
        }

        .main-header .navbar-toggler:hover .icon-bar {
            background-color: #fff;
        }

        .main-header .navbar-toggler:focus .icon-bar {
            background-color: #fff;
        }

        /*header ends*/
    }
</style>

<body>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W63PZTL3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    
    <!--<div class="as_loader">
        <img src="assets/images/loader.png" alt="" class="img-responsive">
    </div> -->
    <button id="scrollToTopBtn">
        <h5>↑</h5>
    </button>


    <!-- <section class="as_header_wrapper"> -->
    <header class="main-header" style="background-color:rgb(9 9 31);">
        <div class="container-fluid">
            
            </div>
            <nav class="navbar navbar-expand-lg main-nav px-0">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo.png" alt="alpastrology.org">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation" >
                    <span class="icon-bar icon-bar-1"></span>
                    <span class="icon-bar icon-bar-2"></span>
                    <span class="icon-bar icon-bar-3"></span>
                </button>
                
                <div class="collapse navbar-collapse" style="margin-left:5%;margin-top:30px;" id="mainMenu">
                    <ul class="navbar-nav ml-auto text-uppercase f1">
                        <li>
                            <a href="https://www.alpastrology.co.in/index" class="nav_link">home</a>
                        </li>
                        <li>
                            <a href="https://www.alpastrology.co.in/about"  class="nav_link">about us</a>
                        </li>
                        <li>
                            <a href="https://www.alpastrology.co.in/courses"  class="nav_link">courses</a>
                        </li>
                        <li>
                            <a href="consultation"  class="nav_link">Consultation</a>
                        </li>
                        <li>
                            <a href="https://www.alpastrology.co.in/software"  class="nav_link">Software</a>
                        </li>
                        <li>
                            <a href="https://www.alpastrology.co.in/books"  class="nav_link">Books</a>
                        </li>
                        <li>
                            <a href="https://www.alpastrology.co.in/articles"  class="nav_link">Articles</a>
                        </li>
                        <li>
                            <a href="https://www.alpastrology.co.in/videos"  class="nav_link">Videos</a>
                        </li>
                        <li>
                            <a href="https://www.alpastrology.co.in/events"  class="nav_link">Events</a>
                        </li>
                        <li>
                            <a href="https://www.alpastrology.co.in/contact"  class="nav_link">contact</a>
                        </li>
                        <li>
                            <a href="https://www.alpastrology.co.in/faq"  class="nav_link">FAQs</a>
                        </li>
                        <li>
                             <a class="g_trans">
                            <div id="google_translate_element" class="g_trans_res"></div>
                        </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- /.container -->
    </header>
    <!-- </section> -->



<script>
    document.addEventListener('DOMContentLoaded', function () {
        var currentUrl = window.location.pathname;

        currentUrl = currentUrl.substr(1);

        var navLinks = document.querySelectorAll('.nav_link');
        navLinks.forEach(function (link) {
            var href = link.getAttribute('href');

            if (currentUrl.indexOf(href) !== -1) {
                link.classList.add('active');
            }
        });
    });
</script>
 <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>