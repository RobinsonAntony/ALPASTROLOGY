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
    body, html {
    overflow-x: hidden !important; /* Hide horizontal scrollbar at the document level */
}

button {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  button:hover, button:focus {
    text-decoration: none !important;
    outline: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important; }

h1, h2, h3, h4, h5,
.h1, .h2, .h3, .h4, .h5 {
  line-height: 1.5;
  font-weight: 400;
  font-family: "Poppins", Arial, sans-serif;
  color: #000; }

.ftco-section {
  padding: 0; }

.ftco-no-pt {
  padding-top: 0; }

.ftco-no-pb {
  padding-bottom: 0; }

.heading-section {
  font-size: 28px;
   }
  .heading-section small {
    font-size: 18px; }

.img {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center; }

ul.ks-cboxtags {
  list-style: none;
  padding: 20px; }
  ul.ks-cboxtags li {
    display: block; }
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
      display: block; }

ul.ks-cboxtags li label {
  padding: 10px 20px;
  cursor: pointer; }
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
    margin-top: -5px; }
  ul.ks-cboxtags li label span {
    background: #f9e090;
    font-size: 12px;
    padding: 2px 5px;
    border-radius: 30px;
    color: #fff;
    margin-left: 10px; }

ul.ks-cboxtags li input[type="checkbox"]:checked + label::before {
  content: "\f058";
  -webkit-transform: rotate(-360deg);
  -ms-transform: rotate(-360deg);
  transform: rotate(-360deg);
  -webkit-transition: -webkit-transform .3s ease-in-out;
  transition: -webkit-transform .3s ease-in-out;
  -o-transition: transform .3s ease-in-out;
  transition: transform .3s ease-in-out;
  transition: transform .3s ease-in-out, -webkit-transform .3s ease-in-out;
  color: #fff; }

ul.ks-cboxtags li input[type="checkbox"]:checked + label {
  border: 1px solid orange;
  /* background-color: #c400c6; */
  background-color: orange;
  color: #fff;
  -webkit-transition: all .2s;
  -o-transition: all .2s;
  transition: all .2s; }
  ul.ks-cboxtags li input[type="checkbox"]:checked + label span {
    background: #fff;
    color: #000; }

ul.ks-cboxtags li input[type="checkbox"] {
  display: absolute; }

ul.ks-cboxtags li input[type="checkbox"] {
  position: absolute;
  opacity: 0; }

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
            <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12">
                <form class="as_appointment_form" method="post" action="">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 as_font14_subhead">
                           Make an Appointment</br>
                            <div class="form-group revealx as_font14">
                                <input type="text" name="username" value="" placeholder="Name" class="form-control" onkeyup="this.value=this.value.replace(/[^A-z]/g,'');" required>
                                <span><img src="assets/images/svg/user1.svg" alt=""></span>
                            </div>
                            <div class="form-group revealx as_font14">
                                <input type="text" placeholder="Preferred Date" name="date" class="form-control as_datepicker">
                                <span><img src="assets/images/svg/calendar.svg" alt=""></span>
                            </div>
                            <div class="form-group revealx as_font14">
                                <input type="text" placeholder="Preferred Time" name="time" class="form-control as_timepicker">
                                <span><img src="assets/images/svg/clock.svg" alt=""></span>
                            </div>
                            <div class="form-group revealx as_font14">
                                <input type="text" placeholder="Phone Number" name="mobile" class="form-control" required>
                                <span><img src="assets/images/svg/phone1.svg" alt=""></span>
                            </div>
                            <!--<div class="form-group revealx">-->
                            <!--    <div style="position: relative;">-->
                            <!--        <input type="number" placeholder="Phone Number" name="mobile" class="form-control" id="phone" required style="width: 100%;">-->
                            <!--        <span><i class="fa-solid fa-phone-volume"></i></span>-->
                            <!--    </div>-->
                            <!--</div>-->
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
                                    <option >Mode of Consultation</option>
                                    <option value="Voice Call">Voice Call</option>
                                    <option value="Video Call">Video Call</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <!-- <div class="form-group">
                                        <div class="as_select_box">
                                            <select class="form-control" data-placeholder="Select service">
												 <option value="Select service">-Select service-s</option>
                                                <option value="ALP Astrology">ALP Astrology</option>
                                                <option value="ALP Vastu">ALP Vastu</option>
												 <option value="ALP Numerology">ALP Numerology</option>
												  <option value="ALP Gemology">ALP Gemology</option>
												  <option value="ALP Prasannam">ALP Prasannam</option>
                                            </select>
                                        </div> 
                                    </div> -->
                           
                            <div class="form-group">
                                <div class="as_select_box as_font14_subhead">
                                    Select Services</br>
                                    <!-- <input type="checkbox" id="ALPAstrology" name="ALPAstrology" value="ALPAstrology">
                                    <label for="ALP Astrology"> ALP Astrology</label><br>
                                    <input type="checkbox" id="ALPVastu" name="ALPVastu" value="ALPVastu">
                                    <label for="ALP Vastu"> ALP Vastu</label><br>
                                    <input type="checkbox" id="ALPNumerology" name="ALPNumerology" value="ALPNumerology">
                                    <label for="ALP Numerology"> ALP Numerology</label> <br>
                                    <input type="checkbox" id="ALPGemology" name="ALPGemology" value="ALPGemology">
                                    <label for="ALP Gemology"> ALP Gemology</label><br>
                                    <input type="checkbox" id="ALPPrasannam" name="ALPPrasannam" value="ALPPrasannam">
                                    <label for="ALP Prasannam"> ALP Prasannam</label><br>
                                    <input type="checkbox" id="ALPthirumanaporutham" name="ALPthirumanaporutham" value="ALPthirumanaporutham">
                                    <label for="ALP Thirumana Porutham"> ALP Thirumana Porutham</label> <br> -->
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
                                                    <input type="checkbox" id="checkboxTwo"  name="services[]" value="ALPVastu">
                                                    <label for="checkboxTwo">ALP Vastu</label>
                                                </li>
                                                
                                            </ul>
                                        
                                        </div>

		                            </section>
                                
                                </div>
                            </div>

                        </div>
                        <p><b>Note :</b></p>
                        <li> Consultation will ONLY be given by reputed ALP astrologers assigned by Dr. S. Pothuvudaimoorthy.</li>
                        <li> Dr. S. Pothuvudaimoorthy DOES NOT give any personalised consultation for any of these above mentioned appointments. </li><br><br>
                        
                        <div class="col-lg-12">
                             <input type="checkbox" id=""  name="s" value="" required>
                             <label>I agree to all the above mentioned terms and conditions and hereby give my consent for taking ALP consultation services.</label>
                        </div><br>
                        <div class="col-lg-12">
                             <input type="checkbox" id=""  name="s" value="" required>
                             <label>Signature of the client.</label>
                        </div><br>
                        <div class="col-lg-12">
                             <input type="radio" id=""  name="ac_req" value="Accept" required>
                             <label>Accept</label>
                             <input type="radio" id=""  name="ac_req" value="Deny" required>
                             <label>Deny</label>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button class="as_btn" name="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
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
                    <p class="mb-0">Applying Succesfully</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include('include/footer.php');


// Ensure that the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
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
    $sql = "INSERT INTO appointment (apt_user_name, apt_user_email, apt_user_mobile, apt_user_address, apt_date, apt_time, apt_services,apt_mode,apt_req)
        VALUES ('$username', '$email', '$mobile', '$address', '$date', '$time', '$services','$consultation_mode','$ac_req')";

    // Execute the SQL query
    if (mysqli_query($con, $sql)) {
        echo "<script>window.location.href = 'consultation.php?msg=success';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}
?>
<script>
$(document).ready(function () {
    // Check if the URL contains 'msg=success'
    var urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('msg') && urlParams.get('msg') === 'success') {
        // Show the success modal
        $('#successModal').modal('show');
    }

    // Redirect to courses.php when the modal is closed
    $('#successModal').on('hidden.bs.modal', function () {
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

  // Populate the country dropdown with the list of countries
//   for (let country in window.intlTelInputGlobals.getCountryData()) {
//     const option = document.createElement("option");
//     option.value = country;
//     option.text = `+${window.intlTelInputGlobals.getCountryData()[country].dialCode} - ${window.intlTelInputGlobals.getCountryData()[country].name}`;
//     countryDropdown.appendChild(option);
//   }

  // Listen for changes in the country dropdown and update the phone input accordingly
  countryDropdown.addEventListener("change", function () {
    const selectedCountry = countryDropdown.value;
    phoneInput.setCountry(selectedCountry);
  });
</script>