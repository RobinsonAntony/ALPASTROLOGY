<?php
include('include/header.php');

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
<style>
    body,
    html {
        overflow-x: hidden !important;
        /* Hide horizontal scrollbar at the document level */
    }

    .bookcontainer {
        max-width: 1000px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .card {
        position: relative;
        margin: 20px 10px;
        width: 200px;
        height: 300px;
        background: #fff;
        transform-style: preserve-3d;
        transform: perspective(2000px);
        transition: 1s;
        box-shadow: inset 100px 0 50px rgba(0, 0, 0, 0.5);
        cursor: pointer;
    }

    .card:hover {
        box-shadow: inset 20px 0 50px rgba(0, 0, 0, 0.5);
    }

    .card .img-container {
        position: relative;
        width: 100%;
        height: 100%;
        border: 1px solid #000;
        box-sizing: border-box;
        transform-origin: left;
        z-index: 1;
        transition: 1s;
    }

    .card:hover .img-container {
        transform: rotateY(-135deg);
        background-color: #fff;
    }

    .card .img-container img {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .card .card-details {
        position: absolute;
        left: 0;
        top: 0;
        box-sizing: border-box;
        padding: 20px;
        color: #000;
    }

    .card .card-details h2 {
        margin: 0;
        padding: 0.5em 0;
        text-transform: uppercase;
        font-size: 1.2em;
        color: #ed363a;
    }

    .card .card-details h5 {
        margin: 0;
        text-transform: uppercase;
        font-size: 0.8em;
    }

    .card .card-details p {
        margin: 0;
        padding: 0;
        line-height: 25px;
        font-size: 0.7em;
    }
</style>

<!--<div class="spinner-container">-->
<!--    <img src="./assets/images/horoscope.gif" alt="Loading Spinner">-->
<!--</div>-->

<section class="as_breadcrum_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Books</h1>

                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Books</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="as_pricing_plan as_padderBottom30">

    <div class="as_booking_section as_padderBottom10 mt-5">
        <div class="container">
            <div class="as_bookingform ">
                <h1 class="as_heading text-center" style="font-size: 34px;"><span style="color:red;">ALP</span> Astrology Books</h1>
                <p class="as_font14" style="text-align: justify;text-justify: inter-word;">
A comprehensive series of 18 books is underway for ALP Astrology, with the publication of 7 ALP Astrology books already available in Tamil. This significant body of work has been translated into English, resulting in the publication of 3 ALP astrology books by ALP Publications in Chennai. Furthermore, efforts are underway to translate these Tamil books into other languages, including Telugu and Malayalam. For the convenience of e-readers, the Kindle versions of the published books are also accessible, ensuring a wider reach for those seeking insights into ALP astrology.</p>
                <div class="as_booking_section as_padderBottom10">
                    <h3 class="as_bookingheading as_font14_subhead revealy" style="line-height: 1.5;">Written by Dr.S.Pothuvudaimoorthy, Ph.D., ALP Astrology Inventor </h3>
                    <p class="as_font14_subhead text-center revealx" style="font-size:25px;">Tamil Books</p>
                </div>
            </div>
        </div>
        <div class="bookcontainer container revealy">
            <div class="card">
                <div class="img-container">
                    <img src="assets/images/book_01.jpg" alt="" />
                </div>
                <div class="card-details" data-bs-toggle="modal" data-bs-target="#alp_volume1">
                    <h2>ALP Volume 1</h2>
                    <h5>Synopsis :</h5>
                    <p>Introduction to Akshaya Lagna Paddhati (ALP) Astrology, Planetary characteristics, 3 types of Karma, Connection between Dasa Bukthi and Gochar and Remedial temples.</p>
                    <br>
                    <p>Book price : Rs. 120/-</p>
                </div>
            </div>
            <div class="card">
                <div class="img-container">
                    <img src="assets/images/book_02.jpg" alt="" />
                </div>
                <div class="card-details" data-bs-toggle="modal" data-bs-target="#alp_volume2">
                    <h2>ALP Volume 2</h2>
                    <h5>Synopsis :</h5>
                    <p>Introduction to Akshaya Rasi, Calculation of Akshaya Lagna, Calculations of Akshaya Rasi, Objectives of this Birth, Karma and Time, Connection between Akshaya Lagna and Akshaya Rasi.</p>
                    <br>
                    <p>Book price : Rs. 280/-</p>
                </div>
            </div>
            <div class="card">
                <div class="img-container">
                    <img src="assets/images/book_03.jpg" alt="" />
                </div>
                <div class="card-details" data-bs-toggle="modal" data-bs-target="#alp_volume3">
                    <h2>ALP Volume 3</h2>
                    <h5>Synopsis :</h5>
                    <p style="line-height: 19px;">Introduction to Gochar, Characteristics of all the nakshatras in Leo Constellation, Mesha (Aries) Lagna ALP and all the planets with reference to the 12 Bhavas using Gochar – Explained in detailed with helpful insights to make predictions.</p>

                    <p style="margin-top:10px;">Book price : Rs. 280/-</p>
                </div>
            </div>
            <div class="card">
                <div class="img-container">
                    <img src="assets/images/book_04.jpg" alt="" />
                </div>
                <div class="card-details" data-bs-toggle="modal" data-bs-target="#alp_volume4">
                    <h2>ALP Volume 4</h2>
                    <h5>Synopsis :</h5>
                    <p>Introduction to the characteristics of all nakshatras in Sagittarius Constellation, Marriage matching and Horoscope analysis.</p>
                    <br><br>
                    <p>Book price : Rs. 250/-</p>
                </div>
            </div>
            <div class="card">
                <div class="img-container">
                    <img src="assets/images/book_05.jpg" alt="" />
                </div>
                <div class="card-details" data-bs-toggle="modal" data-bs-target="#alp_volume5">
                    <h2>ALP Volume 5</h2>
                    <h5>Synopsis :</h5>
                    <p>Book on Marriage matching, Akshaya Rasi and Nakshatra compatibility, Example horoscopes and Articles written by ALP Astrologers on Marriage matching.</p>
                    <br>
                    <p>Book price : Rs. 300/-</p>
                </div>
            </div>
            <div class="card">
                <div class="img-container">
                    <img src="assets/images/book_06.jpg" alt="" />
                </div>
                <div class="card-details" data-bs-toggle="modal" data-bs-target="#alp_volume6">
                    <h2>ALP Volume 6</h2>
                    <h5>Synopsis :</h5>
                    <p style="line-height: 19px;">Complete manual/Salient features of Akshaya Lagna Paddhati (ALP) Astrology, Karma in detail, Akshaya Lagna/Gochar/Vimshottari Dasa Bukthi, Akshaya lagna for all 12 bhavas in detail and how to use Akshaya Lagna as a manual in daily life. </p>
                    <p style="margin-top:10px;">Book price : Rs. 220/-</p>
                </div>
            </div>
            <div class="card">
                <div class="img-container">
                    <img src="assets/images/book_07.jpg" alt="" />
                </div>
                <div class="card-details" data-bs-toggle="modal" data-bs-target="#alp_thirumana_porutham">
                    <h2>ALP Thirumana Porutham</h2>
                    <h5>Synopsis :</h5>
                    <p>Marriage matching in detail using Akshaya Lagna Paddhati (ALP) Astrology, and how to use ALP TP Software for marriage matching purposes.</p>

                </div>
            </div>
            <div class="card" style="visibility:hidden;">
                <!-- <div class="img-container">
                <img src="assets/images/book_06.jpg" alt="" />
            </div>
            <div class="card-details">
                <h2>ALP Volume 6</h2>
                <p>Black Widow appears in a relaunched ongoing series by writer Nathan Edmondson and artist Phil Noto. The first issue debuted in January 2014. In October 2015, it was announced that Mark Waid and Chris Samnee would be launching a new Black Widow series for 2016 as part of Marvel's post-Secret Wars relaunch.</p>
            </div> -->
            </div>
        </div>
    </div>
    <div class="as_booking_section as_padderBottom10 mt-5 ">
        <p class="as_font14_subhead text-center revealx" style="font-size:25px;">English Books</p>
        <div class="bookcontainer container revealy">

            <div class="card">
                <div class="img-container">
                    <img src="assets/images/englishb1.jpg" alt="" />
                </div>
                <div class="card-details" data-bs-toggle="modal" data-bs-target="#alp_eng1">
                    <h2>ALP English Volume 1</h2>
                    <h5>Synopsis :</h5>
                    <p>Introduction to Akshaya Lagna Paddhati (ALP) Astrology, Planetary characteristics, 3 types of Karma, Connection between Dasa Bukthi and Gochar and Remedial temples.</p>
                    <br>
                    <!-- <p>Book price : Rs. 120/-</p> -->
                </div>
            </div>
            <div class="card">
                <div class="img-container">
                    <img src="assets/images/englishb2.jpg" alt="" />
                </div>
                <div class="card-details" data-bs-toggle="modal" data-bs-target="#alp_eng2">
                    <h2>ALP English Volume 2</h2>
                    <h5>Synopsis :</h5>
                    <p>Introduction to Akshaya Rasi, Calculation of Akshaya Lagna, Calculations of Akshaya Rasi, Objectives of this Birth, Karma and Time, Connection between Akshaya Lagna and Akshaya Rasi.</p>
                    <br>
                    <!-- <p>Book price : Rs. 280/-</p> -->
                </div>
            </div>
            <div class="card">
                <div class="img-container">
                    <img src="assets/images/englishb3.jpg" alt="" />
                </div>
                <div class="card-details" data-bs-toggle="modal" data-bs-target="#alp_eng3">
                    <h2>ALP English Volume 3</h2>
                    <h5>Synopsis :</h5>
                    <p style="line-height: 19px;">Introduction to Gochar, Characteristics of all the nakshatras in Leo Constellation, Mesha (Aries) Lagna ALP and all the planets with reference to the 12 Bhavas using Gochar – Explained in detailed with helpful insights to make predictions.</p>

                    <!-- <p style="margin-top:10px;">Book price : Rs. 280/-</p> -->
                </div>
            </div>
            <div class="card" style="visibility:hidden;">
                <!-- <div class="img-container">
                    <img src="assets/images/book_06.jpg" alt="" />
                </div>
                <div class="card-details">
                    <h2>ALP Volume 6</h2>
                    <p>Black Widow appears in a relaunched ongoing series by writer Nathan Edmondson and artist Phil Noto. The first issue debuted in January 2014. In October 2015, it was announced that Mark Waid and Chris Samnee would be launching a new Black Widow series for 2016 as part of Marvel's post-Secret Wars relaunch.</p>
                </div> -->
            </div>
        </div>
    </div>
</section>
<section class="as_pricing_plan as_padderBottom30 as_padderTop30">
    <div class="container">
        <div class="as_bookingform ">
            <!-- <h1 class="as_heading text-center as_font14_subhead">ALP Astrology Books</h1> -->
            <!-- <p>A series of 18 books is planned to be published for ALP astrology, of 7 ALP Astrology books in Tamil has been published. This work is translated in English and 3 ALP astrology books in English has been published by ALP Publications, Chennai. These Tamil books are being translated in other languages like Telugu and Malayalam too. The kindle version of the published books are also available for e-readers.</p> -->
            <!-- <div class="as_booking_section as_padderBottom10">
                <h3 class="as_bookingheading ">Written by Dr.S.Pothuvudaimoorthy, Ph.D., ALP Astrology Inventor </h3>
                <img src="assets/images/svg/user2.svg" alt="">
                <p>Tamil Books</p>
                <div class="row as_appointment_form">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12" data-bs-toggle="modal" data-bs-target="#alp_volume1">
                        <label class="as_astro text-center as_padderBottom40">
                            <input type="checkbox" name="" id="" class="hide">
                            <span>
                                <span><img src="assets/images/book_01.jpg" alt="" class="img-responsive"></span>
                                <h5> <a href="courses.php">ALP Volume-1</a></h5>
                            </span>
                        </label>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12" data-bs-toggle="modal" data-bs-target="#alp_volume2">
                        <label class="as_astro text-center as_padderBottom40">
                            <input type="checkbox" name="" id="" class="hide">
                            <span>
                                <span><img src="assets/images/book_02.jpg" alt="" class="img-responsive"></span>
                                <h5><a href="courses.php">ALP Volume-2</a></h5>
                            </span>
                        </label>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12" data-bs-toggle="modal" data-bs-target="#alp_volume3">
                        <label class="as_astro text-center as_padderBottom40">
                            <input type="checkbox" name="" id="" class="hide">
                            <span>
                                <span><img src="assets/images/book_03.jpg" alt="" class="img-responsive"></span>
                                <h5><a href="courses.php">ALP Volume-3</a></h5>
                            </span>
                        </label>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12" data-bs-toggle="modal" data-bs-target="#alp_volume4">
                        <label class="as_astro text-center as_padderBottom40">
                            <input type="checkbox" name="" id="" class="hide">
                            <span>
                                <span><img src="assets/images/book_04.jpg" alt="" class="img-responsive"></span>
                                <h5><a href="courses.php">ALP Volume-4</a></h5>
                            </span>
                        </label>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12" data-bs-toggle="modal" data-bs-target="#alp_volume5">
                        <label class="as_astro text-center as_padderBottom40">
                            <input type="checkbox" name="" id="" class="hide">
                            <span>
                                <span><img src="assets/images/book_05.jpg" alt="" class="img-responsive"></span>
                                <h5><a href="courses.php">ALP Volume-5</a></h5>
                            </span>
                        </label>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12" data-bs-toggle="modal" data-bs-target="#alp_volume6">
                        <label class="as_astro text-center as_padderBottom40">
                            <input type="checkbox" name="" id="" class="hide">
                            <span>
                                <span><img src="assets/images/book_06.jpg" alt="" class="img-responsive"></span>
                                <h5><a href="courses.php">ALP Volume-6</a></h5>
                            </span>
                        </label>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12" data-bs-toggle="modal" data-bs-target="#alp_thirumana_porutham">
                        <label class="as_astro text-center as_padderBottom40">
                            <input type="checkbox" name="" id="" class="hide">
                            <span>
                                <span><img src="assets/images/book_07.jpg" alt="" class="img-responsive"></span>
                                <h5><a href="courses.php">ALP Thirumana Porutham</a></h5>
                            </span>
                        </label>
                    </div>

                </div>
            </div> -->
            <!-- <div class="as_booking_section as_padderBottom10">
                <p>English Books</p>
                <div class="row as_appointment_form">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12" data-bs-toggle="modal" data-bs-target="#alp_eng1">
                        <label class="as_astro text-center as_padderBottom40">
                            <input type="checkbox" name="" id="" class="hide">
                            <span>
                                <span><img src="assets/images/englishb1.jpg" alt="" class="img-responsive"></span>
                                <h5> <a href="courses.php">ALP Volume-1</a></h5>
                            </span>
                        </label>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12" data-bs-toggle="modal" data-bs-target="#alp_eng2">
                        <label class="as_astro text-center as_padderBottom40">
                            <input type="checkbox" name="" id="" class="hide">
                            <span>
                                <span><img src="assets/images/englishb2.jpg" alt="" class="img-responsive"></span>
                                <h5><a href="courses.php">ALP Volume-2</a></h5>
                            </span>
                        </label>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12" data-bs-toggle="modal" data-bs-target="#alp_eng3">
                        <label class="as_astro text-center as_padderBottom40">
                            <input type="checkbox" name="" id="" class="hide">
                            <span>
                                <span><img src="assets/images/englishb3.jpg" alt="" class="img-responsive"></span>
                                <h5><a href="courses.php">ALP Volume-3</a></h5>
                            </span>
                        </label>
                    </div>

                </div>
            </div> -->

            <div class="container as_appointment_wrapper as_padderBottom40 as_padderTop20">
                <div class="row">
                    <div class="col-lg-9 text-center">
                        <h1 class="as_heading as_heading_center">Order Books</h1>

                        <p class="as_font14 as_padderBottom10 as_padderTop10 as_font14_subhead">For inquiries and order books, please contact us at:</p>
                    </div>
                    <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-6">
                         <form class="as_appointment_form" method="post" action="">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-9">
                                    <div class="form-group">
                                        <input type="text" name="name" value="" placeholder="Name" class="form-control" onkeyup="this.value=this.value.replace(/[^A-z]/g,'');" required>
                                        <span><img src="assets/images/svg/user1.svg" alt=""></span>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" placeholder="Phone Number" name="mobile" class="form-control" required>
                                        <span><img src="assets/images/svg/phone1.svg" alt=""></span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-9">
                                    <div class="form-group">
                                        <input type="text" name="email" value="" placeholder="Email" class="form-control" required pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
                                        <span><img src="assets/images/svg/mail1.svg" alt=""></span>
                                    </div>
                                    <div class="form-group ">
                                        <select class="form-control" name="type" data-placeholder="Select Course" id="" required>
                                            <!-- <option value="">-Select-</option> -->
                                            <option value="Order" selected>Order</option>
                                            <!-- <option value="Enquiry" selected>Enquiry</option> -->
                                        </select>
                                        <span><i class="fa-solid fa-edit"></i></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-9">
                                        <div class="form-group " id="selectCourse">
                                            <label>Select Books</label>
                                            <select name="selected_book[]" id="countries" multiple>
                                                <option value="ALP Volume 1">ALP Volume 1</option>
                                                <option value="ALP Volume 2">ALP Volume 2</option>
                                                <option value="ALP Volume 3">ALP Volume 3</option>
                                                <option value="ALP Volume 4">ALP Volume 4</option>
                                                <option value="ALP Volume 5">ALP Volume 5</option>
                                                <option value="ALP Volume 6">ALP Volume 6</option>
                                                <option value="ALP Thirumana Porutham">ALP Thirumana Porutham</option>
                                                <option value="ALP English Volume 1">ALP English Volume 1</option>
                                                <option value="ALP English Volume 2">ALP English Volume 2</option>
                                                <option value="ALP English Volume 3">ALP English Volume 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="form-group ">
                                            <textarea name="address" class="form-control" placeholder="Address" id=""></textarea>
                                        </div>
                                        <button class="as_btn" name="submit">Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</section>
<!-- Modals---------- -->
<section>
    <!-- Bootstrap modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-light" style="width: 300px; height: 300px;">
                <div class="modal-body text-center" style="width: 300px; height: 300px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                    <!-- Success icon -->
                    <i class="fas fa-check-circle fa-5x mb-3 text-success"></i>
                    <!-- Your success message content goes here -->
                    <p class="mb-0">Order submitted successfully, ALP Astrology team will contact you shortly. Thank you</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- alp_volume1 -->
<div class="modal fade" id="alp_volume1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" style="width:100% !important;">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title as_heading mt-2" id="staticBackdropLabel" style="font-size:22px;">ALP Volume 1</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body as_font14">
                <div class="synopsis" style="border: 1px solid lightgrey;padding: 10px;">
                    <h5 class="as_font14_subhead">Synopsis :</h5>
                    <p>Introduction to Akshaya Lagna Paddhati (ALP) Astrology, Planetary characteristics, 3 types of Karma, Connection between Dasa Bukthi and Gochar and Remedial temples.</p>
                </div>
                <p>Book price : Rs. 120/-</p>
                <div class="book_contents">
                    <p>Published by Vijaya Printing Press, Coimbatore on 15.06.2019 at Pillaiyarpatti Hall, Sivagangai District.</p>
                    <p>The Chief Guests of Honour who presided the function of releasing the ALP Book Volume – 1 are:</p>
                    <ol>
                        <li>Thiru Shaakthashri Iyyappa Swamigal, Shri Prithyankaraadevi Sarvashakthi Peetam, Sokkanaadhapuram, Sivagangai</li>
                        <li>Thiru.Sivakumar, Shri Kaathyayini Amman Shakthi Peeth, Melavaanchur, Nagapatinam</li>
                        <li>Thiru Ramadoss Swamigal, Pattukottai</li>
                        <li>Thiru.T.Ramadurai Murugan, Deputy Collector, Coimbatore. </li>
                        <li>Tmt. Meenakshi Azhagappan, Industrialist, Chennai</li>
                    </ol>
                    <p class="as_font14_subhead">Special Guests of Honour: </p>
                    <ol>
                        <li>Thiru Meenakshisundaram, Madurai</li>
                        <li>Thiru.K.G.Kumaran, Madurai</li>
                        <li>Thiru.Ponniah Swamy, Madurai</li>
                        <li>Thiru.Pavalakannan, Tanjore</li>
                        <li>Thiru.Navamani Shanmugavel, Madurai</li>
                        <li>Thiru.Babu. Thiruppur</li>
                        <li>Thiru.Gurunagarajan, Sivakasi</li>
                        <li>Thiru. Yuvaraj, Salem</li>
                        <li>Thiru. Selvaraj, Thiruppur.</li>
                    </ol>
                </div>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                <!-- <button type="button" class="btn btn-primary">Understood</button> -->
            </div>
        </div>
    </div>
</div>
<!-- alp_volume2 -->
<div class="modal fade as_font14" id="alp_volume2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" style="margin: auto;" style="width:100% !important;">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title as_heading mt-2" id="staticBackdropLabel" style="font-size:22px;">ALP Volume 2</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="synopsis" style="border: 1px solid lightgrey;padding: 10px;">
                    <h5 class="as_font14_subhead">Synopsis :</h5>
                    <p>Introduction to Akshaya Lagna Paddhati (ALP) Astrology, Planetary characteristics, 3 types of Karma, Connection between Dasa Bukthi and Gochar and Remedial temples.</p>
                </div><br>
                <p style="color:black;">Book price : Rs. 120/-</p>
                <p style="text-indent: 30px;">Published by Pulam Printing Press, Chennai on 20.06.2020 at Shri Prithyankaraadevi Sarvashakthi Peetam, Sokkanaadhapuram, Sivagangai District, presided by Thiru Shaakthashri Iyyappa Swamigal.</p>
                <p><span class="as_font14_subhead">The First book of ALP Volume 2 was released by: </span> Tmt.R.Nagarathinam, Pattukottai</p>
                <p><span class="as_font14_subhead">The First book of ALP Volume 2 was received by:</span> <br>
                    Sarva Saadhagam Shrividya Upasagar Shaakthashree Ramakrishna Sharma (a) Ramani Shastrigal, Rameshwaram</p>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                <!-- <button type="button" class="btn btn-primary">Understood</button> -->
            </div>
        </div>
    </div>
</div>
<!-- alp_volume3 -->
<div class="modal fade" id="alp_volume3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" style="margin: auto;" style="width:100% !important;">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title as_heading mt-2" id="staticBackdropLabel" style="font-size:22px;">ALP Volume 3</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="synopsis" style="border: 1px solid lightgrey;padding: 10px;">
                    <h5 class="as_font14_subhead">Synopsis :</h5>
                    <p>Introduction to Gochar, Characteristics of all the nakshatras in Leo Constellation, Mesha (Aries) Lagna ALP and all the planets with reference to the 12 Bhavas using Gochar – Explained in detailed with helpful insights to make predictions.</p>
                </div><br>
                <p style="color:black;">Book price : Rs. 280/-</p>
                <p style="text-indent: 30px;">Published by Pulam Printing Press, Chennai on 02.09.2021 at Mullai Mahal, Namakkal. </p>
                <p class="as_font14_subhead">The First book of ALP Volume 3 was released by:</p>
                <ol>
                    <li>Jodhida gnani Thiru.Nellai Vasanthan, NKV System of Astrology</li>
                    <li>Samayapuram Thiru.Kadagam Ramaswamy </li>
                </ol>
                <p class="as_font14_subhead">The First book of ALP Volume 3 was received by:</p>
                <p style="text-indent: 30px;">Thiru.Shakthiguru, President of Namakkal Astrologers’ Society.</p>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                <!-- <button type="button" class="btn btn-primary">Understood</button> -->
            </div>
        </div>
    </div>
</div>
<!-- alp_volume4 -->
<div class="modal fade" id="alp_volume4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" style="margin: auto;" style="width:100% !important;">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title as_heading mt-2" id="staticBackdropLabel" style="font-size:22px;">ALP Volume 4</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="synopsis" style="border: 1px solid lightgrey;padding: 10px;">
                    <h5 class="as_font14_subhead">Synopsis :</h5>
                    <p>Introduction to the characteristics of all nakshatras in Sagittarius Constellation, Marriage matching and Horoscope analysis.</p>
                </div><br>
                <p style="color:black;">Book price : Rs. 250/-</p>
                <p style="text-indent: 30px;">Published by Pulam Printing press, Chennai on 17.09.2022 at Dhanalakshmi Kalyana Mandapam, Kovur.</p>
                <p class="as_font14_subhead">The First book of ALP Volume 4 was released by:</p>
                <ol>
                    <li>Thiru. Pranavaaananda Swamigal, Shri Bhuvaneshwari Vidya Peetam, Pudukottai</li>
                    <li>Tmt. Meera Nagarajan, CEO, Kalyana Malai</li>
                </ol>
                <p class="as_font14_subhead">The First book of ALP Volume 4 was received by: </p>
                <p style="text-indent: 40px;">Dr. G. Prabhakaran, Lecturer, Chennai </p>
                <p class="as_font14_subhead">Special guests of Honour were : </p>
                <ol>
                    <li>Thiru. T.V. Mohan, Director, Kalyana Maalai</li>
                    <li>Thiru.T.Sivarajamani Swamigal, Pudukottai</li>
                    <li>Tmt. Sumathishri, Spiritual Speaker, Trichy</li>
                    <li>Thiru.Maharajan, Film Director, Chennai</li>
                    <li>Thiru.Sudhakar, Panchayat President, Ko</li>
                </ol>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                <!-- <button type="button" class="btn btn-primary">Understood</button> -->
            </div>
        </div>
    </div>
</div>
<!-- alp_volume5 -->
<div class="modal fade" id="alp_volume5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" style="margin: auto;" style="width:100% !important;">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title as_heading mt-2" id="staticBackdropLabel" style="font-size:22px;">ALP Volume 5</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="synopsis" style="border: 1px solid lightgrey;padding: 10px;">
                    <h5 class="as_font14_subhead">Synopsis :</h5>
                    <p>Book on Marriage matching, Akshaya Rasi and Nakshatra compatibility, Example horoscopes and Articles written by ALP Astrologers on Marriage matching.</p>
                </div><br>
                <p style="color:black;">Book price : Rs. 300/-</p>
                <p style="text-indent: 30px;">Published by Pulam Printing press, Chennai on 17.09.2022 at Dhanalakshmi Kalyana Mandapam, Kovur.</p>
                <p class="as_font14_subhead">The First book of ALP Volume 5 was released by:</p>
                <ol>
                    <li>Thiru. Pranavaaananda Swamigal, Shri Bhuvaneshwari Vidya Peetam, Pudukottai</li>
                    <li>Tmt. Meera Nagarajan, CEO, Kalyana Malai</li>
                </ol>
                <p class="as_font14_subhead">The First book of ALP Volume 5 was received by: </p>
                <p style="text-indent: 40px;">Dr. G. Prabhakaran, Lecturer, Chennai </p>
                <p class="as_font14_subhead">Special guests of Honour were : </p>
                <ol>
                    <li>Thiru. T.V. Mohan, Director, Kalyana Maalai</li>
                    <li>Thiru.T.Sivarajamani Swamigal, Pudukottai</li>
                    <li>Tmt. Sumathishri, Spiritual Speaker, Trichy</li>
                    <li>Thiru.Maharajan, Film Director, Chennai</li>
                    <li>Thiru.Sudhakar, Panchayat President, Ko</li>
                </ol>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                <!-- <button type="button" class="btn btn-primary">Understood</button> -->
            </div>
        </div>
    </div>
</div>
<!-- alp_volume6 -->
<div class="modal fade" id="alp_volume6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" style="margin: auto;" style="width:100% !important;">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title as_heading mt-2" id="staticBackdropLabel" style="font-size:22px;">ALP Volume 6</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="synopsis" style="border: 1px solid lightgrey;padding: 10px;">
                    <h5 class="as_font14_subhead">Synopsis :</h5>
                    <p>Complete manual/Salient features of Akshaya Lagna Paddhati (ALP) Astrology, Karma in detail, Akshaya Lagna/Gochar/Vimshottari Dasa Bukthi, Akshaya lagna for all 12 bhavas in detail and how to use Akshaya Lagna as a manual in daily life. </p>
                </div><br>
                <p style="color:black;">Book price : Rs. 220/-</p>
                <p style="text-indent: 30px;">Published by ALP Publications, Chennai on 22.07.2023 at R.K.Mahal, Chennai 600 083</p>
                <p class="as_font14_subhead">The First book of ALP Volume 6 was released by:</p>
                <ol>
                    <li>Thiru.P. Singaravel</li>
                    <li>Tmt. S. Padmavathi</li>
                    <li>Thiru. R. Sundaravadivel</li>
                    <li>Tmt. L. Aruljothi</li>
                </ol>
                <p class="as_font14_subhead">The First book of ALP Volume 6 was received by: </p>
                <ol>
                    <li>Thiru. Shanmugam & Fly., Perungalathur, Chennai</li>
                    <li>Thiru. Kanagaraj & Fly., Industrialist, Karur</li>
                </ol>
                <p class="as_font14_subhead">The Second book of ALP Volume 6 was released by:</p>
                <ol>
                    <li>1. Thiru. A.T. Duraikumar, IPS, Inspector General of Police</li>
                    <li>2. Thiru. T. Ramadurai Murugan, District Revenue Officer, Chennai</li>
                </ol>
                <p class="as_font14_subhead">The Second book of ALP Volume 6 was received by: </p>
                <p style="text-indent: 40px;">Teachers of ALP Astrology.</p>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                <!-- <button type="button" class="btn btn-primary">Understood</button> -->
            </div>
        </div>
    </div>
</div>
<!-- alp_thirumana_porutham -->
<div class="modal fade" id="alp_thirumana_porutham" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" style="margin: auto;" style="width:100% !important;">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title as_heading mt-2" id="staticBackdropLabel" style="font-size:22px;">ALP Thirumana Porutham</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="synopsis" style="border: 1px solid lightgrey;padding: 10px;">
                    <h5 class="as_font14_subhead">Synopsis :</h5>
                    <p>Marriage matching in detail using Akshaya Lagna Paddhati (ALP) Astrology, and how to use ALP TP Software for marriage matching purposes.</p>
                </div><br>
                <p style="text-indent: 30px;">Published by ALP Publications, Chennai on 28.10.2023 during Wedding & Beyond Expo 2023 hosted by Kalyana Maalai at Convention centre, Chennai Trade Centre, Nandambakkam </p>
                <p class="as_font14_subhead">The First copy of book - ALP Volume 7 was released by:</p>
                <p style="text-indent: 30px;">Smt. Arularasi Pothuvudaimoorthy, Co-Founder of ALPAIR Foundation, Chennai.</p>
                <p class="as_font14_subhead">The first copy of book - ALP Volume 7 was received by: </p>
                <p style="text-indent: 30px;">Tmt. Meera Nagarajan, CEO, Kalyana Malai</p>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                <!--<button type="button" class="btn btn-primary">Understood</button>-->
            </div>
        </div>
    </div>
</div>

<!-- englis book section=====--- -->
<!-- alp_eng1 -->
<div class="modal fade" id="alp_eng1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" style="width:100% !important;">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title as_heading mt-2" id="staticBackdropLabel" style="font-size:22px;">ALP ENglish Volume 1</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="as_font14_subhead">Synopsis :</h5>
                <p></p>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                <!--<button type="button" class="btn btn-primary">Understood</button>-->
            </div>
        </div>
    </div>
</div>
<!-- alp_eng2 -->
<div class="modal fade" id="alp_eng2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" style="width:100% !important;">
        <div class="modal-content bg-light">
            <div class="modal-header">

                <h5 class="modal-title as_heading mt-2" id="staticBackdropLabel" style="font-size:22px;">ALP ENglish Volume 2</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="as_font14_subhead">Synopsis :</h5>
                <p></p>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                <!--<button type="button" class="btn btn-primary">Understood</button>-->
            </div>
        </div>
    </div>
</div>
<!-- alp_eng3 -->
<div class="modal fade" id="alp_eng3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" style="width:100% !important;">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title as_heading mt-2" id="staticBackdropLabel" style="font-size:22px;">ALP ENglish Volume 3</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="as_font14_subhead">Synopsis :</h5>
                <p></p>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                <!--<button type="button" class="btn btn-primary">Understood</button>-->
            </div>
        </div>
    </div>
</div>
<?php
include('include/footer1.php');
 

// Ensure that the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    // Get form data
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $type = mysqli_real_escape_string($con, $_POST['type']);

    // Escape each element in the selected_book array
    $selected_books = array_map(function ($book) use ($con) {
        return mysqli_real_escape_string($con, $book);
    }, $_POST['selected_book']);

    // Combine the escaped elements into a comma-separated string
    $selected_book = implode(',', $selected_books);

    // Perform the SQL query
    $sql = "INSERT INTO books_enquiry (`book_enq_name`, `book_enq_email`, `book_enq_mobile`, `book_enq_address`, `book_enq_books`,`book_type`)
        VALUES ('$name', '$email', '$mobile', '$address', '$selected_book', '$type')";

    // Execute the SQL query
    if (mysqli_query($con, $sql)) {
        echo "<script>window.location.href = 'books.php?msg=success';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}
?>
<script>
    $(document).ready(function() {
        // Check if the URL contains 'msg=success'
        var urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('msg') && urlParams.get('msg') === 'success') {
            // Show the success modal
            $('#successModal').modal('show');
        }

        // Redirect to courses.php when the modal is closed
        $('#successModal').on('hidden.bs.modal', function() {
            window.location.href = 'books.php';
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
<script>
    new MultiSelectTag('countries') // id
</script>