<?php
session_start();
include("admin/assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
<?php include('css/style.php') ?>
<title>Color Arc</title>
</head>
<body>

    <!-- -------------------------Fixed navbars start------------------------- -->

    <!-- -------------------------Navbar start-------------------------------- -->

    <?php include('contents/nav.php') ?>

    <!-- -------------------------Navbar end-------------------------------- -->

    <!-- -------------------------Product Navbar start----------------------- -->

    <section class="my-cart">
        <div class="container">
            <h3 class="fw-bold head-color text-center">My Shopping Cart </h3>
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
                </div>
                <hr class=" d-none d-md-block">
            </div>
            <div class="wishlist-items">
                <?php
                $total_price = 0;
                $user = $_SESSION["colorarc_user_id"];
                $sql = "select * from tbl_cart where user='$user'";
                $run = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($run)) {
                    $id = $row["id"];
                    $pid = $row["pid"];
                    $qty = $row["qty"];
                    $pro_sql = "select * from tbl_products where id='$pid'";
                    $pro_run = mysqli_query($con, $pro_sql);
                    $pro_row = mysqli_fetch_assoc($pro_run);
                    $img = $pro_row["img"];
                    $product_name = $pro_row["product_name"];
                    $explanation = $pro_row["explanation"];
                    $price = $pro_row["total"];
                    $pro_price = (int)$qty * (float)$price;
                    $total_price += $pro_price;
                ?>
                    <div class="row ind">
                        <div class="col-lg-2">
                            <img src="admin/assets/images/cart/<?php echo $img ?>" alt="wishlist image" class="img-fluid">
                        </div>
                        <div class="col-lg-2">
                            <h6 class="head-color fw-bold mt-3 mt-md-3"><?php echo $product_name ?></h6>
                            <p class="para-color"><?php echo $explanation ?></p>
                        </div>
                        <div class="col-lg-2 mt-2 mt-md-5 d-none d-md-block">
                            <input type="hidden" class="price_output" value="<?php echo $price ?>">
                            <h5 class="head-color fw-bold"><?php echo $price ?> </h5>
                        </div>
                        <div class="col-lg-2 mt-2 mt-md-5 ">
                            <div class="d-flex quantity ">
                                <div class="input-group mb-3">
                                    <input type="hidden" class="pro_price_output" value="<?php echo $pro_price ?>">
                                    <input type="hidden" class="cid" value="<?php echo $id ?>">
                                    <button class="decrimentButton btn-sm qty-button" for="decrement">-</button>
                                    <button class="btn-sm qty-output qty-button"><?php echo $qty ?></button>
                                    <button class="incrimentButton btn-sm qty-button" for="increment">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 mt-2 mt-md-5 ">
                            <h5 class="regularPrice head-color fw-bold ind-tot-price"><?php echo $pro_price ?> </h5>
                        </div>
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
                        <input type="hidden" class="total_price_output" value="<?php echo $total_price ?>">
                        <h5 class="head-color">Total Price</h5>
                        <h5 class="head-color"><?php echo $total_price ?></h5>
                    </div>
                    <hr class="mt-2">
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------testimonial end-------------------------------- -->

    <!-- -------------------------footer start-------------------------------- -->

    <?php include('contents/footer.php') ?>

    <!-- -------------------------footer end-------------------------------- -->

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html