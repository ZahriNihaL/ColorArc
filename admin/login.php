<?php
session_start();
if (isset($_SESSION["loggedin"])) {
  header("Location:index.php");
}
include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php

    include("style.php");

    ?>

</head>
<body>
<section class="login_page">
    <div class="container">
        <div class="card my-5">
            <div class="card_body">
                <div class="row">
                    <div class="col-6 col-md-6" >
                        <img src="../admin/assets/images/purple-gift-box-womans-hands-purple-sweaterrr.jpg" class="img-fluid">
                    </div>

                    <div class="col-6 col-md-6 d-flex justify-content-center align-items-center">
                        <form method="POST" class="w-75" action="functions/functions.php">
                            <h4 class="fw-bold text-center">Log In </h4>

                            <?php
                            if(isset($_GET["error"])){
                            ?>

                            <div class="alert alert-danger text-center" role="alert">
                                <?php
                                $error = $_GET["error"];
                                echo strip_tags($error);
                                ?>
                            </div>

                            <?php
                            }
                            ?>

                            <div class="form_input mb-3">
                                <input type="text" name="username" class="form-control" id="exampleDropdownFormEmail1" placeholder="Username" required>
                            </div>

                            <div class="form_input mb-3">
                                <input type="text" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" required>
                            </div>

                            <input type="submit" name="login" value="LOGIN" class="btn w-100">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>