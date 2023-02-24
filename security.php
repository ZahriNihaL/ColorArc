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
    
    <section class="my-profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="profile-banner">

                        <div class="profile-name">
                            <div class="img-bg">
                                <img src="images/profile/1.png" alt="" class="img-fluid">
                            </div>
                            <h5 class="head-color fw-bold text-center mt-3">Melbin Thomas</h5>
                        </div>

                           <div class="profile-links mt-5 ms-5">

                            <div class="profile-link-bg">
                                <a href="#" > <i class="fa fa-user me-2"></i> My Account</a>
                            </div>
                            <hr>
                            <div class="profile-link-bg">
                                <a href="profile.html#security" ><i class="fa fa-key me-2"></i> Security</a><br>
                            </div>
                            <hr>
                            <div class="profile-link-bg">
                                <a href="#" ><i class="fa fa-heart me-2"></i> My Wishlist</a><br>
                            </div>
                            <hr>
                            <div class="profile-link-bg">
                                <a href="#" ><i class="fa fa-shopping-cart me-2"></i> My Cart</a><br>
                            </div>
                            <hr>
                            <div class="profile-link-bg">
                                <a href="#" ><i class="fa fa-shopping-bag me-2"></i> My Orders</a>
                            </div>
                            <hr class="mb-5">
                            <a href="#" class=" d-none d-md-block"><button class="btn-sm button-style"><i class="fa fa-sign-out me-2 text-white"></i>Logout</button></a>
                            <a href="#" class=" d-block d-md-none"><i class="fa fa-sign-out me-2 text-white"></i>Logout</button></a>
                           </div>
                    </div>
                </div>
                <div class="col-lg-9 mt-0">
                    <div class="security-info mt-5" id="security">
                        <form>
                            <div class="row">
                                <h5 class="head-color fw-bold mb-5">Security</h5>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Old Password</label>
                                        <input type="password" name="old_pass" class="form-control" id="exampleInputPassword1">
                                        <input type="checkbox" onclick="myFunction()" class="mt-2 me-2">Show Password</div>
                                    </div>
                                </div>                           
                            <div class="row d-flex">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword2" class="form-label">New Password</label>
                                        <input type="password" name="new_pass" class="form-control" id="exampleInputPassword2">
                                        <input type="checkbox" onclick="myFunction()" class="mt-2 me-2">Show Password</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                        <input type="password" name="retype_pass" class="form-control" id="myInput">
                                        <input type="checkbox" onclick="myFunction()" class="mt-2 me-2">Show Password</div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button type="submit" name="change_password" class="button-style btn-sm">Submit</button>
                                    <a href="" class="delete-account ms-4">Delete Account</a>
                                </div>
                            </div>
                        </form>
                    </div>
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


</body>

</html>