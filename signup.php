<?php
include("admin/assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    session_start();
    if (isset($_SESSION["colorarc_loggedin"])) {
        header("Location: index.php");
    }
    ?>
    <?php include('css/style.php') ?>
    <title>Sign Up</title>
</head>
<body>

    <!-- -------------------------Navbar start-------------------------------- -->

    <?php include('contents/nav.php') ?>

    <!-- -------------------------Navbar end-------------------------------- -->

    <section class="signup-page">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <form method="post" action="functions/functions.php">
                        <h4 class="text-center mb-4 fw-bold">Create an Account</h4>
                        <div class="mb-3">
                            <label class="form-label" for="title">Name :</label>
                            <input type="text" class="form-control" name="name" id="title" placeholder="Enter Your Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">E-mail :</label>
                            <input type="email" class="form-control" id="mail" name="mail" placeholder="Enter Your E-mail" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Phone Number  :</label>
                            <input type="text" class="form-control" name="phone_number" id="title" placeholder="Enter Phone Number" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Password :</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Confirm Password :</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Retype Password">
                        </div>
                        <button type="submit" name="signup" class="btn ">Sign Up</button>
                        <p class="para-color mt-3 text-center">Already have an account ? <a href="login.php">Sign Up Now</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------footer start-------------------------------- -->

<section class="footer footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <img src="images/footer-logo.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-3 justify-content-center">
                    <p class="fw-bold text-white">Menu</p>
                    <a href="#">About Us</a><br>
                    <a href="#">Services</a><br>
                    <a href="#">Selling</a>
                </div>
                <div class="col-lg-3">
                    <p class="fw-bold text-white">Company</p>
                    <a href="#">Services</a><br>
                    <a href="#">Selling</a><br>
                    <a href="#">Support</a><br>
                    <a href="#">Contact</a>
                </div>
                <div class="col-lg-3">
                    <p class="fw-bold text-white">Help</p>
                    <a href="#">Privacy Policy</a><br>
                    <a href="#">Delivery Services</a><br>
                    <a href="#">Terms & Conditions</a><br>
                    <a href="#">Payment</a><br>
                    <a href="#">Cancellation & return</a>
                </div>
            </div>
        </div>
        <hr class="mt-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 powered-by">
                    <p>Powered by <b><a href="https://trickydot.com/">TrickyDot Technologies</a></b></p>
                </div>
                <div class="col-lg-6">
                    <div class="social-icons  d-flex">
                    <?php
                        $sql = "select * from tbl_company where id='1'";
                        $run = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($run);
                        $facebook = $row["facebook"];
                        $instagram = $row["instagram"];
                        ?>
                        <div class="facebook me-2">
                            <a href=" https://facebook.com/<?php echo $facebook ?>"><i class="fa fa-facebook-f"></i></a>
                        </div>
                        <div class="instagram me-2">
                            <a href="https://instagram.com/<?php echo $instagram ?>"><i class="fa fa-instagram "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -------------------------footer end-------------------------------- -->

    <?php include("contents/script.php") ?>
    
    </body>
</html>