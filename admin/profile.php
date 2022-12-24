<?php

include("includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    include("style.php");

    ?>
    <title>Settings</title> 

</head>

<body>
    <div class="row min-vh-100 g-0">

        <?php include("content/navbar.php") ?>

        <div class="col-lg-10 wrapper">
            <div class="card custom-card-2">
                <div class="card-body p-3 d-flex align-items-center justify-content-between">
                    <h5 class="mb-0 fw-bold">PROFILE</h5>
                </div>
            </div>

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

            <?php

            $sql = "select * from tbl_profile where id='1'";
            $run = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($run);

            $img = $row["img"];
            $first_name = $row["first_name"];
            $last_name = $row["last_name"];
            $gender = $row["gender"];
            $phone_number = $row["phone_number"];
            $about = $row["about"];
            $address = $row["address"];
            $city = $row["city"];
            $pincode = $row["pincode"];
            $email = $row["email"];
            $password = $row["password"];
           
           
            ?>

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

                        

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success float-end" name="update_profile" style="background-color: #460a38;">UPDATE</button>
                        </div>
                    </form>
                </div>
            </div>

            <button type="button" class="btn btn-success mt-3" name="change_password" data-bs-toggle="modal" data-bs-target="#myModal" style="background-color: #460a38;">CHANGE PASSWORD</button>
        </div>
    </div>


    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST" action="functions/functions.php">
                    <!-- Modal body -->
                    <div class="modal-body">


                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Old Password</label>
                            <input type="password" name="old_pass" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">New Password</label>
                            <input type="password" name="new_pass" class="form-control" id="exampleInputPassword2">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword3" class="form-label">Confirm Password</label>
                            <input type="password" name="retype_pass" class="form-control" id="exampleInputPassword3">
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="background-color: #7d1128;">Close</button>
                        <button type="submit" name="change_password" class="btn btn-primary" style="background-color: #7d1128;">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>