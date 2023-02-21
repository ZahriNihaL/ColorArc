<?php
include("admin/assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
<?php include('style.php') ?>
<title>Cart Page</title>
</head>
<body>
    <!-- -------------------------Fixed navbars start-------------------------------- -->

    <!-- -------------------------Navbar start-------------------------------- -->

    <?php include('contents/nav.php') ?>
       
    <!-- -------------------------Navbar end-------------------------------- -->

    <!-- -------------------------product-details start-------------------------------- -->
    
        <section class="product-details">
            <div class="container">
                <h3 class="head-color ">Black T Shirt with White Printing</h3>
                <hr>
                <div class="row product-info">
                    <div class="col-lg-6">
                            <div class="row  product-image">
                                <img src="images/product-details/1.jpg" alt="product details" class="img-fluid">
                            <div class="d-flex mt-3 buy-buttons">
                                <button class="button-style btn-sm me-3"><i class="fa fa-shopping-cart me-2"></i> Add to Cart</button>
                                
                                <button class="button-style btn-sm heart"><i class="fa fa-heart "></i></button>
                            </div>
                            </div>
                    </div>
                    <div class="col-lg-6 product-item">
                        <h5 class="head-color fw-bold">Black T Shirt with White Printing</h5>
                        <h6 class="para-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h6>
                        <div class="rating">
                            <a href="product-details.html#rating-review"><button class="btn-sm mb-4 rateview-button"><i class="fa fa-star-o"></i> 4.5</button></a>
                        </div>
                        <h3 class="rate-color fw-bold">₹250</h3>
                        <p class="para-color">Lorem ipsum dolor sit amet consectetur </p>
                        <div class="product-material mt-md-5 mt-2">
                            <p class="para-color">Fabric : <b>Honey Comb</b></p><hr class="mt-0 w-25 d-none d-md-block">
                            <p class="para-color">Type : <b>Round Neck</b></p><hr class="mt-0 w-25 d-none d-md-block">
                            <p class="para-color">Sleeve : <b>Half Sleeve</b></p><hr class="mt-0 w-25 d-none d-md-block">
                            <div class="row">
                                <div class="col-lg-2">
                                    <h6 class="para-color mt-2">Size</h6>
                                </div>
                                <div class="col-lg-10">
                                    <div class="size">
                                        <div class="input-group mb-3">
                                            <button class="me-2">S</button>
                                            <button class="me-2">L</button>
                                            <button class="me-2">M</button>
                                            <button class="me-2">XL</button>
                                            <button class="me-2">XXL</button>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <button class="button-style  me-3"><i class="fa fa-shopping-bag me-2"></i> Buy Now</button>
                            <hr class= "mt-3">
                            <div class="rating-review mt-5" id="rating-review">
                                <h5 class="head-color fw-bold">Rating & Reviews</h5>
                                <hr>
                                <h6 class="head-color"></h6>

                                <div class="d-flex justify-content-between">
                                    <div class="rating-count">
                                        <div class="d-flex">
                                            <div class="rating">
                                                <button class="btn-sm mb-4 rateview-button"><i class="fa fa-star-o"></i> 4.5</button>
                                            </div>
                                            <p class="para-color mt-2 ms-2">4.5 Rating and 30 reviews</p>
                                        </div>
                                    </div>
                                    <!-- <button class="rate-button  btn-sm">Rate Product</button> -->
                                    <a href="review.html"><button class="btn-sm mb-4 button-style buy-now rate-product">Rate Product</button></a>
                                </div><hr class="margin-hr">

                                <div class="client-reviews">

                                    <div class="client-words">
                                                <div class="review-word">
                                                    <div class="d-flex review-client-name">
                                                        <p class="para-color me-3 client-name">Fadime Yalcinkay</p>
                                                        <div class="rating">
                                                            <button class="btn-sm mb-md-4 client-rateview-button"><i class="fa fa-star-o"></i> 4.5</button>
                                                        </div>
                                                    </div>
                                                    <p class="para-color">2w ago</p>
                                                    <p class="para-color fw-bold">Love this product. It's same as the reference. </p>
                                                    
                                                </div>
                                        <hr class="mb-5 mb-md-3 mt-md-3 mt-5">
                                    </div>

                                    <div class="client-words">
                                        <div class="review-word">
                                            <div class="d-flex review-client-name">
                                                <p class="para-color me-3 client-name">Fadime Yalcinkay</p>
                                                <div class="rating">
                                                    <button class="btn-sm mb-md-4 client-rateview-button"><i class="fa fa-star-o"></i> 4.5</button>
                                                </div>
                                            </div>
                                            <p class="para-color">2w ago</p>
                                            <p class="para-color fw-bold">Love this product. It's same as the reference. </p>
                                        </div>
                                        <hr class="mb-5 mb-md-3 mt-md-3 mt-5">
                                    </div>
                                    </div>
                                    <div id="show-more" > <a href="javascript:void(0)" class="view-review mt-3">View All Reviews<i class='fa fa-angle-right ms-2'></i></a></div>
                                    <div id="show-more-content">
                                        <div class="client-words">
                                                    <div class="review-word">
                                                        <div class="d-flex review-client-name">
                                                            <p class="para-color me-3 client-name">Fadime Yalcinkay</p>
                                                            <div class="rating">
                                                                <button class="btn-sm mb-4 client-rateview-button"><i class="fa fa-star-o"></i> 4.5</button>
                                                            </div>
                                                        </div>
                                                        <p class="para-color">2w ago</p>
                                                        <p class="para-color fw-bold">Love this product. It's same as the reference. </p>
                                                        
                                                    </div>
                                            <hr class="mb-5 mb-md-3 mt-md-3 mt-5">
                                        </div> 
                                    </div>
                                    <div class="post-review">
                                        <div id="show-less"><a href="javascript:void(0)" class="view-review mt-3">View less Reviews<i class='fa fa-angle-right ms-2'></i></a></div>
                                        <!-- <a href="#" class="view-review mt-3 "  id="show-less">View all Reviews <i class='fa fa-angle-right ms-2'></i> </a> -->
                                        <a href="review.html"><button class="btn-sm mb-4 button-style buy-now mt-3">Post your Review</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- -------------------------product-details end-------------------------------- -->

    <!-- -------------------------footer start-------------------------------- -->

    <?php include('contents/footer.php') ?>
    
    <!-- -------------------------footer end-------------------------------- -->

    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>