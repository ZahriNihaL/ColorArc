<?php

include("admin/includes/db.php");

?>

<!doctype html>

<html lang="en">

<head>

    <?php include('style.php') ?>

    <title>My Profile</title>
</head>

<body>


    <!-- -------------------------Fixed navbars start-------------------------------- -->


        <!-- -------------------------Navbar start-------------------------------- -->

        <?php include('contents/nav.php') ?>
       
        
            <!-- -------------------------Navbar end-------------------------------- -->
    




    <!-- -------------------------my-profile start-------------------------------- -->
    
    <section class="my-profile">
        <div class="container">
            <h3 class="fw-bold head-color text-center">My  Profile  </h3>
            <div class="my-profile-page">


                        <img src="images/profile/my-profile/1.jpg" alt="profile image" class="img-fluid">

                        <h5 class="head-color fw-bold text-center mt-3">Liya</h5>
                        <hr class="mt-5 mb-5">

                <div class="all-details">
                    <div class="d-flex fields mb-3 about-bio" >
                        <h6 class="head-color me-5">About : </h6>
                        <p class="para-color ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent suscipit urna non ligula placerat, vitae tempus est hendrerit. Fusce congue ultrices nulla quis vulputate. Sed vehicula non felis vel mollis.</p>
                    </div>
    
                    <div class="d-flex fields">
                        <h6 class="fw-bold">Basic Details</h6>
                    </div>
    
                    <div class="d-flex fields">
                        <h6 class="head-color me-5">Phone :</h6>
                        <p class="para-color">+91 9562547852</p>
                    </div>
    
                    <div class="d-flex fields">
                        <h6 class="head-color me-5">Email :</h6>
                        <p class="para-color">liya@gmail.com</p>
                    </div>
    
                    <div class="d-flex fields mb-3">
                        <h6 class="head-color me-5">Gender :</h6>
                        <p class="para-color">Male</p>
                    </div>
    
                    <div class="d-flex fields">
                        <h6 class="fw-bold">Contact Details</h6>
                    </div>
    
                    <div class="d-flex fields">
                        <h6 class="head-color me-5">Home Address :</h6>
                        <p class="para-color">Lorem ipsum dolor sit amet</p>
                    </div>
    
                    <div class="d-flex fields">
                        <h6 class="head-color me-5">City :</h6>
                        <p class="para-color">Lorem ipsum dolor sit </p>
                    </div>
    
                    <div class="d-flex fields">
                        <h6 class="head-color me-5">PIN :</h6>
                        <p class="para-color">676552 </p>
                    </div>
    
                    <div class="d-flex fields">
                        <h6 class="head-color me-5">State :</h6>
                        <p class="para-color">Kerala </p>
                    </div>
    
                    <div class="d-flex fields">
                        <h6 class="head-color me-5">District </h6>
                        <p class="para-color">Malappuram </p>
                    </div>
    
                    <div class="text-center">
                        <a href="profile.html"><button class="button-style btn-sm mt-4">Update</button></a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- -------------------------my-profile end-------------------------------- -->






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









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>