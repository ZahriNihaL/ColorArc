<!doctype html>
<html lang="en">

<head>

    <?php include('style.php') ?>

    <title>Cart Page</title>

</head>

<body class="bg-color-body">


    <!-- -------------------------Fixed navbars start-------------------------------- -->


        <!-- -------------------------Navbar start-------------------------------- -->

        <?php include('contents/nav.php') ?>
        
        <!-- -------------------------Navbar end-------------------------------- -->
    




    <!-- -------------------------Product Navbar start-------------------------------- -->
    
    <section class="my-profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="profile-banner">

                        <div class="profile-name">
                            <div class="img-bg">
                                <img src="images/profile/1.png" alt="" class="img-fluid">
                            </div>
                            <h5 class="head-color fw-bold text-center mt-3">Melbin Thomas</h5>
                        </div>

                           <div class="profile-links mt-5 ms-5">

                            <div class="profile-link-bg">
                                <a href="#" > <i class="fa fa-user me-2"></i> My Account</a>
                            </div>
                            <hr>
                            <div class="profile-link-bg">
                                <a href="#" ><i class="fa fa-key me-2"></i> Security</a><br>
                            </div>
                            <hr>
                            <div class="profile-link-bg">
                                <a href="wishlist.php" ><i class="fa fa-heart me-2"></i> My Wishlist</a><br>
                            </div>
                            <hr>
                            <div class="profile-link-bg">
                                <a href="cart.php" ><i class="fa fa-shopping-cart me-2"></i> My Cart</a><br>
                            </div>
                            <hr>
                            <div class="profile-link-bg">
                                <a href="orders.php" ><i class="fa fa-shopping-bag me-2"></i> My Orders</a>
                            </div>
                            <hr class="mb-5">
                            <a href="#" class=" d-none d-md-block"><button class="btn-sm button-style"><i class="fa fa-sign-out me-2 text-white"></i>Logout</button></a>
                            <a href="#" class=" d-block d-md-none"><i class="fa fa-sign-out me-2 text-white"></i>Logout</button></a>
                           </div>
                    </div>
                </div>
                <div class="col-lg-9 ">
                    <div class="profile-info">
                        <h5 class="head-color fw-bold mb-5">Profile Settings</h5>
                        
                        <div class="profile-name">
                            <div class="img-bg">
                                <img src="images/profile/1.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <!-- <button class=" btn-sm">Update Photo</button> -->
                        <div class="edit-profile mt-3 mb-5">
                            <a href="#" class="update-photo"><i class="fa fa-edit"></i> Update Photo </a>
                        </div>
                       
                        <form>
                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                </div>
                            </div>

                            <div class="row">

                                <!-- <h5 class="head-color"></h5> -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Gender</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select Gender </option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Others</option>
                                          </select>
                                    </div>
                                </div>
                               
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Phone</label>
                                        <input type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your mobile number">
                                    </div>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">About Me</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                      </div>
                                </div>
                            </div>

                            <button class="button-style btn-sm ">Update</button>
                          </form>
                    </div>





                    <div class="contact-info mt-5">
                        <h5 class="head-color fw-bold mb-5">Contact Settings</h5>
                        <form>
                            <div class="row">
                                
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">City</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">PIN</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <h5 class="head-color"></h5>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">State</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select state</option>
                                            <option value="1">Andhra Pradesh</option>
                                            <option value="2">Arunachal Pradesh</option>
                                            <option value="3">Assam</option>
                                            <option value="3">Bihar</option>
                                            <option value="3">Chhattisgarh</option>
                                            <option value="3">Goa</option>

                                            <option value="3">Gujarat</option>
                                            <option value="3">Haryana</option>
                                            <option value="3">Himachal Pradesh,</option>
                                            <option value="3">Jharkhand</option>
                                            <option value="3">Karnataka</option>
                                            <option value="3">Kerala</option>

                                            <option value="3">Madhya Pradesh </option>
                                            <option value="3">Maharashtra</option>
                                            <option value="3">Manipur</option>
                                            <option value="3">Meghalaya</option>
                                            <option value="3">Mizoram</option>
                                            <option value="3">Nagaland</option>
                                            <option value="3">Odisha </option>

                                            <option value="3">Punjab</option>
                                            <option value="3">Rajasthan</option>
                                            <option value="3">Sikkim</option>
                                            <option value="3">West Bengal</option>
                                            <option value="3">Tamil Nadu</option>
                                            <option value="3">Telangana</option>
                                            <option value="3">Tripura</option>
                                            <option value="3">Uttar Pradesh</option>
                                            <option value="3">Uttarakhand</option>

                                            <option value="3">West Bengal</option>

                                        </select>
                                    </div>
                                </div>
                               
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">District</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                </div>

                            </div>
                            <button class="button-style btn-sm ">Update</button>
                          </form>
                    </div>




                    <div class="security-info mt-5" id="security">
                        <form>
                            <div class="row">
                                <h5 class="head-color fw-bold mb-5">Security</h5>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="myInput">
                                        <input type="checkbox" onclick="myFunction()" class="mt-2 me-2">Show Password</div>

                                </div>
                            </div>


                           <div class="d-flex">
                            <button class="button-style btn-sm ">Change password</button>
                            <a href="" class="delete-account ms-4">Delete Account</a>
                           </div>
                          </form>
                    </div>



                </div>
            </div>
        </div>
 </section>

    <!-- -------------------------testimonial end-------------------------------- -->






    <!-- -------------------------footer start-------------------------------- -->

    <?php include('footer.php') ?>

    <!-- -------------------------footer end-------------------------------- -->








    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>