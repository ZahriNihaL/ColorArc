<?php

// session_start();
// if (!isset($_SESSION["loggedin"])) {
//     header("Location:login.php");
// }

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

            <div class="card custom-card-2">
                <div class="card-body p-3 d-flex align-items-center justify-content-between">
                    <h5 class="mb-0 fw-bold">Add Profile</h5>
                </div>
            </div>

            <div class="card custom-card-2 mt-2">
                <div class="card-body p-4">
                    <form method="post" action="functions/functions.php" enctype="multipart/form-data">
                    <div class="mb-3">
                            <label class="form-label" for="image">Image :</label>
                            <input type="file" class="form-control" name="img" id="image" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">First Name :</label>
                            <input type="text" class="form-control" value="<?php echo $first_name ?>" name="first_name" id="title" placeholder="Enter First Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Last Name :</label>
                            <input type="text" class="form-control" name="last_name" value="<?php echo $last_name ?>" id="title" placeholder="Enter Last Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Gender :</label>
                            <input type="text" class="form-control" name="gender" value="<?php echo $gender ?>" id="title" placeholder="Enter Gender" required>
                        </div> 
                        <div class="mb-3">
                            <label class="form-label" for="title">Phone_Number :</label>
                            <input type="text" class="form-control" name="phone_number" value="<?php echo $phone_number ?>" id="title" placeholder="Enter PhoneNumber" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">About :</label>
                            <input type="text" class="form-control" name="about" value="<?php echo $about ?>" id="title" placeholder="Enter About You" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Address :</label>
                            <input type="text" class="form-control" name="address" value="<?php echo $address ?>" id="title" placeholder="Enter Your Address" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">City :</label>
                            <input type="text" class="form-control" name="city" value="<?php echo $city ?>" id="title" placeholder="Enter Your City" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Pincode :</label>
                            <input type="text" class="form-control" name="pincode" value="<?php echo $pincode ?>" id="title" placeholder="Enter Your Pincode" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">e-mail  :</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $email ?>" id="title" placeholder="Enter Your Email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Password :</label>
                            <input type="text" class="form-control" name="password" value="<?php echo $password ?>" id="title" placeholder="Enter The Password" required>
                        </div>

                        <br>
                        <div class="mb-3"> 
                            <button type="submit" class="btn btn-success float-end" name="add_profile" style="background-color: #460a38;"> SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>
</body>

</html>