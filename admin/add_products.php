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
            <div class="card custom-card-2 mt-2">
                <div class="card-body p-4">
                    <form method="post" action="assets/functions/functions.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="title">Product Name :</label>
                            <input type="text" class="form-control" name="product_name" id="title" placeholder="Enter Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Explanation :</label>
                            <input type="text" class="form-control" name="explanation" id="title" placeholder="Enter Product Explanation" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Image :</label>
                            <input type="file" class="form-control" name="img" id="image">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Price :</label>
                            <input type="text" class="form-control" name="price" id="title" placeholder="Enter Price" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Total :</label>
                            <input type="text" class="form-control" name="total" id="title" placeholder="Enter Offer Price" required>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success float-end" name="add_products" style="background-color:#72080f;">SUBMIT</button>
                        </div>
                    </form>
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