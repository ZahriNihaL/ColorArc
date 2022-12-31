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
                    <h5 class="mb-0 fw-bold">SETTINGS</h5>
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

            $sql = "select * from tbl_company where id='1'";
            $run = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($run);

            $company_time = $row["company_time"];
            $place = $row["place"];
            $email1 = $row["email1"];
            $phone_number1 = $row["phone_number1"];
            $phone_number2 = $row["phone_number2"];
            $link = $row["link"];
            $facebook = $row["facebook"];
            $instagram = $row["instagram"];
           
            ?>

            <div class="card custom-card-2 mt-2">
                <div class="card-body p-4">
                    <form method="post" action="functions/func
                    
                    
                    7tions.php" enctype="multipart/form-data">
                    
                        <div class="mb-3">
                            <label class="form-label" for="title">Company Time :</label>
                            <input type="text" class="form-control" value="<?php echo $company_time ?>" name="company_name" id="title" placeholder="Enter Company Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Place :</label>
                            <input type="text" class="form-control" name="place" value="<?php echo $place ?>" id="title" placeholder="Enter Company Place" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">e-mail 1 :</label>
                            <input type="text" class="form-control" name="email1" value="<?php echo $email1 ?>" id="title" placeholder="Enter Primary Email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Phone_Number1 :</label>
                            <input type="text" class="form-control" name="phone_number1" value="<?php echo $phone_number1 ?>" id="title" placeholder="Enter Primary PhoneNumber" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Phone_Number2 :</label>
                            <input type="text" class="form-control" name="phone_number2" id="title" value="<?php echo $phone_number2 ?>" placeholder="Enter Secondary PhoneNumber" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="link">Website :</label>
                            <input type="url" class="form-control" id="url" name="link" value="<?php echo $link ?>" placeholder="Enter Website Link" required>
                        </div>

                        <label class="form-label" for="title">Facebook :</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">https://facebook.com/</span>
                            <input type="text" class="form-control" id="basic-url" name="facebook" value="<?php echo $facebook ?>" aria-describedby="basic-addon3">
                        </div>

                        <label class="form-label" for="title">Instagram :</label>5
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">https://instagram.com/</span>
                            <input type="text" class="form-control" id="basic-url" name="instagram" value="<?php echo $instagram ?>" aria-describedby="basic-addon3">
                        </div>

                        

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success float-end" name="update_settings" style="background-color: #460a38;">UPDATE</button>

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