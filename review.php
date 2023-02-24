<?php
include("admin/assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
    <!-- <?php
    // session_start();
    // if (!isset($_SESSION["colorarc_loggedin"])) {
    //     header("Location: login.php");
    // }
    ?> -->
<?php include('css/style.php') ?>
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

    <!-- -------------------------product-details end---------------------------->

    <!-- -------------------------footer start-------------------------------- -->

    <?php include('contents/footer.php') ?>
    
    <!-- -------------------------footer end-------------------------------- -->

    <?php include("contents/script.php") ?>
    
</body>
</html>