<?php

include("admin/includes/db.php");

?>

<!doctype html>

<html lang="en">

<head>

    <?php include('style.php') ?>

    <title>Color Arc</title>

</head>

<body>

<div class="alert popup">
</div>


    <!-- -------------------------Fixed navbars start-------------------------------- -->


    <!-- -------------------------Navbar start-------------------------------- -->

    <?php include('contents/nav.php') ?>

    <!-- -------------------------Navbar end-------------------------------- -->


    <!-- -------------------------Product Navbar start---------------------------------->


    <section class="product-navbar  bg-white">
        <div class="container">
            <ul class="product-nav-items">

                <?php

                $sql = "select * from tbl_trending";
                $run = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($run)) {

                    $img = $row["img"];
                    $product_name = $row["product_name"];
                    $img = $row["img"];

                ?>

                    <li class="nav-item">
                        <div class="wishlist product-item">
                            <a href="">
                                <div class="product-item-bg ">
                                    <img src="admin/assets/images/trending/<?php echo $img ?>" alt="">
                                </div>
                            </a>
                            <a href="#" class=" nav-link-color"><?php echo $product_name ?></a>
                        </div>
                    </li></a>

                <?php } ?>

            </ul>
            <hr>
        </div>
    </section>
    </div>

    <!-- -------------------------Product Navbar end-------------------------------- -->

    <!-- -------------------------Fixed navbars start-------------------------------- -->






    <!-- -------------------------popular products start-------------------------------- -->

    <section class="popular-products-page">
        <div class="container">
            <h3 class="fw-bold text-center head-color">Popular Products</h3>
            <div class="product-cards">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="side-bar">
                                    <div class="sidenav">
                                        <div class="d-flex mt-5">
                                            <h6 class="head-color fw-bold d-none d-md-block">Filter</h6>
                                            <a href="#" class=" mx-auto clear-all d-none d-md-block">Clear all</a>
                                        </div>
                                        <!-- <a href="#about">About</a> -->

                                        <div class="item-filter">
                                            <button class="dropdown-btn">Sort by : Relevence
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <!-- <a href="#">Link 2</a> -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-filter">
                                            <button class="dropdown-btn">Category
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-filter">
                                            <button class="dropdown-btn">Color
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-filter">
                                            <button class="dropdown-btn">Size
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-filter">
                                            <button class="dropdown-btn">Gender
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-filter">
                                            <button class="dropdown-btn">Rating
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-filter">
                                            <button class="dropdown-btn">Discount
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-filter">
                                            <button class="dropdown-btn">Price
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-filter">
                                            <button class="dropdown-btn">Fabric
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-filter">
                                            <button class="dropdown-btn">Material
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-filter">
                                            <button class="dropdown-btn">Fit or Shape
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-filter">
                                            <button class="dropdown-btn">Print Type
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-filter">
                                            <button class="dropdown-btn">Top Type
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-filter">
                                            <button class="dropdown-btn">Length
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-filter">
                                            <button class="dropdown-btn">Width
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-filter">
                                            <button class="dropdown-btn">Usage
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">item category</label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 product-cards">
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

                                <div class="col-lg-3 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="wishlist">
                                                <input type="hidden" class="pid" value="<?php echo $id ?>">
                                                <a href="#" class="add-wishlist"><i class="fa fa-heart  mb-2"></i></a>
                                            </div>
                                            <div class="product-card-img-bg">
                                                <img src="admin/assets/images/products/<?php echo $img ?>" class="card-img-top" alt="product image">
                                            </div>
                                            <h6 class="card-title mt-3 fw-bold head-color"><?php echo $product_name ?></h6>
                                            <div class="d-flex">
                                                <h5 class=" fw-bold head-color"><?php echo $total ?></h5>
                                                <del>
                                                    <h5 class="disabled-rate ms-3"><?php echo $price ?></h5>
                                                </del>
                                            </div>
                                            <div class="d-flex">
                                                <span class="fa fa-star"></span>
                                                <p class="card-text ms-2"><?php echo $rating ?></p>
                                                <div class="add-to-cart">
                                                    <input type="hidden" class="pid" value="<?php echo $id ?>">
                                                    <button class="add-cart bg-trans"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z" />
                                                        </svg></button>
                                                </div>
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

    <!-- -------------------------popular products end-------------------------------- -->











    <!-- -------------------------footer start-------------------------------- -->

    <?php include('footer.php') ?>

    <!-- -------------------------footer end-------------------------------- -->





    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>