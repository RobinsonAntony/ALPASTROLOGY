<style>
    /* Importing fonts from Google */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    /* Reseting */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: #ecf0f3;
    }

    .wrapper {
        max-width: 350px;
        min-height: 500px;
        margin: 80px auto;
        padding: 40px 30px 30px 30px;
        background-color: #ecf0f3;
        border-radius: 15px;
        box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
    }

    .logo {
        width: 80px;
        margin: auto;
    }

    .logo img {
        width: 100%;
        height: 80px;
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0px 0px 3px #5f5f5f,
            0px 0px 0px 5px #ecf0f3,
            8px 8px 15px #a7aaa7,
            -8px -8px 15px #fff;
    }

    .wrapper .name {
        font-weight: 600;
        font-size: 1.4rem;
        letter-spacing: 1.3px;
        padding-left: 10px;
        color: #555;
    }

    .wrapper .form-field input {
        width: 100%;
        display: block;
        border: none;
        outline: none;
        background: none;
        font-size: 1.2rem;
        color: #666;
        padding: 10px 15px 10px 10px;
        /* border: 1px solid red; */
    }

    .wrapper .form-field {
        padding-left: 10px;
        margin-bottom: 20px;
        border-radius: 20px;
        box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
    }

    .wrapper .form-field .fas {
        color: #555;
    }

    .wrapper .btn {
        box-shadow: none;
        width: 100%;
        height: 40px;
        background-color: orangered;
        color: #fff;
        border-radius: 25px;
        box-shadow: 3px 3px 3px #b1b1b1,
            -3px -3px 3px #fff;
        letter-spacing: 1.3px;
        border: none;
    }

    .wrapper .btn:hover {
        background-color: orange;
    }

    .wrapper a {
        text-decoration: none;
        font-size: 0.8rem;
        color: #03A9F4;
    }

    .wrapper a:hover {
        color: #039BE5;
    }

    @media(max-width: 380px) {
        .wrapper {
            margin: 30px 20px;
            padding: 40px 15px 15px 15px;
        }
    }
</style>


<title>Alp Admin</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<div class="wrapper">
    <div class="logo">
        <img src="./img/logo.png" alt="">
    </div>
    <div class="text-center mt-4 name">
        Admin Login
    </div>
    <div>
        <form class="p-3 mt-3" method="post" autocomplete="off">
            <div class="form-field d-flex align-items-center">
                <span class="fa fa-user text-dark"></span>
                <input type="text" name="email" id="email" placeholder="ID">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key text-dark"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button type="submit" class="btn mt-3">Login</button>
            <a href="../index.php" style="text-align:centre"> ← Home</a>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <?php
    include("include/config.php");
    session_start();

    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Query the database to find an admin with matching credentials
        $admin_sql = "SELECT * FROM `admin` WHERE `admin_email`='$email' AND `admin_password`='$password' AND admin_status = 0";
        $admin_result = mysqli_query($con, $admin_sql);



        // Check if it's an admin login
        if (mysqli_num_rows($admin_result) == 1) {
            $admin = mysqli_fetch_assoc($admin_result);
            $_SESSION['admin_name'] = $admin['admin_name'];
            $_SESSION['admin_id'] = $admin['admin_id'];
            $_SESSION['admin_type'] = $admin['admin_type'];
            $_SESSION['admin_live_status'] = $admin['admin_live_status'];


            // Redirect to the admin dashboard or any other desired page
            echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Login successful!',
            showConfirmButton: false,
            timer: 1000
        }).then(function() {
            window.location.href = 'index.php';
        });
        </script>";
            exit();
        } else {
            $error_message = "Invalid Email or Password";

            echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '$error_message',
            confirmButtonText: 'OK'
        }).then(function() {
            // You can optionally redirect here or take any other action
        });
        </script>";
        }
    }
    ?>