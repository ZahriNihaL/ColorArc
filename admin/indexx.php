<?php
include("assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
<?php
include("assets/css/style.php");
?>
<title>Dashboard</title>
</head>
<body>
<?php include("assets/content/navbar.php") ?>
<section class="home">
    <div class="text">
        <div class="admin-card">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6">
                        <h4 class="card-title ms-0 fw-bold mt-2">DASHBOARD</h4>
                    </div>
                  </div>                           
                </div>
            </div>
        </div>
      
        <?php
        $hom_sql = "select * from tbl_home";
        $run_hom = mysqli_query($con, $hom_sql);
        $hom_count = mysqli_num_rows($run_hom);
        ?>    
        <div class="home-cards">
            <div class="row">
                <div class="col-lg-2 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h6 class="card-title fw-bold">HOME</h6>
                                    <h4 class="fw-bold text-black"><?php echo $hom_count ?></h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">
                                <i class="bi bi-card-checklist icon"></i>
                                </div>
                            </div>
                          <p class="card-text">Total Home</p>
                        </div>
                    </div>
                </div>
                <?php
                $tbl_sql = "select * from tbl_trending";
                $run_tbl = mysqli_query($con, $tbl_sql);
                $tbl_count = mysqli_num_rows($run_tbl);
                ?>    
                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h6 class="card-title fw-bold">TRENDING</h6>
                                            <h4 class="fw-bold text-black"><?php echo $tbl_count ?></h4>
                                        </div>
                                        <div class="col-lg-4 icon-dash card-img-bg">
                                        <i class="bi bi-display icon"></i>
                                        </div>
                                    </div>
                                <p class="card-text">Total Trending</p>
                                </div>
                            </div>
                        </div>
                        <?php
                $cat_sql = "select * from tbl_category";
                $run_cat = mysqli_query($con, $cat_sql);
                $cat_count = mysqli_num_rows($run_cat);
                ?>    
                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h6 class="card-title fw-bold">CATEGORIES</h6>
                                            <h4 class="fw-bold text-black"><?php echo $cat_count ?></h4>
                                        </div>
                                        <div class="col-lg-4 icon-dash card-img-bg">
                                        <i class="bi bi-display icon"></i>
                                        </div>
                                    </div>
                                <p class="card-text">Total Categories</p>
                                </div>
                            </div>
                        </div>
                        <?php
                $cart_sql = "select * from tbl_cart";
                $run_cart = mysqli_query($con, $cart_sql);
                $cart_count = mysqli_num_rows($run_cart);
                ?>
                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h6 class="card-title fw-bold"> ADD TO CART</h6>
                                            <h4 class="fw-bold text-black"><?php echo $cart_count ?></h4>
                                        </div>
                                        <div class="col-lg-4 icon-dash card-img-bg">
                                            <i class="bi bi-person-lines-fill icon"></i>                                   
                                        </div>
                                    </div>
                                <p class="card-text">Total Cart Products</p>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</section>
<?php include("assets/content/script.php"); ?>
<script>
        changeNav("indexx-nav");
</script>
</body>
</html>

