<?php

include("admin/includes/db.php");

?>

<!doctype html>

<html lang="en">

<head>

    <?php include('style.php') ?>

    <title>Review</title>
</head>

<body>


    <!-- -------------------------Fixed navbars start-------------------------------- -->


        <!-- -------------------------Navbar start-------------------------------- -->

        <?php include('contents/nav.php') ?>
       
        <!-- -------------------------Navbar end-------------------------------- -->


    <!-- -------------------------product-details start-------------------------------- -->
    

        <section class="review-star">
            <div class="container">
                <h3 class="head-color fw-bold">Give Feedback</h3>

                <div class='starbox'>
                    <h5 class="head-color mt-5">How did this product?</h5>
                    <div class="stars mt-3">
                        <svg  fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                        </svg>
                        <svg  fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                        </svg>
                        <svg  fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                        </svg>
                        <svg  fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.469 22.5a.75.75 0 0 1-.44-.14L12 17.99l-6.029 4.37a.75.75 0 0 1-1.15-.847l2.35-6.965-6.093-4.178A.75.75 0 0 1 1.5 9h7.518l2.268-6.981a.75.75 0 0 1 1.427 0l2.27 6.984H22.5a.75.75 0 0 1 .424 1.369l-6.096 4.176 2.35 6.963a.75.75 0 0 1-.71.99Z"></path>
                        </svg>
                    </div>
                </div> 
                
                <div class="share-experience">
                    <h5 class="head-color mt-5">Share your Experience</h5>

                <form>
                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Type your feedback..."></textarea>
                    </div>
                    <button class="btn-sm button-style">Submit</button>
                </form>
                </div>
            </div>
        </section>

    <!-- -------------------------product-details end-------------------------------- -->









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










    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>