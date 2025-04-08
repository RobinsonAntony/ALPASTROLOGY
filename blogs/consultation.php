<?php
include('include/header.php');

?>

<style>
    /* a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  color: #c400c6; }
  a:hover, a:focus {
    text-decoration: none !important;
    outline: none !important;
    -webkit-box-shadow: none;
    box-shadow: none; } */
    body,
    html {
        overflow-x: hidden !important;
        /* Hide horizontal scrollbar at the document level */
    }

    button {
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease;
    }

    button:hover,
    button:focus {
        text-decoration: none !important;
        outline: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5 {
        line-height: 1.5;
        font-weight: 400;
        font-family: "Poppins", Arial, sans-serif;
        color: #000;
    }

    .ftco-section {
        padding: 0;
    }

    .ftco-no-pt {
        padding-top: 0;
    }

    .ftco-no-pb {
        padding-bottom: 0;
    }

    .heading-section {
        font-size: 28px;
    }

    .heading-section small {
        font-size: 18px;
    }

    .img {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    ul.ks-cboxtags {
        list-style: none;
        padding: 20px;
    }

    ul.ks-cboxtags li {
        display: block;
    }

    ul.ks-cboxtags li label {
        display: inline-block;
        background-color: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(0, 0, 0, 0.1);
        color: rgba(0, 0, 0, 0.8);
        font-size: 16px;
        border-radius: 4px;
        white-space: nowrap;
        margin: 0 0 10px 0;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
        -webkit-transition: all .2s;
        -o-transition: all .2s;
        transition: all .2s;
        display: block;
    }

    ul.ks-cboxtags li label {
        padding: 10px 20px;
        cursor: pointer;
    }

    ul.ks-cboxtags li label::before {
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        font-family: "FontAwesome";
        font-weight: 900;
        font-size: 24px;
        padding: 4px;
        margin-right: 15px;
        content: "\f1db";
        color: rgba(0, 0, 0, 0.2);
        -webkit-transition: -webkit-transform .3s ease-in-out;
        transition: -webkit-transform .3s ease-in-out;
        -o-transition: transform .3s ease-in-out;
        transition: transform .3s ease-in-out;
        transition: transform .3s ease-in-out, -webkit-transform .3s ease-in-out;
        position: absolute;
        right: 40px;
        margin-top: -5px;
    }

    ul.ks-cboxtags li label span {
        background: #f9e090;
        font-size: 12px;
        padding: 2px 5px;
        border-radius: 30px;
        color: #fff;
        margin-left: 10px;
    }

    ul.ks-cboxtags li input[type="checkbox"]:checked+label::before {
        content: "\f058";
        -webkit-transform: rotate(-360deg);
        -ms-transform: rotate(-360deg);
        transform: rotate(-360deg);
        -webkit-transition: -webkit-transform .3s ease-in-out;
        transition: -webkit-transform .3s ease-in-out;
        -o-transition: transform .3s ease-in-out;
        transition: transform .3s ease-in-out;
        transition: transform .3s ease-in-out, -webkit-transform .3s ease-in-out;
        color: #fff;
    }

    ul.ks-cboxtags li input[type="checkbox"]:checked+label {
        border: 1px solid orange;
        /* background-color: #c400c6; */
        background-color: orange;
        color: #fff;
        -webkit-transition: all .2s;
        -o-transition: all .2s;
        transition: all .2s;
    }

    ul.ks-cboxtags li input[type="checkbox"]:checked+label span {
        background: #fff;
        color: #000;
    }

    ul.ks-cboxtags li input[type="checkbox"] {
        display: absolute;
    }

    ul.ks-cboxtags li input[type="checkbox"] {
        position: absolute;
        opacity: 0;
    }



    .hidden-checkbox {
        display: none;
    }

    .span {
        border: 1px solid #fff;
        padding: 10px;
        display: block;
        position: relative;
        margin: 10px;
        cursor: pointer;
    }

    .span:before {
        background-color: white;
        color: white;
        content: " ";
        display: block;
        border-radius: 50%;
        border: 1px solid grey;
        position: absolute;
        top: -5px;
        left: -5px;
        width: 25px;
        height: 25px;
        text-align: center;
        line-height: 28px;
        transition-duration: 0.4s;
        transform: scale(0);
    }

    .span img {
        height: 100px;
        width: 100px;
        transition-duration: 0.2s;
        transform-origin: 50% 50%;
    }

    :checked+.span {
        border-color: #ddd;
    }

    :checked+.span:before {
        content: "✓";
        background-color: red;
        border: 1px solid orangered;
        transform: scale(1);
    }

    :checked+.span img {
        transform: scale(0.9);
    }

    .user_green {
        border: 4px solid lawngreen;
    }

    .user_green {
        content: "";
        width: 10px;
        height: 10px;
        background-color: green;
        /* position: absolute; */
    }

    .user_red {
        border: 4px solid orangered;
    }
</style>


<!--<div class="spinner-container">-->
<!--    <img src="./assets/images/horoscope.gif" alt="Loading Spinner">-->
<!--</div>-->


<section class="as_breadcrum_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 style="color:white;">Consultation</h1>

                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Consultation</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="as_appointment_wrapper as_padderBottom10 as_padderTop10">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="as_heading as_heading_center">Consultation</h1>

                <p class="as_font14 as_padderBottom10 as_padderTop10">For inquiries and consultation, please contact us at:</p>
                <p class="as_font14 as_padderBottom_a20 "> Terms & Conditions</P>
                <p class="as_font14 as_padderBottom_a20 revealy"> Please read the following rules and regulations carefully before booking your appointment and provide your consent by accepting the document below.</P>
                <p class="as_font14 as_padderBottom_a20 "> 1. Consultation charges will be based on the services selected by the client.</P>
                <p class="as_font14 as_padderBottom_a20 revealy"> 2 Appointment confirmation will be sent from the ALP office to your respective WhatsApp phone number.</P>
                <p class="as_font14 as_padderBottom_a20 revealy"> 3.Priority based Consultation will be provided for clients based on the urgency of the situation, provided priority appointment slots are available at our end.</P>
                <p class="as_font14 as_padderBottom_a20 revealy">4. Consultation will be provided by reputed ALP Astrologers.</P>
                <p class="as_font14 as_padderBottom_a20 revealy"> 5. Questions pertaining to longevity and life span is strictly not entertained.</P>
                <p class="as_font14 as_padderBottom_a20 revealy"> 6. Questions pertaining to determination of sex of baby during pregnancy is strictly not entertained.</P>
                <p class="as_font14 as_padderBottom_a20 revealy"> 7. All predictions are completely based on the birth details and information provided by the client. </P>
                <p class="as_font14 as_padderBottom_a20 revealy"> 8. We do not guarantee accuracy of predictions, as it may vary, if the information provided by the client is incorrect or inadequate.</P>

                <!--<p class="as_font14 as_padderBottom_a20 revealy">NOTE: Dr.S. Pothuvudaimoorthy will not be taken any appointment/consultation, the reputed ALP Astrologers will be assigned by Dr.S.Pothuvudaimoorthy from ALP Office.</P>-->
            </div>
            <?php
            $prefer_Date = $_GET['selected_date'];
            if (!empty($prefer_Date)) {
            ?>
                <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12">
                    <form class="as_appointment_form" method="post" action="">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 as_font14_subhead">
                                Make an Appointment</br>
                                <div class="form-group revealx as_font14">
                                    <input type="date" placeholder="Preferred Date" name="date" class="form-control preferDate" onchange="checkAvailability()" value="<?= $prefer_Date ?>">
                                </div>
                                <div class="form-group revealx as_font14">
                                    <input type="text" placeholder="Preferred Time" name="time" class="form-control as_timepicker">
                                    <span><img src="assets/images/svg/clock.svg" alt=""></span>
                                </div>
                                <div class="form-group revealx as_font14">
                                    <input type="text" name="username" value="" placeholder="Name" class="form-control" onkeyup="this.value=this.value.replace(/[^A-z]/g,'');" required>
                                    <span><img src="assets/images/svg/user1.svg" alt=""></span>
                                </div>

                                <div class="form-group revealx as_font14">
                                    <input type="text" placeholder="Phone Number" name="mobile" class="form-control" required>
                                    <span><img src="assets/images/svg/phone1.svg" alt=""></span>
                                </div>

                                <div class="form-group revealx as_font14">
                                    <input type="text" name="email" value="" placeholder="Email" class="form-control" required pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
                                    <span><img src="assets/images/svg/mail1.svg" alt=""></span>
                                </div>

                                <div class="form-group  revealx as_font14">
                                    <input type="text" name="address" value="" placeholder="City/Country" class="form-control">
                                    <!--<textarea name="address" class="form-control" placeholder="City/Country" id=""></textarea>-->
                                    <span><img src="assets/images/svg/pin.svg" alt=""></span>
                                </div>
                                <div class="form-group  revealx as_font14" style="color:black;">
                                    <select class="form-select form-control  mb-3" name="consultation_mode" aria-label=".form-select-lg example">
                                        <option>Mode of Consultation</option>
                                        <option value="Voice Call">Voice Call</option>
                                        <option value="Video Call">Video Call</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">



                                <div class="form-group">
                                    <div class="as_select_box as_font14_subhead">
                                        Select Services</br>

                                        <section class="ftco-section as_font14">


                                            <div class="row justify-content-center">

                                                <ul class="ks-cboxtags">
                                                    <li class="revealx">
                                                        <input type="checkbox" id="checkboxOne" name="services[]" value="ALPAstrology">
                                                        <label for="checkboxOne">ALP Astrology</label>
                                                    </li>
                                                    <li class="revealx">
                                                        <input type="checkbox" id="checkboxSix" value="services[]">
                                                        <label for="checkboxSix">ALP Thirumana Porutham</label>
                                                    </li>

                                                    <li class="revealx">
                                                        <input type="checkbox" id="checkboxThree" value="services[]">
                                                        <label for="checkboxThree">ALP Numerology</label>
                                                    </li>
                                                    <li class="revealx">
                                                        <input type="checkbox" id="checkboxFour" value="services[]">
                                                        <label for="checkboxFour">ALP Gemology</label>
                                                    </li>
                                                    <li class="revealx">
                                                        <input type="checkbox" id="checkboxFive" value="services[]">
                                                        <label for="checkboxFive">ALP Prasannam</label>
                                                    </li>
                                                    <li class="revealx">
                                                        <input type="checkbox" id="checkboxTwo" name="services[]" value="ALPVastu">
                                                        <label for="checkboxTwo">ALP Vastu</label>
                                                    </li>

                                                </ul>

                                            </div>

                                        </section>

                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 as_font14_subhead">Choose any 2 Astrologers</div>
                            <?php
                            if (isset($_GET['selected_date'])) {
                                // Assuming $con is your database connection
                                $preferred_date = $_GET['selected_date'];

                                $sql_users_appointments = "SELECT u.user_id, u.user_image, u.user_name, u.user_desig
                                    FROM users AS u
                                    LEFT JOIN (
                                        SELECT asign_id, COUNT(*) AS num_appointments
                                        FROM appt_asign
                                        WHERE apt_date = '$preferred_date'
                                        GROUP BY asign_id
                                    ) AS a ON u.user_id = a.asign_id 
                                    LEFT JOIN `designations` as d ON u.user_desig = d.desig_id
                                    WHERE d.desig_name ='Astrologer' AND (a.num_appointments < 10 OR a.num_appointments IS NULL)";

                                $sql_res = mysqli_query($con, $sql_users_appointments);

                                if ($sql_res) {
                                    echo '<div class="row">';
                                    $count = 0;
                                    while ($row = mysqli_fetch_assoc($sql_res)) {
                                        $user_image = $row['user_image'];
                                        $user_name = $row['user_name'];
                                        $user_id = $row['user_id'];

                                        echo '<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 mb-4 mx-auto">';
                                        echo '<input type="checkbox" id="userCheckbox' . $user_id . '" name="selected_users[]" class="hidden-checkbox userCheckbox" value="' . $user_id . '">';
                                        echo '<label class="span" for="userCheckbox' . $user_id . '">';
                                        echo '<img src="./admin/' . $user_image . '" alt="' . $user_name . '" class="img-fluid rounded-circle user_image" style="width: 100px;height: 100px;">';
                                        echo '</label>';
                                        echo '</div>';
                                    }
                                    echo '</div>';
                                } else {
                                    echo "Error executing SQL query: " . mysqli_error($con);
                                }
                            }
                            ?>
                            <p><b>Note :</b></p>
                            <li> Consultation will ONLY be given by reputed ALP astrologers assigned by Dr. S. Pothuvudaimoorthy.</li>
                            <li> Dr. S. Pothuvudaimoorthy DOES NOT give any personalised consultation for any of these above mentioned appointments. </li><br><br>

                            <div class="col-lg-12 " style="margin: -8px;">
                                <input type="checkbox" id="" name="s" value="" required>
                                <label>I agree to all the above mentioned terms and conditions and hereby give my consent for taking ALP consultation services.</label>
                            </div> <br>
                            <div class="col-lg-12 " style="margin: -8px;margin-top:10px;">
                                <input type="checkbox" id="" name="s" value="" required>
                                <label>Signature of the client.</label>
                            </div><br><br>
                            <div class="col-lg-12 ">
                                <input type="radio" id="" name="ac_req" value="Accept" required>
                                <label>Accept</label>
                                <input type="radio" id="" name="ac_req" value="Deny" required>
                                <label>Deny</label>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button class="as_btn" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            <?php
            } else {
            ?>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 as_font14_subhead" style="width: 30%;margin:auto;">
                        <b>Make an Appointment</b></br>
                        <div class="form-group revealx as_font14 Preferred ">
                            <input type="date" placeholder="Preferred Date" name="date" class="form-control preferDate" onchange="checkAvailability()" style="width: 200px;">

                        </div>
                    </div><br>
                    <hr>
                    <?php
                    $sql_users = "SELECT * FROM `users` as a LEFT JOIN `admin` as b ON a.user_id = b.admin_id where a.user_desig=9 or a.user_desig=7 ";

                    $sql_res = mysqli_query($con, $sql_users);

                    if ($sql_res) {
                        echo '<div class="row">';
                        while ($row = mysqli_fetch_assoc($sql_res)) {
                            $user_image = $row['user_image'];
                            $user_name = $row['user_name'];
                            $user_id = $row['user_id'];


                            $user_status = $row['admin_live_status'];
                            $user_class_color = '';
                            if ($user_status == 0) {
                                $user_class_color = "user_green";
                            } else {
                                $user_class_color = "user_red";
                            }

                            echo '<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 mb-4 mx-auto">';
                            echo '<img src="./admin/' . $user_image . '" alt="' . $user_name . '" class="img-fluid rounded-circle user_image ' . $user_class_color . '" style="width: 100px;height: 100px;border:">';
                            echo '</div>';
                        }
                        echo '</div>';
                    } else {
                        echo "Error executing SQL query: " . mysqli_error($con);
                    }
                    ?>

                </div>
        </div>
    <?php
            }
    ?>

    <script>
        function checkAvailability() {
            // Retrieve the selected date from the input field
            var selectedDate = document.querySelector('.preferDate').value;

            // Modify the SQL query based on the selected date
            var sqlQuery = "SELECT u.user_id, u.user_image, u.user_name, u.user_desig " +
                "FROM users AS u " +
                "LEFT JOIN ( " +
                "    SELECT asign_id, COUNT(*) AS num_appointments " +
                "    FROM appt_asign " +
                "    WHERE apt_date = '" + selectedDate + "' " +
                "    GROUP BY asign_id " +
                ") AS a ON u.user_id = a.asign_id " +
                "LEFT JOIN `designations` as d ON u.user_desig = d.desig_id " +
                // "WHERE d.desig_name ='Astrologer' or d.desig_name='Founder' AND (a.num_appointments < 10 OR a.num_appointments IS NULL)";
                 "WHERE d.desig_id in (9,7) AND (a.num_appointments < 10 OR a.num_appointments IS NULL)";
            // Log the modified SQL query for debugging purposes
            console.log(sqlQuery);

            // You can use the modified SQL query in your PHP code or any other server-side logic
            // ...

            // Continue with any additional actions or updates you need to perform
        }
    </script>
    </div>
    </div>
</section>
<section>
    <!-- Bootstrap modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-light" style="width: 300px; height: 300px;">
                <div class="modal-body text-center" style="width: 300px; height: 300px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                    <!-- Success icon -->
                    <i class="fas fa-check-circle fa-5x mb-3 text-success"></i>
                    <!-- Your success message content goes here -->
                    <p class="mb-0">Consultation request sent successfully, our office person will contact you shortly and schedule the appointment. <br> Thank you</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function checkAvailability() {
        var selectedDate = document.querySelector('.preferDate').value;
        var baseUrl = window.location.origin + window.location.pathname;
        var newUrl = baseUrl + '?selected_date=' + encodeURIComponent(selectedDate);
        window.location.href = newUrl;
    }
</script>
<?php
include('include/footer.php');

// Ensure that the form is submitted
if (isset($_POST['submit'])) {
    // Your database connection code here
    // Assuming $con is your database connection

    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $ac_req = $_POST['ac_req'];
    $consultation_mode = $_POST['consultation_mode'];
    $date = date("Y-m-d", strtotime($_POST['date']));
    $time = date("H:i:s", strtotime($_POST['time']));

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle invalid email address (you may want to redirect or show an error message)
        echo "Invalid email address";
        exit;
    }

    // Sanitize inputs to prevent SQL injection
    $username = mysqli_real_escape_string($con, $username);
    $email = mysqli_real_escape_string($con, $email);
    $mobile = mysqli_real_escape_string($con, $mobile);
    $ac_req = mysqli_real_escape_string($con, $ac_req);
    $address = mysqli_real_escape_string($con, $address);
    $date = mysqli_real_escape_string($con, $date);
    $time = mysqli_real_escape_string($con, $time);
    $consultation_mode = mysqli_real_escape_string($con, $consultation_mode);

    // Handle multiple services selected
    if (isset($_POST['services']) && is_array($_POST['services'])) {
        $services = implode(", ", $_POST['services']);
    } else {
        $services = ""; // Default value if no services selected
    }

    // Perform the SQL query
    $sql = "INSERT INTO appointment (apt_user_name, apt_user_email, apt_user_mobile, apt_user_address, apt_date, apt_time, apt_services, apt_mode)
            VALUES ('$username', '$email', '$mobile', '$address', '$date', '$time', '$services', '$consultation_mode')";

    // Execute the SQL query
    if (mysqli_query($con, $sql)) {
        $last_insert_id = mysqli_insert_id($con);

        // Loop through the selected users and insert them one by one
        foreach ($_POST['selected_users'] as $selected_user) {
            $selected_user = mysqli_real_escape_string($con, $selected_user);

            $sql2 = "INSERT INTO `appt_asign`(`apt_for_id`, `asign_id`, `apt_date`) VALUES ('$last_insert_id','$selected_user','$date')";

            if (!mysqli_query($con, $sql2)) {
                echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
            }
        }

        echo "<script>window.location.href = 'consultation.php?msg=success';</script>";
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
            window.location.href = 'consultation.php';
        });
    });
</script>

<script>
    const phoneInputField = document.querySelector("#phone");
    const countryDropdown = document.querySelector("#country");
    const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        separateDialCode: true, // This option enables the separate dial code in the input field
        dropdownContainer: document.body, // Appends the country dropdown to the body
        preferredCountries: ["us", "gb", "ca"], // Optional: Set preferred countries
    });

    countryDropdown.addEventListener("change", function() {
        const selectedCountry = countryDropdown.value;
        phoneInput.setCountry(selectedCountry);
    });
</script>

<script>
    // JavaScript to limit checkbox selection to only two checkboxes
    var checkboxes = document.querySelectorAll('.userCheckbox');
    var maxCheck = 2;
    var lastChecked = null;

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var checkedCount = document.querySelectorAll('.userCheckbox:checked').length;
            if (checkedCount > maxCheck) {
                this.checked = false;
            }
        });
    });
</script>