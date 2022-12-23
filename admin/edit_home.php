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
                    <h5 class="mb-0 fw-bold">UPDATE HOME</h5>
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

              <?php
              
              $id = $_POST["id"];
              $sql = "select * from tbl_home where id='$id'";
              $run = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($run);
              
              $title = $row["title"];
              $img = $row["img"];
              $img2 = $row["img2"];
              $description = $row["description"];
        
              ?>

            <div class="card custom-card mt-2">
                <div class="card-body p-4">
                <form method="post" action="functions/functions.php" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label class="form-label" for="name">Title :</label>
                            <input type="text" class="form-control" name="title" id="name" value="<?php echo $name ?>" placeholder="enter any testimonial" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="img">Image1 :</label>
                            <input type="file" class="form-control" name="img" id="img">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="img">Image2 :</label>
                            <input type="file" class="form-control" name="img2" id="img">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label" for="title">Description :</label>
                            <input type="text" class="form-control" name="description" id="title" placeholder="Enter Any Description" value="<?php echo $description ?>" required>
                        </div>
                        
                        <div class="mb-3">
                            <input type="hidden" name="old_img" value="<?php echo $img ?>">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <button type="submit" class="btn btn-success float-end" name="update_title" style="background-color: #e9b819;">SUBMIT</button>
                        </div>
                    </form>           
                </div>
            </div>
        </div>
    </div>
</body>
</html>