<?php

include("includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    include("style.php");

    ?>
    <title>Dashboard</title> 

</head>

<body> 

    <div class="row min-vh-100 g-0">    
        <?php include("content/navbar.php") ?>

        <div class="col-lg-10 wrapper">
            <div class="card custom-card-2 mb-3">
            <div class="card-body p-3 d-flex align-items-center justify-content-between">
                <h5 class="mb-0 fw-bold">DASHBOARD</h5>
                <!-- <a href="add_dashboard.php" class="btn btn-success" style="background-color:#FEB700;">Add Dashboard</a> -->
                <div class="d-flex">

                <div class="user-icon">
                    <img src="assets/images/user.png" alt="" class="img-fluid mt-2">
                    <h6 class="fw-bold me-2 mt-2">Admin</h6>
                </div>

                </div>
            </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-2 col-md-12 col-xl-2 mb-2 ">
                    <div class="custom-card card-right">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-people"></i></div>
                        </div>
                        <div class="card-text">
                            TRENDING
                            <?php
                                $dash_query = "SELECT * from tbl_trending";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_trending_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_trending_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_trending_total.' </h4>';
                                }
                            ?>
                            
                        </div>                      
                    </div>
                </div>

                <div class="row mb-4">
                <div class="col-lg-2 col-md-12 col-xl-2 mb-2 ">
                    <div class="custom-card card-right">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-people"></i></div>
                        </div>
                        <div class="card-text">
                            HOME
                            <?php
                                $dash_query = "SELECT * from tbl_home";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_home_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_home_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_home_total.' </h4>';
                                }
                            ?>
                            
                        </div>                      
                    </div>
                </div>

                <div class="col-lg-2 col-md-12 col-xl-2 mb-2 ">
                    <div class="custom-card card-right">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-people"></i></div>
                        </div>
                        <div class="card-text">
                            CATEGORIES
                            <?php
                                $dash_query = "SELECT * from tbl_category";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_category_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_category_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_category_total.' </h4>';
                                }
                            ?>
                            
                        </div>                      
                    </div>
                </div>
                

                
                <div class="col-lg-2 col-md-12 col-xl-2 mb-2 ">
                    <div class="custom-card card-left">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-file-earmark-slides"></i></div>
                            <button class="btn ms-auto text-white py-0 px-1"></button>
                        </div>
                        <div class="card-text">
                            PRODUCTS
                            <?php
                                $dash_query = "SELECT * from tbl_products";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_products_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_products_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_products_total.' </h4>';
                                }

                            ?>
                        </div>                       
                    </div>
                </div>

                <div class="col-lg-2 col-md-12 col-xl-2 mb-2 ">
                    <div class="custom-card card-right">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-people"></i></div>
                        </div>
                        <div class="card-text">
                            OFFER ZONE
                            <?php
                                $dash_query = "SELECT * from tbl_offer";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_offer_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_offer_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_offer_total.' </h4>';
                                }
                            ?>
                        </div>                      
                    </div>
                </div>


                <div class="col-lg-2 col-md-12 col-xl-2 mb-2 ">
                    <div class="custom-card card-right">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-people"></i></div>
                        </div>
                        <div class="card-text">
                            ORDERS
                            <?php
                                $dash_query = "SELECT * from tbl_orders";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_orders_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_orders_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_orders_total.' </h4>';
                                }
                            ?>
                        </div>                      
                    </div>
                </div>

                

                <div class="col-lg-2 col-md-12 col-xl-2 mb-3">
                    <div class="custom-card card-right">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-people"></i></div>
                        </div>
                        <div class="card-text">
                            ADD TO CART
                            <?php
                                $dash_query = "SELECT * from tbl_cart";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_cart_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_cart_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_cart_total.' </h4>';
                                }
                            ?>
                        </div>                      
                    </div>
                </div>

            </div>
        </div>            
        <!-- <div class="col-lg-3 sidebar-right"> -->
            