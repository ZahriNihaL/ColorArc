<?php
include("assets/includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include("assets/css/style.php");
  ?>
  <title>PRODUCTS</title>
</head>

<body>
  <?php include("assets/content/navbar.php") ?>
  <section class="home">
    <div class="text">
      <div class="admin-card">
        <div class="card">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-lg-10">
                <h4 class="card-title ms-0 fw-bold mb-0">PRODUCTS</h4>
              </div>
              <div class="card-top col-lg-2 text-end">
                <a href="add_products.php" class="btn dashboard-btn me-auto btn-sm" style="background-color: #72080f;">Add Product</a>
              </div>
            </div>
          </div>
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
      <div class="card custom-card-2 mt-3">
        <div class="card-body p-3">
          <div class="row">
            <?php
            $sql = "select * from tbl_products";
            $run = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($run)) {
              $id = $row["id"];
              $product_name = $row["product_name"];
              $explanation = $row["explanation"];
              $img = $row["img"];
              $price = $row["price"];
              $total = $row["total"];
              $rating = $row["rating"];
            ?>
              <div class="col-md-3 cart card-color mb-3">
                <div class="card data-card">
                  <div class="card-body p-2 text-center">
                    <img src="assets/images/products/<?php echo $img ?>" class="img-fluid">
                    <h6 class="fw-bold mt-2"><?php echo $product_name ?></h6>
                    <div class="d-flex justify-content-center">
                      <form method="post" action="edit_products.php">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <button type="submit" name="update_products" class="btn btn-primary me-2" style="background-color: #38303D; border: 0;">Update</button>
                      </form>
                      <form method="post" action="assets/functions/functions.php">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <button type="submit" name="delete_products" class="btn btn-danger" onclick="return confirm('Are you sure to delete?');" style="background-color: #ac0404; border: 0;">Delete</button>
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
  </section>
    <?php include("assets/content/script.php"); ?>
    <script>
      changeNav("products-nav");
    </script>
</body>

</html>