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
                                    <img src="./admin/assets/images/trending/<?php echo $img ?>" alt="">
                                </div>
                            </a>
                            <a href="#" class=" nav-link-color"><?php echo $product_name ?></a>
                        </div>
                    </li>

                <?php } ?>


    
                </ul>
                <hr>
            </div>
        </section>
    </div>






    <section class="testimonial">
        <div class="container">
            <h3 class="fw-bold head-color text-center">What Our Trusted Customers Say</h3>
            <div class="testimonial-carousel">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button> -->
                    <div class="control-icons d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left svg-left"
                            viewBox="0 0 16 16" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="bi bi-arrow-right ms-2 svg-right" viewBox="0 0 16 16" type="button"
                            data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <path fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row ">
                            <?php
            
                                $sql = "select * from tbl_customer";
                                $run = mysqli_query($con, $sql);
                                while($row = mysqli_fetch_array($run)){


                                    $id = $row["id"];
                                    $name = $row["name"];
                                    $designation =$row["designation"]; 
                                    $explanation =$row["explanation"]; 
                                    $img = $row["img"];
                                    
                                
                                
                            ?>
                                <div class="col-lg-6 testimonial-contents">
                                    <div class="reviews d-flex justify-content-center flex-wrap">
                                        <img src="/admin/assets/images/customer/<?php echo $img ?>" alt="testimonial image" class="img-fluid">
                                        <div class="client-words">
                                            <p class="para-color ms-4 mt-3"><i
                                                    class="fa fa-quote-left para-color me-3"></i><?php echo $explanation ?><i
                                                    class="fa fa-quote-right para-color ms-3"></i> </p>
                                        </div>
                                        <div class="text-center">
                                            <hr>
                                            <h6 class="head-color mt-3 ms-3 red-color fw-bold"><?php echo $name ?></h6>
                                            <p class="ms-3 designation"><?php echo $designation ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                      
                        
                      
                    </div>

                </div>
            </div>
        </div>
    </section>