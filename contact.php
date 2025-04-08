<?php
include('include/header.php');

?>
<style>
        body, html {
    overflow-x: hidden !important; /* Hide horizontal scrollbar at the document level */
}

</style>
<!--<div class="spinner-container">-->
<!--    <img src="./assets/images/horoscope.gif" alt="Loading Spinner">-->
<!--</div>-->

<section class="as_breadcrum_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Contact Us</h1>

                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="as_contact_wrapper as_padderBottom40 as_padderTop50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 class="as_heading as_heading_center">For inquiries about ALP Astrology, Consultations, Courses, Softwares and Books please contact us at:</h5>
                
                <p class="as_font14 as_padderBottom50 as_padderTop20"><span style="color:red">ALP Astrology: Revealing Fundamentals and navigating towards a Brighter Future </span></p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="as_contact_detail">
                    <ul>
                        <li class="as_info_box">
                            <span class="as_icon revealy">
                                <img src="assets/images/svg/pin.svg" alt="">
                            </span>
                            <p class="revealx">F 2, 1st Floor, Shiva Homes, </br>Jayalakshmi Nagar, Anandha Sayanam,
                                Moulivakkam, </br> Chennai, TamilNadu, India, Pincode: 600116</p>
                        </li>
                        <li class="as_info_box">
                            <span class="as_icon revealy">
                                <img src="assets/images/svg/contact.svg" alt="">
                            </span>
                            <p class="revealx">+91 8000115656 , +91 8000295656</p>
                        </li>
                        <li class="as_info_box">
                            <span class="as_icon revealy">
                                <img src="assets/images/svg/message.svg" alt="">
                            </span>
                            <p class="revealx"><a href="javascript:;">alpastrology.org@gmail.com alpastrologyoffice@gmail.com </a></p>
                        </li>
                    </ul>
                    <div class="as_map revealx">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15549.099209486514!2d80.1423219!3d13.0181644!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526522ae1e30b3%3A0x617a8621ab4447ad!2sALP%20Astrology!5e0!3m2!1sen!2sin!4v1698842560727!5m2!1sen!2sin" width="100%" height="318px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <form class="as_appointment_form"  method="post" action="">
                    <div class="form-group revealx">
                        <input type="text" name="name" value="" placeholder="Name" class="form-control" required>
                    </div>
                    <div class="form-group revealy">
                        <input type="text" name="mobile" value="" placeholder="Mobile No" class="form-control" required>
                    </div>
                    <div class="form-group revealx">
                        <input type="text" name="email" value="" placeholder="Email Address" class="form-control">
                    </div>
                    <div class="form-group revealy">
                        <input type="text" name="subject" placeholder="Subject" class="form-control">
                    </div>
                    <div class="form-group as_padderBottom10 revealx">
                        <textarea name="message" class="form-control" placeholder="Message" id=""></textarea>
                    </div>
                    <button class="as_btn revealx"  name="submit">Send Message</button>
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
                    <p class="mb-0">Thankyou for Contacting ALP Astrology</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include('include/footer1.php');


// Ensure that the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // Perform the SQL query
    $sql = "INSERT INTO contact (cont_username, cont_mobile, cont_email, cont_subject, cont_message)
            VALUES ('$name', '$mobile', '$email', '$subject', '$message')";

    // Execute the SQL query
    if (mysqli_query($con, $sql)) {
        echo "<script>window.location.href = 'contact.php?msg=success';</script>";
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
            window.location.href = 'contact.php';
        });
    });
</script>