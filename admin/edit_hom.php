<?php
include("assets/includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include("assets/css/style.php");
    ?>

    <title>HOME</title>
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
                                <h4 class="card-title ms-0 fw-bold mt-2">HOME</h4>
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
            $sql = "select * from tbl_home where id='$id'";
            $run = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($run);
            
            $id = $row["id"];
            $title = $row["title"];
            $img = $row["img"];
            $img2 = $row["img2"];
            $description = $row["description"];
            ?>

            <div class="card custom-card-2 mt-2">
                <div class="card-body p-4">
                    <form method="post" action="assets/functions/functions.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="name">Title :</label>
                            <input type="text" class="form-control" name="title" id="name" value="<?php echo $title ?>" placeholder="enter any testimonial" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="img">Image1 :</label>
                            <input type="file" class="form-control" name="img" id="img">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="img2">Image2 :</label>
                            <input type="file" class="form-control" name="img2" id="img">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label" for="title">Description :</label>
                            <input type="text" class="form-control" name="description" id="title" placeholder="Enter Any Description" value="<?php echo $description ?>" required>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="old_img" value="<?php echo $img ?>">
                            <input type="hidden" name="old_img2" value="<?php echo $img2 ?>">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <button type="submit" class="btn btn-sm submit_btn float-end" name="update_hom" style="background-color:0d4c91;">SUBMIT</button>
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
