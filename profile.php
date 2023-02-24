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
    <title>Profile</title>
</head>

<body class="bg-color-body">

    <!-- -------------------------Fixed navbars start-------------------------------- -->

    <!-- -------------------------Navbar start-------------------------------- -->

    <?php include('contents/nav.php') ?>

    <!-- -------------------------Navbar end-------------------------------- -->

    <!-- -------------------------Product Navbar start-------------------------------- -->
    <?php
    $sql = "select * from tbl_customers";
    $run = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($run);
    $id = $row["id"];
    $name = $row["name"];
    $phone_number = $row["phone_number"];
    $mail = $row["mail"];
    $gender = $row["gender"];
    $password = $row["password"];
    $img = $row["img"];
    ?>
    <section class="my-profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="profile-banner">
                        <div class="profile-name">
                            <div class="img-bg">
                                <img src="images/user .png" alt="" class="img-fluid">
                            </div>
                            <h5 class="head-color fw-bold text-center mt-3"><?php echo $name ?></h5>
                        </div>
                        <div class="profile-links mt-5 ms-5">

                            <div class="profile-link-bg">
                                <a href="#"> <i class="fa fa-user me-2"></i> My Account</a>
                            </div>
                            <hr>
                            <div class="profile-link-bg">
                                <a href="security.php"><i class="fa fa-key me-2"></i> Security</a><br>
                            </div>
                            <hr>
                            <div class="profile-link-bg">
                                <a href="#"><i class="fa fa-heart me-2"></i> My Wishlist</a><br>
                            </div>
                            <hr>
                            <div class="profile-link-bg">
                                <a href="#"><i class="fa fa-shopping-cart me-2"></i> My Cart</a><br>
                            </div>
                            <hr>
                            <div class="profile-link-bg">
                                <a href="#"><i class="fa fa-shopping-bag me-2"></i> My Orders</a>
                            </div>
                            <hr class="mb-5">
                            <a href="#" class=" d-none d-md-block"><button class="btn-sm button-style"><i class="fa fa-sign-out me-2 text-white"></i>Logout</button></a>
                            <a href="#" class=" d-block d-md-none"><i class="fa fa-sign-out me-2 text-white"></i>Logout</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 ">
                    <div class="profile-info">
                        <h5 class="head-color fw-bold mb-2">PROFILE SETTINGS</h5>
                        <?php
                        if (isset($_GET["error"])) {
                        ?>
                            <div class="alert alert-danger text-center mt-2" role="alert">
                                <?php
                                $error = $_GET["error"];
                                echo $error;
                                ?>
                            </div>
                        <?php
                        } else if (isset($_GET["success"])) {
                        ?>
                            <div class="alert alert-success text-center mt-2" role="alert">
                                <?php
                                $error = $_GET["success"];
                                echo $error;
                                ?>
                            </div>
                        <?php } ?>
                        <form method="POST" action="functions/functions.php">
                            <div class="text-center profile-name">
                                <div class="text-center img-bg">
                                    <img src="images/profile/<?php echo $img ?>" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-3 edit-profile mt-3 mb-5">
                                <a href="#"> <input type="file" class="form-control update-photo" name="img" id="image"></a>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Full Name </label>
                                        <input type="text" class="form-control" name="name" value="<?php echo $name ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Gender</label>
                                        <select class="form-select" name="gender" id="gender" aria-label="Default select example">
                                            <option selected>Select Gender </option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Phone</label>
                                        <input type="phone" class="form-control" name="phone_number" value="<?php echo $phone_number ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your mobile number">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="old_img" value="<?php echo $img ?>">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <button class="button-style btn-sm" name="update_profile">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- -------------------------testimonial end-------------------------------- -->

<!-- -------------------------footer start-------------------------------->

<?php include('contents/footer.php') ?>

<!-- -------------------------footer end---------------------------------->

<?php include("contents/script.php") ?>

    <script>
        <?php
        if ($gender != "") {
            echo "$('#gender option[value=$gender]').attr('selected',TRUE);";
        }
        ?>
    </script>
</body>
</html>