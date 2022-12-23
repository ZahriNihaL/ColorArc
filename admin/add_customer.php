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
                    <h5 class="mb-0 fw-bold">ADD Customer</h5>
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

            <div class="card custom-card-2 mt-2">
                <div class="card-body p-4">
                    <form method="post" action="functions/functions.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="title">Name :</label>
                            <input type="text" class="form-control" name="pname" id="title" placeholder="Enter Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Designation :</label>
                            <input type="text" class="form-control" name="designation" id="title" placeholder="Enter Designation" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Image :</label>
                            <input type="file" class="form-control" name="img" id="image" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label" for="title">Explanation :</label>
                            <input type="text" class="form-control" name="explanation" id="title" placeholder="Explain" required>
                        </div>

                       
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success float-end" name="add_customer" style="background-color: #460a38;">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>
</html>