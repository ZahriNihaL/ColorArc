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
            <div class="admin-card mt-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-11">
                                <h4 class="card-title ms-0 fw-bold mt-2">PRODUCTS</h4>
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
            <?php
            $id = $_POST["id"];
            $sql = "select * from tbl_products where id='$id'";
            $run = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($run);

            $id = $row["id"];
            $product_name = $row["product_name"];
            $explanation = $row["explanation"];
            $img = $row["img"];
            $price = $row["price"];
            $total = $row["total"];
            $rating = $row["rating"];
            ?>

            <div class="card custom-card-2 mt-2">
                <div class="card-body p-4">
                    <form method="post" action="assets/functions/functions.php" enctype="multipart/form-data">
                    <div class="mb-3">
                            <label class="form-label" for="title">Product Name :</label>
                            <input type="text" class="form-control" name="product_name" id="title" value="<?php echo $product_name?>" placeholder="Enter Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Explanation :</label>
                            <input type="text" class="form-control" name="explanation" id="title" value="<?php echo $explanation?>" placeholder="Enter Designation" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Image :</label>
                            <input type="file" class="form-control" name="img" id="image">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Price :</label>
                            <input type="text" class="form-control" name="price" id="title" value="<?php echo $price?>" placeholder="Enter Any Description" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Total :</label>
                            <input type="text" class="form-control" name="total" id="title" value="<?php echo $total?>" placeholder="Enter Any Description" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Rating :</label>
                            <input type="text" class="form-control" name="rating" id="title" value="<?php echo $rating?>" placeholder="Enter Any Description" required>
                        </div>

                        <div class="mb-3">
                            <input type="hidden" name="old_img" value="<?php echo $img ?>">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <button type="submit" class="btn btn-sm submit_btn float-end" name="update_products" style="background-color:0d4c91;">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include("assets/content/script.php"); ?>
    <script>
        changeNav("classifications-nav");
    </script>
</body>

</html>