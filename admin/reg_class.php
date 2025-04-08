<?php include('include/header.php');
include('include/config.php');



?>

<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row  bg-white rounded mx-0">
        <div class="col-md-12 ">
            <div class="row my-2">
                <div class="col-md-12">
                    <h3 class="text-center" style="background-color:#ffcc99;">Add Class Registration </h3>
                </div>
                <form action="actions/reg_insert" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4 form-group text-end mt-2"  >
                        <label for="class_date_time">Class Date :</label>
                        
                    </div>
                    <div class="col-md-6 form-group mt-2">
                        <input type="date" name="classdate" class="form-control" id="classdate" value="">
                     
                    </div>
                    <div class="col-md-4 form-group text-end mt-2"  >
                       <label for="class_name">Name :</label>
                        
                    </div>
                    <div class="col-md-6 form-group mt-2">
                         <input type="text" name="name" class="form-control" id="name" value="">
                     
                    </div>
                    
                    <div class="col-md-4 form-group text-end mt-2"  >
                        <label for="class_name">Emailid :</label>
                        
                    </div>
                    <div class="col-md-6 form-group mt-2">
                        <input type="text" name="emailid" class="form-control" id="emailid" value="">
                     
                    </div>
                    <div class="col-md-4 form-group text-end mt-2"  >
                        <label for="class_name">Address :</label>
                        
                    </div>
                    <div class="col-md-6 form-group mt-2">
                         <input type="text" name="address" class="form-control" id="address" value="">
                     
                    </div>
                    
                    
                    
                    <div class="col-md-4 form-group text-end mt-2"  >
                        <label for="class_name">Contact No. :</label>
                        
                    </div>
                    <div class="col-md-6 form-group mt-2">
                       <input type="text" name="contactno" class="form-control" id="contactno" value="">
                     
                    </div>
                    <div class="col-md-4 form-group text-end mt-2"  >
                        <label for="class_name">Whatsapp No. :</label>
                        
                    </div>
                    <div class="col-md-6 form-group mt-2">
                         <input type="text" name="whatsappno" class="form-control" id="whatsappno" value="">
                     
                    </div>
                    
                    
                     <div class="col-md-4 form-group text-end mt-2"  >
                        <label for="class_date_time">Date of Birth :</label>
                        
                    </div>
                    <div class="col-md-6 form-group mt-2">
                       <input type="date" name="dob" class="form-control" id="dob" value="">
                     
                    </div>
                    <div class="col-md-4 form-group text-end mt-2"  >
                         <label for="class_date_time">Time of Birth :</label>
                        
                    </div>
                    <div class="col-md-6 form-group mt-2">
                         <input type="time" name="timeofbirth" class="form-control" id="timeofbirth" value="">
                     
                    </div>
                    
                    
                    <div class="col-md-4 form-group text-end mt-2"  >
                        <label for="class_name">Place of Birth :</label>
                        
                    </div>
                    <div class="col-md-6 form-group mt-2">
                      <input type="text" name="placeofbirth" class="form-control" id="placeofbirth" value="">
                    </div>
                    <div class="col-md-4 form-group text-end mt-2"  >
                         <label for="class_name">Life time event 1:</label>
                        
                    </div>
                    <div class="col-md-6 form-group mt-2">
                         <input type="text" name="lifetimeevent1" class="form-control" id="lifetimeevent1" value="">
                     
                    </div>
                    
                    
                    <div class="col-md-4 form-group text-end mt-2"  >
                      <label for="class_name">Life time event 2:</label>
                        
                    </div>
                    <div class="col-md-6 form-group mt-2">
                    <input type="text" name="lifetimeevent2" class="form-control" id="lifetimeevent2" value="">
                    </div>
                    <div class="col-md-4 form-group text-end mt-2"  >
                        <label for="class_name">Work / Business details :</label>
                        
                    </div>
                    <div class="col-md-6 form-group mt-2">
                          <input type="text" name="workdetails" class="form-control" id="workdetails" value="">
                     
                    </div>
                    
                    
                    <div class="col-md-4 form-group text-end mt-2"  >
                      <label for="class_name">Photo :</label>
                        
                    </div>
                    <div class="col-md-6 form-group mt-2">
                     <input type="file" name="photo" class="form-control" id="photo" value="">
                    </div>
                    <div class="col-md-4 form-group text-end mt-2"  >
                         <label for="class_link">Referred by :</label>
                        
                    </div>
                    <div class="col-md-6 form-group mt-2">
                          <select class="form-select" aria-label="Default select example" name="referredby"  id="referredby">
                              <option selected>Website</option>
                              <option value="Facebook">Facebook</option>
                              <option value="Youtube">Youtube</option>
                              <option value="ALP Astrologer">ALP Astrologer</option>
                              <option value="Others">Others</option>
                            </select>
                     
                    </div>
                    
                    
                    <div class="col-md-4 form-group text-end mt-2"  >
                       <label for="class_link">Class Level :</label>
                        
                    </div>
                    <div class="col-md-6 form-group mt-2">
                     <select class="form-select" aria-label="Default select example" name="classlevel"  id="classlevel">
                              <option selected>select</option>
                              <option value="Basic">Basic</option>
                              <option value="Advance">Advance</option>
                            </select>
                    </div>
                    <div class="col-md-4 form-group text-end mt-2"  >
                          <label for="class_link">Class Medium :</label>
                        
                    </div>
                    <div class="col-md-6 form-group mt-2">
                          <select class="form-select" aria-label="Default select example" name="classmedium"  id="classmedium">
                              <option selected>select</option>
                              <option value="Tamil">Tamil</option>
                              <option value="English">English</option>
                            </select>
                     
                    </div>
                     <div class="form-group text-center mt-2">
                            <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>
                        </div>
                </div>
                </form>
            </div>

        </div>
    </div><br>
    <a href="registration" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Back </a>
</div>
<!-- Blank End -->

<?php include('include/footer.php'); ?>

<!-- Add the SweetAlert2 library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
        $('#addclassForm').submit(function() {

            // Get the values of the Category Name and Category Description input fields
            var categoryName = $('#class_name').val().trim();
            var classDateTime = $('#class_date_time').val().trim();
            var class_link = $('#class_link').val();
            var class_desc = $('#class_desc').val();

            // Check if Category Name is empty
            if (categoryName === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Class Name cannot be empty.'
                });
                return false; // Prevent form submission
            }

            // Check if Category Description is empty
            if (classDateTime === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Class Date and Time cannot be empty.'
                });
                return false; // Prevent form submission
            }

            // Check if an image file is selected
            if (class_link === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Class Link Cannot be empty.'
                });
                return false; // Prevent form submission
            }
            if (class_desc === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Class Description cannot be empty.'
                });
                return false; // Prevent form submission
            }
            // // Check if the selected file has a valid extension (e.g., jpg, jpeg, png, gif)
            // var validExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            // var fileExtension = class_link.split('.').pop().toLowerCase();
            // if ($.inArray(fileExtension, validExtensions) === -1) {
            //     Swal.fire({
            //         icon: 'error',
            //         title: 'Error',
            //         text: 'Invalid file extension. Only jpg, jpeg, png, and gif files are allowed.'
            //     });
            //     return false; // Prevent form submission
            // }

            // If all validations pass, allow the form to be submitted
            return true;
        });
    });
</script>