<?php include('include/header.php');
include('include/config.php');



?>

<!-- Blank Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row  bg-white rounded mx-0">
        <div class="col-md-12 ">
            <div class="row my-2">
                <div class="col-md-12">
                    <h3>Add Online Class</h3>
                </div>
                <div class="col-md-8">
                    <form action="actions/insert_class.php" method="post" enctype="multipart/form-data" id="addclassForm">
                        <div class="form-group">
                            <label for="class_name">Class Name</label>
                            <input type="text" name="class_name" class="form-control" id="class_name" value="">
                        </div>
                        <div class="form-group">
                            <label for="class_date_time">Class Date and Time</label>
                            <input type="datetime-local" name="class_date_time" class="form-control" id="class_date_time" value="">
                        </div>

                        <div class="form-group">
                            <label for="class_link">Class Link</label>
                            <input type="text" name="class_link" class="form-control" id="class_link" value="">
                        </div>
                        <div class="form-group">
                            <label for="class_desc">Class Description</label>
                            <!-- <input type="text" name="class_desc" class="form-control" id="class_desc" value=""> -->
                            <textarea name="class_desc" id="class_desc" class="form-control" style="resize: none; width:100%;" cols="30" rows="8"></textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div><br>
    <a href="class" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Back </a>
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