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


<!-- -------------------------Navbar start-------------------------------- -->
 
    <?php include('contents/nav.php') ?>
       
<!-- -------------------------Navbar end-------------------------------- -->




<section class="login-page">
    <div class="container">
    <h3 class="fw-bold head-color text-center">Hello!</h3>
    <h4 class="fw-bold head-color text-center">Welcome to Our Color Arc World</h4>

        <div class="row">
            <div class="col-lg-6">
                <img src="images/loginimg.png" alt="" class="img-fluid">
            </div>

            <div class="col-lg-6">
                <form>
                    <div class="mb-3">
                        <input type="phone" class="form-control" id="phone-num" aria-describedby="emailHelp" name="phone-num" placeholder="Enter Your Phone Number">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="login-password" name="login-password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                    <p class="para-color mt-3">Don't have an account yet? <a href="#">Sign Up Now</a></p>
                </form>
            </div>
        </div>
        
    
    </div>
</section>

























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