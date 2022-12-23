<?php

include("admin/includes/db.php");

?>
<!doctype html>
<html lang="en">

<head>

    <?php include('style.php') ?>

    <title>My Orders</title>
    
</head>

<body class="bg-color-body">


    <!-- -------------------------Fixed navbars start-------------------------------- -->


        <!-- -------------------------Navbar start-------------------------------- -->

        <div class="fixed-top bg-white">
            <nav class="navbar navbar-expand-lg navbar-light pt-3 pb-4 fixed-top bg-white">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="navbar logo"></a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                      </button>
            
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="search-wrapper cf d-flex mt-3 ms-3">
                            <input class="form-control me-2" type="search" placeholder="Search for products" aria-label="Search"
                                style="box-shadow: none">
        
        
                            <div class="nav-item dropdown mt-2 me-4">
                                <a class="nav-link dropdown-toggle nav-link-color" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Category
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </form>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mt-2">
                            <li class="nav-item">
                                <div class="download-app text-center ">
                                    <a href="#"><i class="fa fa-mobile-phone text-center"></i></a><br>
                                    <a href="#" class="text-center nav-link-color">Download App</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="wishlist text-center">
                                    <a href="#"><i class="fa fa-heart"></i></a><br>
                                    <a href="#" class="text-center nav-link-color">Wishlist</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="cart text-center">
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a><br>
                                    <a href="#" class="text-center nav-link-color">Cart</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="profile text-center">
                                    <a href="#"><i class="fa fa-user"></i></a><br>
                                    <a href="#" class="text-center nav-link-color">Profile</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="profile text-center">
                                    <a href="#"><i class="fa fa-headphones"></i></a><br>
                                    <a href="#" class="text-center nav-link-color">Contact Service</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
        
                
            </nav>
        </div>
        
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
                    <!-- <div class="col-lg-3">
                        <div class="check-box-banner">
                            <h5 class="fw-bold head-color mb-4">Filters</h5>
                            <hr class="mb-5">
                            <div class="filters">
                                <div class="form-check">
                                    <a href="#">
                                        <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                        <label class="form-check-label" for="flexCheckDefault">Delivered</label>
                                    </a>
                                </div>
                                <hr>
    
                                <div class="form-check">
                                    <a href="#">
                                        <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                        <label class="form-check-label" for="flexCheckDefault">On the way</label>
                                    </a>
                                </div>
                                <hr>
    
                                <div class="form-check">
                                    <a href="#">
                                        <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                        <label class="form-check-label" for="flexCheckDefault">Exchange</label>
                                    </a>
                                </div>
                                <hr>
    
                                <div class="form-check">
                                    <a href="#">
                                        <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                        <label class="form-check-label" for="flexCheckDefault">Cancelled</label>
                                    </a>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div> -->



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
                                            <!-- <p class="para-color">Color: Black</p> -->
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
                                            <!-- <p class="para-color">Color: Black</p> -->
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
                                            <!-- <p class="para-color">Color: Black</p> -->
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

    <?php include('footer.php') ?>

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