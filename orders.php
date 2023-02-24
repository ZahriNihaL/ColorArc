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
<title>My Orders</title>
</head>
<body class="bg-color-body">

    <!-- -------------------------Fixed navbars start-------------------------------- -->

    <!-- -------------------------Navbar start-------------------------------- -->

    <?php include('contents/nav.php') ?>
        
    <!-- -------------------------Navbar end-------------------------------- -->
    
    <!-- -------------------------my-orders start-------------------------------- -->
    
        <section class="my-orders">
            <div class="container">
                <h3 class="fw-bold head-color text-center">My  Orders </h3>
                <div class="input-group  search mt-5">
                    <input type="text" class="form-control" placeholder="Search your orders" aria-label="Search your orders" aria-describedby="basic-addon2">
                    <button class="ps-3 pe-3"><i class="fa fa-search"></i> Search</button>
                </div>
                <div class=" order-section">
                        <div class="order-items-banner">
                            <div class="order-titles d-none d-md-block">
                                <div class="row mt-3 ">
                                    <div class="col-lg-2">
                                        <h6 class="head-color">Product</h6>
                                    </div>
                                    <div class="col-lg-4">
                                        <h6 class="head-color">Description</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <h6 class="head-color">Quantity</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <h6 class="head-color">Total Price</h6>
                                    </div>
                                    <div class="col-lg-2">
                                        <h6 class="head-color">Status</h6>
                                    </div>
                                    <hr class="mt-3 mb-5">
                                </div>
                            </div>
                            <div class="ordered-products">
                                <a href="#">
                                    <div class="row order-product-info">
                                        <div class="col-lg-2">
                                            <img src="images/orders/1.jpg" alt="ordered image" class="img-fluid">
                                            <p class="order-id mt-2 para-color">Order ID: 023546321</p>
                                        </div>
                                        <div class="col-lg-4 pt-md-3 pt-2">
                                            <h6 class="head-color ">Lorem ipsum dolor sit amet</h6>
                                            <p class="para-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Color: Black</p>
                                            <p class="icon-color d-md-none ordered"> <i class='fa fa-angle-right icon-color'></i> Price:</p>
                                            <h6 class="head-color fw-bold">₹250</h6>
                                           
                                        </div>

                                        <div class="col-lg-2 pt-md-3 pt-0">
                                            <p class="icon-color d-md-none ordered mt-2"> <i class='fa fa-angle-right icon-color'></i> Quantity:</p>
                                            <h6 class="head-color">1</h6>
                                        </div>

                                        <div class="col-lg-2 pt-md-3 pt-0">
                                            <p class="icon-color d-md-none ordered"> <i class='fa fa-angle-right icon-color'></i> Total Price:</p>
                                            <h6 class="head-color  fw-bold">₹250</h6>
                                        </div>
                                        <div class="col-lg-2 pt-md-3">
                                            <p class="head-color"> <i class="fa fa-dot-circle-o ordered" aria-hidden="true"></i> Ordered on 15 Aug 2020</p>
                                            <p class="head-color"> <i class="fa fa-dot-circle-o ordered" aria-hidden="true"></i> Delivered on 20 Aug 2020</p>
                                        </div>
                                    </div>
                                </a>
                                <hr>
                                <a href="#">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <img src="images/orders/2.jpg" alt="ordered image" class="img-fluid ">
                                            <p class="order-id mt-2 para-color">Order ID: 023546322</p>
                                        </div>
                                        <div class="col-lg-4 pt-3">
                                            <h6 class="head-color ">Lorem ipsum dolor sit amet</h6>
                                            <p class="para-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Color: White</p>
                                            <p class="icon-color d-md-none ordered"> <i class='fa fa-angle-right icon-color'></i> Price:</p>
                                            <h6 class="head-color fw-bold">₹200</h6>
                                        </div>
                                        <div class="col-lg-2 pt-md-3">
                                            <p class="icon-color d-md-none ordered mt-2"> <i class='fa fa-angle-right icon-color'></i> Quantity:</p>
                                            <h6 class="head-color">3</h6>
                                        </div>
                                        <div class="col-lg-2 pt-md-3">
                                            <p class="icon-color d-md-none ordered"> <i class='fa fa-angle-right icon-color'></i> Total Price:</p>
                                            <h6 class="head-color fw-bold">₹600</h6>
                                        </div>
                                        <div class="col-lg-2 pt-md-3">
                                            <p class="head-color"> <i class="fa fa-dot-circle-o ordered" aria-hidden="true"></i> Ordered on 5 Aug 2020</p>
                                            <p class="head-color"> <i class="fa fa-dot-circle-o ordered" aria-hidden="true"></i> Delivered on 10 Aug 2020</p>
                                        </div>
                                    </div>
                                </a>
                                <hr>
                                <a href="#">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <img src="images/orders/3.jpg" alt="ordered image" class="img-fluid">
                                            <p class="order-id mt-2 para-color">Order ID: 023546323</p>
                                        </div>
                                        <div class="col-lg-4 pt-3">
                                            <h6 class="head-color ">Lorem ipsum dolor sit amet</h6>
                                            <p class="para-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Color: White</p>
                                            <p class="icon-color d-md-none ordered"> <i class='fa fa-angle-right icon-color'></i> Price:</p>
                                            <h6 class="head-color fw-bold">₹150</h6>
                                        </div>
                                        <div class="col-lg-2 pt-md-3">
                                            <p class="icon-color d-md-none ordered mt-2"> <i class='fa fa-angle-right icon-color'></i> Quantity:</p>
                                            <h6 class="head-color">2</h6>
                                        </div>
                                        <div class="col-lg-2 pt-md-3">
                                            <p class="icon-color d-md-none ordered"> <i class='fa fa-angle-right icon-color'></i> Total Price:</p>
                                            <h6 class="head-color fw-bold">₹300</h6>
                                        </div>
                                        <div class="col-lg-2 pt-md-3">
                                            <p class="head-color"> <i class="fa fa-dot-circle-o ordered" aria-hidden="true"></i> Ordered on 1 Sep 2020</p>
                                            <p class="head-color"> <i class="fa fa-dot-circle-o ordered" aria-hidden="true"></i> Cancelled on 6 Sep 2020</p>
                                        </div>
                                    </div>
                                </a>
                                <hr>
                                <a href="#">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <img src="images/orders/4.jpg" alt="ordered image" class="img-fluid">
                                            <p class="order-id mt-2 para-color">Order ID: 023546324</p>
                                        </div>
                                        <div class="col-lg-4 pt-3">
                                            <h6 class="head-color ">Lorem ipsum dolor sit amet</h6>
                                            <p class="para-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Color: White</p>
                                            <p class="icon-color d-md-none ordered"> <i class='fa fa-angle-right icon-color'></i> Price:</p>
                                            <h6 class="head-color fw-bold">₹260</h6>
                                            <!-- <p class="para-color">Color: Black</p> -->
                                        </div>
                                        <div class="col-lg-2 pt-md-3">
                                            <p class="icon-color d-md-none ordered mt-2"> <i class='fa fa-angle-right icon-color'></i> Quantity:</p>
                                            <h6 class="head-color">1</h6>
                                        </div>
                                        <div class="col-lg-2 pt-md-3">
                                            <p class="icon-color d-md-none ordered"> <i class='fa fa-angle-right icon-color'></i> Total Price:</p>
                                            <h6 class="head-color fw-bold">₹260</h6>
                                        </div>
                                        <div class="col-lg-2 pt-md-3">
                                            <p class="head-color"> <i class="fa fa-dot-circle-o ordered" aria-hidden="true"></i> Ordered on 10 Dec 2020</p>
                                            <p class="head-color"> <i class="fa fa-dot-circle-o ordered" aria-hidden="true"></i> Exchanged on 15 Dec 2020</p>
                                        </div>
                                    </div>
                                </a>
                                <hr>
                                <a href="#">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <img src="images/orders/5.jpg" alt="ordered image" class="img-fluid">
                                            <p class="order-id mt-2 para-color">Order ID: 023546325</p>
                                        </div>
                                        <div class="col-lg-4 pt-3">
                                            <h6 class="head-color ">Lorem ipsum dolor sit amet</h6>
                                            <p class="para-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Color: Black & White</p>
                                            <p class="icon-color d-md-none ordered"> <i class='fa fa-angle-right icon-color'></i> Price:</p>
                                            <h6 class="head-color fw-bold">₹200</h6>
                                            <!-- <p class="para-color">Color: Black</p> -->
                                        </div>
                                        <div class="col-lg-2 pt-md-3">
                                            <p class="icon-color d-md-none ordered mt-2"> <i class='fa fa-angle-right icon-color'></i> Quantity:</p>
                                            <h6 class="head-color">2</h6>
                                        </div>
                                        <div class="col-lg-2 pt-md-3">
                                            <p class="icon-color d-md-none ordered"> <i class='fa fa-angle-right icon-color'></i> Total Price:</p>
                                            <h6 class="head-color fw-bold">₹400</h6>
                                        </div>
                                        <div class="col-lg-2 pt-md-3">
                                            <p class="head-color"> <i class="fa fa-dot-circle-o ordered" aria-hidden="true"></i> Ordered on 20 Dec 2020</p>
                                            <p class="head-color"> <i class="fa fa-dot-circle-o ordered" aria-hidden="true"></i> Delivered on 25 Dec 2020</p>
                                        </div>
                                    </div>
                                </a>
                                <hr>
                            </div>
                        </div>
                </div>
            </div>
        </section>

    <!-- -------------------------my-orders end-------------------------------- -->

    <!-- -------------------------footer start-------------------------------- -->

    <?php include('contents/footer.php') ?>

    <!-- -------------------------footer end-------------------------------- -->

    <?php include("contents/script.php") ?>
    
</body>
</html>