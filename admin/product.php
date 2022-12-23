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
  <title>Dashboard</title>
</head>

<body>
  <div class="row min-vh-100 g-0">

    <?php include("content/navbar.php") ?>

    <div class="col-lg-10 wrapper">
        <div class="card custom-card-2">
          <div class="card-body p-3 d-flex align-items-center justify-content-between">
            <h5 class="mb-0 fw-bold">PRODUCTS</h5>
            <a href="add_product.php" class="btn btn-success" style="background-color:  #460a38;">Add Products</a>
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
            
            $sql = "select * from tbl_product";
            $run = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($run)){

              $id = $row["id"];
              $img = $row["img"];            
              $product_name = $row["product_name"];
              $price = $row["price"]; 
              $offer_price = $row["offer_price"];
              $rating = $row["rating"];            

            ?>

              <div class="col-md-3 product">
                <div class="card">
                  <div class="card-body p-2 text-center">
                    <img src="assets/images/product/<?php echo $img ?>" class="img-fluid">
                    <h4 class="fw-bold mt-2"><?php echo $product_name ?></h4>
                    <div class="fw-bold mt-2"><?php echo $price ?></div>
                    <div class="fw-bold mt-2"><?php echo $offer_price ?></div>
                    <div class="fw-bold mt-2"><?php echo $rating ?></div>

                    <div class="d-flex justify-content-center">
                      <form method="post" action="editproduct.php">
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
            <?php } ?>
            </div>
          </div>
        </div>
    </div>
  </div>
</body>
</html>