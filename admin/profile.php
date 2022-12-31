<?php

// session_start();
// if (!isset($_SESSION["loggedin"])) {
//   header("Location:login.php");
// }

include("includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>







  
<?php
include("style.php");
?>

  <title>Profile</title>

</head>

<body>
  <div class="row min-vh-100 g-0">

    <?php include("content/navbar.php") ?>

    <div class="col-lg-10 wrapper">
        <div class="card custom-card-2">
          <div class="card-body p-3 d-flex align-items-center justify-content-between">
            <h5 class="mb-0 fw-bold">PROFILES</h5>
            <a href="add_profile.php" class="btn btn-success" style="background-color:  #460a38;">Add Profile</a>
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

        <div class="card custom-card-2 mt-3">
          <div class="card-body p-3">
            <div class="row">

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

              <div class="col-md-3 profile">
                <div class="card">
                  <div class="card-body p-2 text-center">
                    <img src="assets/images/profile/<?php echo $img ?>" class="img-fluid">
                    <h4 class="fw-bold mt-2"><?php echo $first_name ?></h4>
                    <div class="fw-bold mt-2"><?php echo $last_name ?></div>
                    <div class="fw-bold mt-2"><?php echo $gender ?></div>
                    <div class="fw-bold mt-2"><?php echo $phone_number ?></div>
                    <div class="fw-bold mt-2"><?php echo $about ?></div>
                    <div class="fw-bold mt-2"><?php echo $address ?></div>
                    <div class="fw-bold mt-2"><?php echo $city ?></div>
                    <div class="fw-bold mt-2"><?php echo $pincode ?></div>
                    <div class="fw-bold mt-2"><?php echo $email ?></div>
                    <div class="fw-bold mt-2"><?php echo $password ?></div>
                  
                    <div class="d-flex justify-content-center">
                      <form method="post" action="editprofile.php">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <button type="submit" name="update_product" class="btn btn-primary me-2">Update</button>
                      </form>
                      <form method="post" action="functions/functions.php">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <button type="submit" name="delete_product" class="btn btn-danger">Delete</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
           
            </div>
          </div>
        </div>
    </div>
  </div>
</body>
</html>