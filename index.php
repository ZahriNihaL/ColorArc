<?php
include("admin/assets/includes/db.php");
?>
<!doctype html>
<html lang="en">

<head>
    <?php
    session_start();
    if (!isset($_SESSION["colorarc_loggedin"])) {
        header("Location: login.php");
    }
    ?>
    <?php include('css/style.php') ?>
    <title>Color Arc</title>
</head>

<body>

    <!---------------------------Fixed navbars start------------------------>

    <!---------------------------Navbar start------------------------------->

    <?php include('contents/nav.php') ?>

    <!---------------------------Navbar end--------------------------------->

    <!---------------------------Product Navbar start----------------------->

    <section class="product-navbar  bg-white">
        <div class="container">
            <ul class="product-nav-items">
                <?php
                $sql = "select * from tbl_classification";
                $run = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($run)) {
                    $id = $row["id"];
                    $product_name = $row["product_name"];
                    $explanation = $row["explanation"];
                    $img = $row["img"];
                    $price = $row["price"];
                    $pincode = $row["pincode"];
                ?>
                    <li class="nav-item">
                        <div class="wishlist product-item">
                            <a href="">
                                <div class="product-item-bg ">
                                    <img src="admin/assets/images/classification/<?php echo $img ?>" alt="">
                                </div>
                            </a>
                            <a href="products.php" class=" nav-link-color"><?php echo $product_name ?></a>
                        </div>
                    </li></a>
                <?php } ?>
            </ul>
            <hr>
        </div>
    </section>
    </div>

    <!-- -------------------------Product Navbar end-------------------------------- -->

    <!-- -------------------------Fixed navbars start-------------------------------- -->

    <!-- -------------------------home start-------------------------------- -->

    <section class="home">
        <div class="container">
            <div class="row">
                <?php
                $sql = "select * from tbl_home";
                $run = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($run)) {

                    $id = $row["id"];
                    $title = $row["title"];
                    $description = $row["description"];
                    $img = $row["img"];
                    $img2 = $row["img2"];
                ?>
                    <div class="col-lg-4">
                        <img src="admin/assets/images/home/<?php echo $img ?>" alt="home image" class="img-fluid">
                    </div>
                    <div class="col-lg-4">
                        <div class="home-texts">
                            <h1 class="text-center fw-bold"><?php echo $title ?></h1>
                            <p class="text-center para-color"><?php echo $description ?></p>
                            <div class="text-center">
                                <a href="#offer-slide"><button class="btn-sm fw-bold button-style">Know more</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img src="admin/assets/images/home/<?php echo $img2 ?>" alt="home image" class="img-fluid home-img-2">
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- -------------------------home end-------------------------------- -->

    <!-- -------------------------offer slide start-------------------------------- -->

    <section class="offer-slide" id="offer-slide">
        <div class="container">
            <div class="offer-carousel">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active d-none d-md-none" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="d-none d-md-none"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <?php
                                $sql = "select * from tbl_classification";
                                $run = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_array($run)) {


                                    $id = $row["id"];
                                    $product_name = $row["product_name"];
                                    $explanation = $row["explanation"];
                                    $img = $row["img"];
                                    $price = $row["price"];
                                    $rating = $row["rating"];
                                    $reviews = $row["reviews"];
                                    $pincode = $row["pincode"];

                                ?>
                                    <div class="col-lg-6 red-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <p class="para-color text-white"><?php echo $price ?></p>
                                                        <h4 class="card-title fw-bold text-white"><?php echo $explanation ?></h4>
                                                        <p class="card-text text-white"><b class="fw-bold"><?php echo $rating ?></b> to <b class="fw-bold"><?php echo $reviews ?></b></p>
                                                        <button class="btn-sm fw-bold ">Shop Now</button>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <img src="admin/assets/images/classification/<?php echo $img ?>" alt="offer image" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 yellow-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <p class="para-color text-white"><?php echo $price ?></p>
                                                        <h4 class="card-title fw-bold text-white"><?php echo $explanation ?></h4>
                                                        <p class="card-text text-white"><b class="fw-bold"><?php echo $rating ?></b> to <b class="fw-bold"><?php echo $reviews ?></b></p>
                                                        <button class="btn-sm fw-bold ">Shop Now</button>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <img src="admin/assets/images/classification/<?php echo $img ?>" alt="offer image" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev d-none d-md-none" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next d-none d-md-none" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------offer slide end-------------------------------- -->

    <!-- -------------------------popular products start-------------------------------- -->

    <section class="popular-products">
        <div class="container">
            <h3 class="fw-bold text-center head-color">Popular Products</h3>
            <div class="product-cards">
                <div class="row">
                    <?php
                    $sql = "select * from tbl_products";
                    $run = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($run)) {
                        $id = $row["id"];
                        $product_name = $row["product_name"];
                        $explanation = $row["explanation"];
                        $img = $row["img"];
                        $price = $row["price"];
                        $total = $row["total"];
                        $rating = $row["rating"];
                    ?>
                        <div class="col-lg-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <div class="wishlist">
                                        <a href="#"><i class="fa fa-heart  mb-2"></i></a>
                                    </div>
                                    <div class="product-card-img-bg">
                                        <img src="admin/assets/images/products/<?php echo $img ?>" class="card-img-top" alt="product image">
                                    </div>
                                    <h5 class="card-title mt-3 fw-bold head-color"><?php echo $product_name ?></h5>
                                    <div class="d-flex">
                                        <h6 class=" fw-bold head-color"><?php echo $price ?></h6>
                                        <del>
                                            <h6 class="disabled-rate ms-3"><?php echo $total ?></h6>
                                        </del>
                                    </div>
                                    <div class="d-flex">
                                        <span class="fa fa-star"></span>
                                        <p class="card-text ms-2"><?php echo $rating ?></p>
                                        <div class="add-to-cart">
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z" />
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="text-center">
                    <a href="products.php"><button class="btn-sm button-style mt-5 fw-bold">Load more</button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------popular products end-------------------------------- -->

    <!-- -------------------------services start-------------------------------- -->

    <section class="services">
        <div class="container">
            <div class="services-bg">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="fw-bold head-color ">We are Ensure Our Best <br> Services with :</h3>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <?php
                            $sql = "select * from tbl_service";
                            $run = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($run)) {
                                $id = $row["id"];
                                $name = $row["name"];
                                $img = $row["img"];
                            ?>
                                <div class="col-lg-6">
                                    <img src="admin/assets/images/service/<?php echo $img ?>" alt="services image" class="img-fluid">
                                    <p class="para-color text-center"><?php echo $name ?></p>
                                </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- -------------------------services end---------------------------------->

    <!-- -------------------------testimonial start----------------------------->

    <section class="testimonial">
        <div class="container">
            <h3 class="fw-bold head-color text-center">What Our Trusted Customers Say</h3>
            <div class="testimonial-carousel">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="control-icons d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left svg-left" viewBox="0 0 16 16" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right ms-2 svg-right" viewBox="0 0 16 16" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row ">
                                <?php
                                $sql = "select * from tbl_customer";
                                $run = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_array($run)) {

                                    $id = $row["id"];
                                    $name = $row["name"];
                                    $designation = $row["designation"];
                                    $explanation = $row["explanation"];
                                    $img = $row["img"];
                                ?>
                                    <div class="col-lg-6 testimonial-contents">
                                        <div class="reviews d-flex justify-content-center flex-wrap">
                                            <img src="admin/assets/images/customer/<?php echo $img ?>" alt="testimonial image" class="img-fluid">
                                            <div class="client-words">
                                                <p class="para-color ms-4 mt-3"><i class="fa fa-quote-left para-color me-3"></i><?php echo $explanation ?><i class="fa fa-quote-right para-color ms-3"></i> </p>
                                            </div>
                                            <div class="text-center">
                                                <hr>
                                                <h6 class="head-color mt-3 ms-3 red-color fw-bold"><?php echo $name ?></h6>
                                                <p class="ms-3 designation"><?php echo $designation ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------testimonial end-------------------------------- -->

    <!-- -------------------------footer start-------------------------------- -->

    <?php include('contents/footer.php') ?>

    <!-- -------------------------footer end-------------------------------- -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>