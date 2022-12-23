<?php

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
    
    
    <section class="my-cart">
        <div class="container">
            <h3 class="fw-bold head-color text-center">My  Shopping Cart </h3>
            
                <div class="wishlist-head d-none d-md-block">
                    <div class="row">
                        <div class="col-lg-2">
                            <h5 class="head-color ">Product</h5>
                        </div>

                        <div class="col-lg-2">
                            <h5 class="head-color ">Description</h5>
                        </div>

                        <div class="col-lg-2">
                            <h5 class="head-color ">Price</h5>
                        </div>

                        <div class="col-lg-2">
                            <h5 class="head-color ">Quantity</h5>
                        </div>

                        <div class="col-lg-2">
                            <h5 class="head-color ">Total</h5>
                        </div>

                        <div class="col-lg-2">
                            <!-- <h5 class="head-color ">Remove</h5>                              -->
                        </div>

                    </div>
                    <hr class=" d-none d-md-block">
                </div>

                <div class="wishlist-items">

                    <?php
            
                        $sql = "select * from tbl_cart";
                        $run = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($run)){


                            $id = $row["id"];
                            $product_name = $row["product_name"];
                            $explanation =$row["explanation"]; 
                            $img = $row["img"];
                            $price = $row["price"];
                            $total_price = $row["total_price"];
                                        
                        
                    ?>

                    <div class="row">

                        <div class="col-lg-2">
                            <img src="admin/assets/images/cart/<?php echo $img ?>" alt="wishlist image" class="img-fluid">
                        </div>

                        <div class="col-lg-2">
                            <h6 class="head-color fw-bold mt-3 mt-md-3"><?php echo $product_name ?></h6>
                            <p class="para-color"><?php echo $explanation ?></p>
                        </div>

                        <div class="col-lg-2 mt-2 mt-md-5 d-none d-md-block">
                            <h5 class="head-color fw-bold"><?php echo $price ?> </h5>
                        </div>

                        <!-- <div class="col-lg-2 mt-2 mt-md-5 d-block d-md-none d-flex justify-content-center">
                            <h5 class="head-color me-3">Price</h5>
                            <h5 class="head-color fw-bold">₹399</h5>
                        </div> -->

                        <div class="col-lg-2 mt-2 mt-md-5 ">
                            <div class="d-flex quantity ">
                                <!-- <a href="#"><div class="i-bg"><i class="fa fa-minus"></i></div></a>
                                <div class="i-bg"><h6 class="head-color fw-bold text-center">1</h></div>
                                <a href="#"><div class="i-bg"><i class="fa fa-plus text-center"></i></div></a> -->

                                <div class="input-group mb-3">
                                    <button class="btn-sm qty-button">-</button>
                                    <button class="btn-sm qty-button">1</button>
                                    <button class="btn-sm qty-button">+</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 mt-2 mt-md-5 ">
                            <h5 class="head-color fw-bold"><?php echo $total_price ?> </h5>
                        </div>
                        <!-- <div class="col-lg-2 mt-3 mt-md-5 d-block d-md-none d-flex justify-content-center ">
                            <h5 class="head-color  me-3 ">Total </h5>
                            <h5 class="head-color fw-bold">₹399 </h5>
                        </div> -->
                        
                        <div class="col-lg-2 justify-content-center">
                            <form method="post" action="functions/functions.php">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <button type="submit" name="remove_item" class="btn btn-danger remove-btn">Remove</button>
                            </form>                       
                        </div> 

                        <hr class="mt-4 mb-4 mt-md-3 mb-md-3">
                    </div> 
                    <?php } ?>                                     

                    <div class="row mt-5">
                        <div class="d-flex justify-content-between">
                            <h5 class="head-color">Total Price</h5>
                            <h5 class="head-color">200</h5>
                        </div>

                        <hr class="mt-2">

                        <!-- <div class="text-center">
                            <button class="btn-sm button-style mt-3">Continue</button>
                        </div> -->
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

</html