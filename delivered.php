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

    <!-- -------------------------footer start-------------------------------->

    <?php include('contents/footer.php') ?>

    <!-- -------------------------footer end---------------------------------->

    <?php include("contents/script.php") ?>

</body>
</html>