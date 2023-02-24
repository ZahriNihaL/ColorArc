<?php
include("admin/assets/includes/db.php");
?>
<section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <img src="images/footer-logo.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-3 justify-content-center">
                    <p class="fw-bold text-white">Menu</p>
                    <a href="index.php">About Us</a><br>
                    <a href="index.php">Services</a><br>
                    <a href="products.php">Selling</a>
                </div>
                <div class="col-lg-3">
                    <p class="fw-bold text-white">Company</p>
                    <a href="index.php">Services</a><br>
                    <a href="products.php">Selling</a><br>
                    <a href="customer_service.php">Support</a><br>
                    <a href="customer_service.php">Contact</a>
                </div>
                <div class="col-lg-3">
                    <p class="fw-bold text-white">Help</p>
                    <a href="my-profile.php">Privacy Policy</a><br>
                    <a href="my-profile.php">Delivery Services</a><br>
                    <a href="my-profile.php">Terms & Conditions</a><br>
                    <a href="my-profile.php">Payment</a><br>
                    <a href="my-profile.php">Cancellation & return</a>
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