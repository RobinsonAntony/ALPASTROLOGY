<?php
include('include/header.php');
include('include/config.php');
// ini_set('display_errors', 0);

?>
<style>
    textarea {
        resize: none;
    }
</style>
<h1 class="text-center">
    Add New Articles
</h1>
<div class="container-fluid pt-4 px-4">
    <div class="row rounded">
        <div class="col-md-12">
            <form action="./actions/insert_article.php" method="post" enctype="multipart/form-data">
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="art_title" class="">Article Title</label>
                        <input type="text" name="art_title" class="form-control" id="art_title">
                    </div>
                </div><br>
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="art_sub_title" class="">Sub Title</label>
                        <input type="text" name="art_sub_title" class="form-control" id="art_sub_title">
                    </div>
                </div><br>
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="author_name" class="">Author</label>
                        <input type="text" name="author_name" class="form-control" id="author_name">
                    </div>
                </div><br>
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="img_alp" class="">Article Image</label>
                        <input type="file" name="article_image" class="form-control" id="article_image" required>
                    </div>
                </div><br>
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="index_table" class="">Introduction</label>
                        <!-- <input type="text" name="table_contents[]" class="form-control" id="index_table"> -->
                        <textarea name="intro" id="intro" class="form-control"></textarea>
                    </div>
                </div><br>
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="index_table" class="">Conclusion</label>
                        <!-- <input type="text" name="table_contents[]" class="form-control" id="index_table"> -->
                        <textarea name="conclusion" id="intro" class="form-control"></textarea>
                    </div>
                </div><br>
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="index_table" class="">Heading</label>
                        <input type="text" name="index_table[]" class="form-control" id="index_table">
                    </div>
                </div><br>
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="index_table" class=""> Contents</label>
                        <!-- <input type="text" name="table_contents[]" class="form-control" id="index_table"> -->
                        <textarea name="table_contents[]" id="table_contents" class="form-control"></textarea>
                    </div>
                </div><br>
                <div class="col-md-12" id="dynamic-fields">
                    <!-- Additional fields will be added here -->
                    <div class="form-group" id="items">

                    </div>
                </div>
                <div class="col-md-10">
                    <button id="add" class="btn btn-warning text-white" type="button">Add <i class='fa fa-solid fa-plus'></i></button>
                </div><br>

                <div class="col-md-1">
                    <input type="submit" name="article_submit" value="Submit" class="btn btn-success text-white">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include('include/footer.php');
?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- <script>
    $(document).ready(function() {
        $(".delete").hide();
        $("#dynamic-fields").hide();

        // When the Add Field button is clicked
        $("#add").click(function(e) {
            $("#dynamic-fields").fadeIn("1500");

            // Show the delete button
            $(".delete").fadeIn("1500");

            // Append a new row of code to the "#items" div
            $("#items").append(`
                 <div class="add_index">
                        <div class='row'>
                            <div class="form-group col-md-10">
                                <label for="index_table" class="">Heading</label>
                                <input type="text" name="index_table[]" class="form-control" id="index_table">
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <span class='btn btn-primary mt-4 text-white'><i class='fa fa-solid fa-minus delete'></i></span>
                                </div>
                            </div>
                        </div><br>
                            <div class="form-group col-md-10">
                                <label for="index_table" class="">Contents</label>
                                <textarea name="table_contents[]" id="table_contents" class="form-control"></textarea>

                            </div><br>
                   
                    </div>`);
        });

        // Event listener for delete button
        $("body").on("click", ".delete", function(e) {
            // Remove the associated field when the delete button is clicked
            $(this).closest(".add_index").remove();
        });
    });
</script> -->

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
    $("#add").click(function(e) {
        $("#dynamic-fields").fadeIn("1500");

        // Show the delete button
        $(".delete").fadeIn("1500");

        // Append a new row of code to the "#items" div
        var newIndex = $(".add_index").length + 1;

        $("#items").append(`
            <div class="add_index">
                <div class='row'>
                    <div class="form-group col-md-10">
                        <label for="index_table${newIndex}" class="">Heading</label>
                        <input type="text" name="index_table[]" class="form-control" id="index_table${newIndex}">
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <span class='btn btn-primary mt-4 text-white delete'><i class='fa fa-solid fa-minus'></i></span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group col-md-10">
                    <label for="table_contents${newIndex}" class="">Contents</label>
                    <textarea name="table_contents[]" id="table_contents${newIndex}" class="form-control"></textarea>
                </div>
                <br>
            </div>`);

        // Initialize CKEditor for the newly added textarea
        CKEDITOR.replace(`table_contents${newIndex}`);

        $("body").on("click", ".delete", function(e) {
            // Remove the associated field when the delete button is clicked
            $(this).closest(".add_index").remove();
        });
    });
</script>
<script>
    // CKEDITOR.replace( 'term_title' );
    CKEDITOR.replace('intro');
</script>
<script>
    // CKEDITOR.replace( 'term_title' );
    CKEDITOR.replace('conclusion');
</script>
<script>
    // CKEDITOR.replace( 'term_title' );
    CKEDITOR.replace('table_contents[]');
</script>