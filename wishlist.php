<?php
session_start();
include("admin/includes/db.php");

?>
<!doctype html>
<html lang="en">

<head>

    <?php include('style.php') ?>

    <title>Color Arc</title>

</head>

<body>


    <!-- -------------------------Fixed navbars start-------------------------------- -->




        <!-- -------------------------Navbar start-------------------------------- -->

        <?php include('contents/nav.php') ?>
        
        <!-- -------------------------Navbar end-------------------------------- -->
    



    <!-- -------------------------Product Navbar start-------------------------------- -->
    
    
    <section class="my-wishlist">
        <div class="container">
            <h3 class="fw-bold head-color text-center">My  Wishlist </h3>
            
                <div class="wishlist-head d-none d-md-block">
                    <div class="row">
                        <div class="col-lg-4">
                            <h5 class="head-color ">Product</h5>
                        </div>

                        <div class="col-lg-3">
                            <h5 class="head-color ">Description</h5>
                        </div>

                        <div class="col-lg-3">
                            <h5 class="head-color ">Price</h5>
                        </div>

                        <div class="col-lg-2">
                            <h5 class="head-color ">Move to Cart</h5>                             
                        </div>

                    </div>
                    <hr class=" d-none d-md-block">
                </div>

                <div class="wishlist-items">
                    <div class="row">
                        <?php

                            $user = $_SESSION["colorarc_user_id"];
                            $sql = "select * from tbl_wishlist where user='$user'";
                            $run = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_array($run)){

                            $id = $row["id"];
                            $pid = $row["pid"];
                            $user = $row["user"];

                            $pro_sql = "select * from tbl_products where id='$pid'";
                            $pro_run = mysqli_query($con, $pro_sql);
                            $pro_row = mysqli_fetch_assoc($pro_run);


                            $img = $pro_row["img"];            
                            $product_name = $pro_row["product_name"];
                            $price = $pro_row["price"]; 
                            $explanation = $pro_row["explanation"]; 
                            
                            
                        ?>

                        <div class="col-lg-4">
                            <img src="admin/assets/images/wishlist/<?php echo $img ?>" alt="wishlist image" class="img-fluid">
                        </div>
                        <div class="col-lg-3">
                            <h6 class="head-color fw-bold mt-3 mt-md-5"><?php echo $product_name ?></h6>
                            <p class="para-color"><?php echo $explanation ?> </p>
                        </div>                
                        <div class="col-lg-3 mt-2 mt-md-5">
                            <h4 class="head-color fw-bold"><?php echo $price ?> </h4>
                        </div>
                        <div class="col-lg-2 product">
                            <input type="hidden" class="pid" value="<?php echo $id ?>">
                            <button class="cart-btn cart_btn button-style mt-2 mt-md-5 add-cart">Add to Cart</button>
                        </div>
                        <hr class="mt-4 mb-4 mt-md-3 mb-md-3">
                        <?php } ?>
                    </div>
                </div>
        </div>
    </section>

    <!-- -------------------------testimonial end-------------------------------- -->


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