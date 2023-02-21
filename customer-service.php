<?php
include("admin/assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
<?php include('css/style.php') ?>
<title>Cart Page</title>
</head>
<body>

    <!-- -------------------------Fixed navbars start------------------------->

    <!-- -------------------------Navbar start-------------------------------->

    <?php include('contents/nav.php') ?>
        
    <!-- -------------------------Navbar end---------------------------------->
    
    <!-- -------------------------customer-service start---------------------->
    
    <section class="customer-service">
        <div class="container">
            <h3 class="fw-bold head-color text-center">Customer Service</h3>
            <div class="row contact-service">
                <div class="col-lg-6">
                    <div class="contact-form">
                    <?php
                        $sql = "select * from tbl_customer_service";
                        $run = mysqli_query($con, $sql);
                        $rowcount=mysqli_num_rows($run);
                        $row=mysqli_fetch_array($run);    
                        if($rowcount==0){
                            echo "error";
                        }
                        else{
                            $id = $row["id"];
                            $name = $row["name"];                         
                            $phone_num = $row["phone_num"];                           
                            $email = $row["email"];
                            $message = $row["message"];                          
                        }
                        ?>
                        <h5 class="head-color text-center">We would love to hear from you</h5>
                    <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone </label>
                                    <input type="text" class="form-control" name="phone_num" id="phone_num" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                                </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                            </div>
                            <input type="submit" class="btn-sm button-style mt-4" name="send_message" value="send_message">                            
                    </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row location-details">
                    <?php
                        $sql = "select * from tbl_company where id='1'";
                        $run = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($run);
                        $company_time = $row["company_time"];
                        $place = $row["place"];
                        $email1 = $row["email1"];
                        $phone_number1 = $row["phone_number1"];
                        $phone_number2 = $row["phone_number2"];
                        $link = $row["link"];
                        $facebook = $row["facebook"];
                        $instagram = $row["instagram"];
                    ?>
                        <div class="col-lg-6">
                            <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-pin-map-fill mb-2 " viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
                                <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                              </svg>
                            <h5 class="head-color">Our Location</h5>
                            <p><?php echo $place ?></p>
                            <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-clock mb-2 mt-4" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                              </svg>
                            <h5 class="head-color">Opening Hours</h5>
                            <p><?php echo $company_time ?></p>
                        </div>
                        <div class="col-lg-6">
                            <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-telephone mb-2 call-svg" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                              </svg>
                            <h5 class="head-color">Contact Us</h5>
                            <div class="call-email">
                                Email : <a href=""> <?php echo $email1 ?></a><br>
                                Phone : <a href="tel:<?php echo $phone_number1 ?>" > <?php echo $phone_number2 ?></a><br>
                            </div>
                            <div class="flex socialmedia mt-3">
                                <a href="<?php echo $facebook ?>"><i class="fa fa-facebook-f "></i></a>
                                <a href="<?php echo $instagram ?>"><i class="fa fa-instagram ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.380377371716!2d76.00089661531682!3d10.934612559242643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7b5f458cc2aff%3A0xde6ab0b4bf862d98!2sColorarc!5e0!3m2!1sen!2sin!4v1671623904868!5m2!1sen!2sin" class="mt-3" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------customer-service end------------------------->

    <!-- -------------------------footer start--------------------------------->

    <?php include('contents/footer.php') ?>

    <!-- -------------------------footer end---------------------------------->

    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>