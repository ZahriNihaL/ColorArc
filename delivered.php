<?php
include("admin/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
<?php include('css/style.php') ?>
<title>Deliverd</title>
</head>
<body  class="bg-color-body">

    <!-- -------------------------Fixed navbars start-------------------------------- -->

    <!-- -------------------------Navbar start-------------------------------- -->

    <?php include('contents/nav.php') ?>
        
    <!-- -------------------------Navbar end-------------------------------- -->
    
    <!-- -------------------------shipping start-------------------------------- -->
    
        <section class="shipping">
            <div class="container">
                <div class="deliverd-pdt">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="images/shipping/1.jpg" alt="shipping image" class="img-fluid">
                        </div>
                        <div class="col-lg-3 col-top">
                            <h6 class="head-color ">Lorem ipsum dolor sit amet</h6>
                            <p class="para-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Color: Black & White</p>
                            <p class="icon-color d-md-none ordered"> <i class='fa fa-angle-right icon-color'></i> Price:</p>
                            <h6 class="head-color fw-bold">₹200</h6>
                        </div>
                        <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-12 col-md-10 hh-grayBox pt45 pb20">
                                        <div class="row justify-content-between">
                                            <div class="order-tracking completed">
                                                <span class="is-complete"></span>
                                                <p>Ordered<br><span class="para-color">Sep 24 2022</span></p>
                                            </div>
                                            <div class="order-tracking completed">
                                                <span class="is-complete"></span>
                                                <p>Shipped<br><span class="para-color">Sep 25 2022</span></p>
                                            </div>
                                            <div class="order-tracking">
                                                <span class="is-complete"></span>
                                                <p>Delivered<br><span class="para-color">Sep 28 2022</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="d-flex"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- -------------------------shipping end-------------------------------- -->

    <!-- -------------------------footer start-------------------------------- -->

    <section class="footer">
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
                        <div class="facebook me-2">
                            <a href=""><i class="fa fa-facebook-f"></i></a>
                        </div>
                        <div class="instagram me-2">
                            <a href=""><i class="fa fa-instagram "></i></a>
                        </div>
                        <div class="twitter me-2">
                            <a href=""><i class="fa fa-twitter"></i></a>
                        </div>
                        <div class="twitter me-2">
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- -------------------------footer end-------------------------------- -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"crossorigin="anonymous"></script>

</body>
</html>