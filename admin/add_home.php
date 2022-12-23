<?php

// session_start();
// if (!isset($_SESSION["loggedin"])) {
//     header("Location:login.php");
// }

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
                    <h5 class="mb-0 fw-bold">HOME</h5>
                </div>
            </div>

            <?php
              if(isset($_GET["error"])){
              ?>
              <div class="alert alert-danger text-center mt-2" role="alert">
                <?php
                $error = $_GET["error"];
                echo $error;
                ?>
              </div>
              <?php
              }else if(isset($_GET["success"])){
              ?>
              <div class="alert alert-success text-center mt-2" role="alert">
                <?php
                $error = $_GET["success"];
                echo $error;
                ?>
              </div>
              <?php } ?>

               
            <div class=""></div>
            <div class="card custom-card-2 mt-2">
                <div class="card-body p-4">
                    <form method="post" action="functions/functions.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="title">Title :</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Name" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label" for="image">Image1 :</label>
                            <input type="file" class="form-control" name="img" id="image">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image2">Image2 :</label>
                            <input type="file" class="form-control" name="img2" id="image2">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Description :</label>
                            <input type="text" class="form-control" name="description" id="title" placeholder="Enter Any Description" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success float-end" name="add_home" style="background-color:#460a38;">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>