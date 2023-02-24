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


            <div class="home-cards">
                <div class="row">
                    <?php
                    $hom_sql = "select * from tbl_home";
                    $run_hom = mysqli_query($con, $hom_sql);
                    $hom_count = mysqli_num_rows($run_hom);
                    ?>
                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <h6 class="card-title fw-bold">HOME</h6>
                                        <h4 class="fw-bold text-black"><?php echo $hom_count ?></h4>
                                    </div>
                                    <div class="col-lg-3 icon-dash card-img-bg">
                                        <i class="bi bi-card-checklist icon"></i>
                                    </div>
                                </div>
                                <p class="card-text">Total Trending Products</p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $cls_sql = "select * from tbl_classification";
                    $run_cls = mysqli_query($con, $cls_sql);
                    $cls_count = mysqli_num_rows($run_cls);
                    ?>
                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h6 class="card-title fw-bold">CATEGORIES</h6>
                                        <h4 class="fw-bold text-black"><?php echo $cls_count ?></h4>
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
                    $pro_sql = "select * from tbl_products";
                    $run_pro = mysqli_query($con, $pro_sql);
                    $pro_count = mysqli_num_rows($run_pro);
                    ?>
                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h6 class="card-title fw-bold">PRODUCTS</h6>
                                        <h4 class="fw-bold text-black"><?php echo $pro_count ?></h4>
                                    </div>
                                    <div class="col-lg-4 icon-dash card-img-bg">
                                        <i class="bi bi-play-btn-fill icon"></i>
                                    </div>
                                </div>
                                <p class="card-text">Total Products</p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $cus_sql = "select * from tbl_customers";
                    $run_cus = mysqli_query($con, $cus_sql);
                    $cus_count = mysqli_num_rows($run_cus);
                    ?>
                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h6 class="card-title fw-bold">CUSTOMERS</h6>
                                        <h4 class="fw-bold text-black"><?php echo $cus_count ?></h4>
                                    </div>
                                    <div class="col-lg-4 icon-dash card-img-bg">
                                        <i class="bi bi-person-lines-fill icon"></i>
                                    </div>
                                </div>
                                <p class="card-text">Total Customers</p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $cont_sql = "select * from tbl_contact";
                    $run_cont = mysqli_query($con, $cont_sql);
                    $cont_count = mysqli_num_rows($run_cont);
                    ?>
                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h6 class="card-title fw-bold">CONTACTS</h6>
                                        <h4 class="fw-bold text-black"><?php echo $cont_count ?></h4>
                                    </div>
                                    <div class="col-lg-4 icon-dash card-img-bg">
                                        <i class="bi bi-person-lines-fill icon"></i>
                                    </div>
                                </div>
                                <p class="card-text">Total Contacts</p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $test_sql = "select * from tbl_testimonial ";
                    $run_test = mysqli_query($con, $test_sql);
                    $test_count = mysqli_num_rows($run_test);
                    ?>
                    <div class="col-lg-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h6 class="card-title fw-bold">TESTIMONIAL</h6>
                                        <h4 class="fw-bold text-black"><?php echo $test_count ?></h4>
                                    </div>
                                    <div class="col-lg-4 icon-dash card-img-bg">
                                        <i class="bi bi-person-lines-fill icon"></i>
                                    </div>
                                </div>
                                <p class="card-text">Total Testimonials</p>
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