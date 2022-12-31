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











    <!-- style dashboard old -->


    /* 
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
:root {
  
    --bs-primary: var(--primary);
    --bs-primary-rgb: var(--primary-rgb);
  
    --bs-success: #06d7a0;
    --bs-success-rgb: 6, 215, 160;
    font-family: 'Poppins';
    font-size: 14px;

  }

  body{

    font-family: 'Poppins', sans-serif!important;
    
  }
   */

.login_page .card_body{

    background-color:#460a38;

  }

  .login_page h4{
        color: rgb(224, 231, 231);
  }

  .login_page .card_body .btn{

    color: #fdfcfc;
    background-color: rgb(175, 105, 147);

  }
  .sidebar-left{

    background-color: #fdfcfd;

  }
  
  .profile {

    margin-bottom: 2rem;
    margin: 0 auto;
    margin-top: 5vh;

  }
  
  .profile img {

    width:70px;
    height: 70px;
    flex-shrink: 0;
    margin-left: 50px;
    display: block;
    margin-top: 15px;
    border-radius: 40px;

  }
  
  .profile .profile-details {

    flex-grow: 1;
    font-weight: 500;
    font-size: 1.1rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-top: 15px;

  }

  .profile-details .profile-description{

    font-size: 0.8em;

  }
  
  .sidebar-header {
    
    padding: 0.25rem 1.75rem;
    font-weight: 500;
    color: #cfcdcd;
  }
  
  #sidebar-nav .nav-item .nav-link {
    padding: 1rem 1.75rem;
    color: #bbb9b9;
    display: flex;
    align-items: center;
    position: relative;
  }
  /* #sidebar-nav .nav-item .nav-link:hover{
    color: red;
  } */
  #sidebar-nav .nav-item .nav-link::before {
    content: '';
    height: 100%;
    width: 5px;
    /* background-color: var(--primary); */
    display: none;
    position: absolute;
    left: 0;
    border-radius: 0 4px 4px 0;
  }
  
  #sidebar-nav .nav-item .nav-link .bi {

    margin-right: 0.75rem;

  }

  #sidebar-nav .nav-item .nav-link .count-badge{

    margin-left: auto;
    background-color: var(--primary);
    color: rgb(255, 255, 255);
    padding: 0 5px;


    font-size: 0.9em;
    border-radius: 0 4px 4px 4px;
    

  }
  
  #sidebar-nav .nav-item .nav-link.active,  #sidebar-nav .nav-item .nav-link:focus, #sidebar-nav .nav-item .nav-link:hover

  {
    color: rgb(255, 255, 255);
    background-color: #830a5a;
    font-weight: bold;
    border-radius: 15px;
    margin-bottom: 2px;
  }

  #sidebar-nav{
    padding: 10px;
    height: 100vh;
  }

  /* #sidebar-nav .nav-item .nav-link:hover{

    background-color: #e2e1de ;
    color: black;
    border-radius: 15px;

  } */
  #sidebar-nav .nav-item .nav-link.active::before,
  #sidebar-nav .nav-item .nav-link:hover::before,
  #sidebar-nav .nav-item .nav-link:focus::before {
    display: block;
  }

  body {

    background-color: rgb(240, 236, 236);
    font-family: 'Open Sans', sans-serif;

  }
  
  .wrapper{

    padding: 2.5rem;
    background-color: #f7f0f5;

  }
  
  .sidebar-right{

    padding: 2.5rem;
    border: 0;

  }
  
  .bg-primary {

    background-color: var(--primary) !important;

  }
  
  .text-secondary {

    color: var(--secondary) !important;

  }
  
  .text-violet {

    color: var(--violet) !important;

  }
  
  .bg-violet {

    background-color: var(--violet) !important;
    color: #fff;

  }
  
  .text-blue {

    color: #307dde !important;

  }
  
  .fw-medium {

    font-weight: 600;

  }
  .user-icon img{
    width: 40px;
    height: auto;
    margin-left: 4px;
    display: block;
 
  }

  /* .user-icon h6{

    margin-left: -20px;

  } */
  .wrapper .custom-card {

    border-radius: 12px;
    padding: 1.75rem;
    color: #fff;
    /* font-weight: 600; */
    height: 180px;
    display: flex;
    flex-direction: column;

  }
  
  .wrapper .custom-card .card-header {

    border: none;
    background-color: transparent;
    padding: 0;
    margin-bottom: 2rem;
    display: flex;
    align-items: center;

  }
  
  .wrapper .custom-card .card-text {
    font-size: 1.25rem;
    line-height: 1.25;
    margin-bottom: 1.5rem;

  }
  
  .wrapper .custom-card .card-header .card-icon {
    flex: 0 0 auto;
    background-color: rgba(0, 0, 0, 0.25);
    padding: 8px 12px;
    border-radius: 12px;
    font-size: 1.2em;

  }
  
  .wrapper .custom-card .image-list {
    margin-top: auto;

  }
  
  .wrapper .custom-card.card-left {

    background: linear-gradient(45deg,#630546 0%, #630546 100%);
    box-shadow: 2px 2px 20px #ee8acc;
    /* height: 250px; */

  }
  
  .wrapper .custom-card.card-right {
    
    background: linear-gradient(45deg,#630546 0%, #630546 100%);
    box-shadow: 2px 2px 20px #ee8acc;

   
    /* height: 250px; */

  }
  
  .image-list {

    white-space: nowrap;

  }
  
  .image-list img {

    height: 35px;
    width: 35px;
    object-fit: cover;
    object-position: center;
    border: 2px solid #fff;
    border-radius: 40px;

  }
  
  .image-list img:not(:first-child) {

    margin-left: -12px;

  }
  
  .wrapper .btn {

    font-weight: 600;
    font-size: 0.95rem;
    padding: 0.5rem 1.25rem;

  }
  
  #task-nav {

    border-bottom: 2px solid #eee;

  }
  
  #task-nav .nav-item .nav-link {

    color: var(--secondary);
    font-size: 1.05rem;
    padding: 0.75rem 1.25rem;
    position: relative;
    transition: color 0.25s;
    font-weight: 600;

  }
  
  #task-nav .nav-item .nav-link:after {

    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: transparent;
    transition: background-color 0.25s;

  }
  
  #task-nav .nav-item .nav-link.active,
  #task-nav .nav-item .nav-link:hover 
  {
    color: var(--violet);
  }
  
  #task-nav .nav-item .nav-link.active::after,
  #task-nav .nav-item .nav-link:hover::after 
  {
    background-color: var(--violet);
  }
  
  .task {

    display: flex;
    margin-bottom: 1.5rem;

  }
  
  .task .task-icon {
    flex: 0 0 auto;
    color: #fff;
    border-radius: 12px;
    width: 45.5px;
    height: 45.5px;
    text-align: center;
    padding: 8px;
  }
  
  .fs-6 {

    font-size: 1.15rem !important;

  }
  
  .sidebar-right .call-card {

    background-color: var(--bs-success);
    color: #fff;
    position: relative;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 2px 2px 20px rgb(var(--bs-success-rgb), 0.75);

  }
  
  .sidebar-right .call-card .call-time {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    font-size: 1.1rem;
    font-weight: 600;

  }
  
  .form-control {

    border: 0;
    border-radius: 8px;
    padding: 8px 12px;
    background-color: #f5f6f8;

  }
  
  .collaborator {

    border-radius: 20px;
    padding: 5px;
    display: flex;
    align-items: center;
    background: #eee;
    font-size: 0.9rem;
    margin-right: 6px;

  }
  
  .collaborator.violet {

    color: var(--violet);
    background-color: #eee9fc;

  }
  
  .collaborator.success {
    color: var(--bs-success);
    background-color: #e4fbf6;
  }
  
  .collaborator .collaborator-image {
    width: 25px;
    height: 25px;
    border-radius: 30px;
    object-fit: cover;
    object-position: center;
  }
  
  .collaborator .btn {
    padding: 0px 4px;
  }
  
  .sidebar-right .btn.emoticon {
    padding: 2px;
    font-size: 1.4rem;
  }
  
  
  
  /* Chrome, Edge, and Safari */
  *::-webkit-scrollbar {
    width: 4px;
  }
  
  *::-webkit-scrollbar-track {
    background: #ffffff;
  }
  
  *::-webkit-scrollbar-thumb {
    background-color: #ddd;
    border-radius: 10px;
    border: 0px none #ffffff;
  }
    
  .license{
    padding-left: 1.2rem;
  }
  
  
  
  .leftside img{
    height: 100%;
    width: 100%;
    border-top-left-radius: .7rem;
    border-bottom-left-radius: .7rem;
  }
  .rightside{
    padding-top: 8rem;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .icon{
    padding-left: 7.2rem;
    color: rgb(132, 132, 245);
    align-items: center;
    justify-content: center;
  }
  .name{
    flex-grow: 1;
    font-weight: 500;
    font-size: 1.1rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .maincol{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 5rem;
    padding-bottom: 5rem;
    border: 0;
    background-color: rgb(236, 236, 236);
  }
  .maincol .card{
    height: 75%;
    border-radius: .7rem;
  }
  .card-body{
    padding: 0%;
  }
  /* .slideshow-images{
    margin-left: 250px!important;
  } */
  
  .custom-card-2{
    border: none;
    box-shadow: 0px 0px 10px #e7e7e7;
  }
  
  .slideshow form {
    margin-bottom: 50px;
  }
  
  .contact-us{
    margin-top: 100px;
  }
  .contact-us .contact-us-bg{
    padding-top: 100px;
    background-color: #e9b819;
  }
  .contact-us .contact-us-para{
    width: 95%;
    margin: 0 auto;
    /* margin-bottom: 200px; */
  }
  .contact-us .contact-us-bg h2{
    color: #e9e3e3;
    font-weight: bolder;
  }
  .contact-us .contact-us-bg p{
    color: #e9e3e3b9;
    text-align: justify;
  }
  .contact-us form{
    margin-left: 50px;
    width: 100%;
    padding: 50px;
    margin-top: -10px;
  
    box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;
        /* background-color: #7d1128ee; */
  }
  .contact-us ::placeholder {
    color: rgb(177, 162, 162);
    opacity: 1; /* Firefox */
  } 
  /* .contact-us .contact-us-form{
    z-index: 900;
  } */
  .contact-us iframe{
    margin-top: 80px;
    /* z-index: -1; */
   
  }
  .contact-us img{
    margin-top: -78px;
  }
  .contact-us .contact-us-icons{
    align-items: center;
    justify-content: center;
  }
  .contact-us .contact-us-icons svg{
    width:26px;
    height: auto;
    color: #e9b819;
    margin: 0 auto;
    margin-top: 30px;
    margin-bottom: 100px;
    transition: 0.5s ease;
    margin-right: 15px;
    opacity: .7;
  }
  .contact-us .contact-us-icons svg:hover{
    color: #e9b819;
    opacity: 10;
  }
  .contact-us :-ms-input-placeholder { /* Internet Explorer 10-11 */
   color: rgb(177, 162, 162);
  }
  
  .contact-us ::-ms-input-placeholder { /* Microsoft Edge */
   color: rgb(177, 162, 162);
  }
  .contact-us .form-address h3{
    color: #e9b819;
  }
  .contact-us .form-address{
    margin-top: 100px;
  }
  .contact-us .Contact-informations{
    background-color: #f1ecf371;
    padding: 40px;
  }
  .contact-us .Contact-informations{
    margin: 0 auto;
  }
  .contact-us .Contact-informations p{
    color: #706868;
    text-align: center;
    margin-bottom: 0;
  }
  .contact-us .Contact-informations a{
    text-decoration: none;
    text-align: center;
    color: #706868;
    margin-bottom: 0;
  }
  .contact-us .Contact-informations a:hover{
    color:#e9b819;
  }
  .contact-us .Contact-informations{
    margin: 0 auto;
    margin-top: 60px;
  }
  .contact-us .Contact-informations svg{
    width: 16px;
    height: auto;
    color: #e9b819;
    display: block;
    
    margin: 0 auto;
    margin-bottom: 10px;
  }
  
  .contact-us form input, .contact-us form textarea{
    border-width: 0px 0px 1px 0px;
    border-radius: 0;
    border-color: #dbd5d6;
    color: #ffffff;
    background-color: transparent;
    margin-top: 25px;
  }
  
  .contact-us form button{
    margin-top: 30px;
    padding: 10px 50px;
    transition: 0.5s ease;
    background-color: #e9b819;
    border-radius: 0;
    color: #ffffff;
  }
  .contact-us form button:hover{
    background-color: transparent;
    color: #e9b819;
    border-color:#e9b819;
  }
  @media(max-width: 991px){
    .contact-us form{
        margin: 0 auto;
    }
  }
  
  .login-page button{
    background-color: #7d1128;
  }
  
  .profile-details{
    color: #7d1128;
  }
  
