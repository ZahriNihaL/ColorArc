<?php
include("assets/includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <title>Dashboard</title>

</head>

<body>
    <div class="row min-vh-100 g-0">
        <?php include("content/navbar.php") ?>
        <div class="col-lg-10 wrapper">
            <div class="card custom-card-2">
                <div class="card-body p-3 d-flex align -items-center justify-content-between">
                    <h5 class="mb-0 fw-bold">WISHLIST</h5>
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
              $sql = "select * from tbl_wishlist where id='$id'";
              $run = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($run);

                $id = $row["id"];
                $product_name = $row["product_name"];
                $explanation =$row["explanation"]; 
                $img = $row["img"];
                $price = $row["price"];
                $rating = $row["rating"];
                $reviews = $row["reviews"];
                $pincode = $row["pincode"]; 

              ?>

            <div class="card custom-card mt-2">
                <div class="card-body p-4">
                <form method="post" action="functions/functions.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="title">Product Name :</label>
                            <input type="text" class="form-control" name="product_name" id="title" placeholder="Enter Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Price :</label>
                            <input type="text" class="form-control" name="price" id="title" placeholder="Enter Designation" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Image :</label>
                            <input type="file" class="form-control" name="image" id="image" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label" for="title">Explanation :</label>
                            <input type="text" class="form-control" name="explanation" id="title" placeholder="Explain" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="title">Rating :</label>
                            <input type="text" class="form-control" name="rating" id="title" placeholder="Explain" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="title">Reviews :</label>
                            <input type="text" class="form-control" name="reviews" id="title" placeholder="Explain" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="title">Pincode :</label>
                            <input type="text" class="form-control" name="explanation" id="title" placeholder="Explain" required>
                        </div>

                        <div class="mb-3">
                            <input type="hidden" name="old_img" value="<?php echo $img ?>">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <button type="submit" class="btn btn-success float-end" name="update_wishlist" style="background-color: #FEB700;">SUBMIT</button>
                        </div>
                    </form>
            
                </div>
            </div>

        </div>
    </div>
</body>

</html>