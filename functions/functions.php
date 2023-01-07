<?php

session_start();
include("../admin/includes/db.php");
$_SESSION["colorarc_user_id"] = "10";


if (isset($_POST["add_cart"])) {
    $pid = mysqli_escape_string($con, $_POST["product_id"]);
    $user = $_SESSION["colorarc_user_id"];

    $check_sql = "select * from tbl_products where id='$pid'";
    $check_run = mysqli_query($con, $check_sql);
    $count = mysqli_num_rows($check_run);

    if ($count === 0) {
        echo 0;
    } else {
        $sql = "insert into tbl_cart(pid, qty, user) values('$pid', '1' , '$user')";
        $run = mysqli_query($con, $sql);

        if ($run == TRUE) {
            echo 1;
        } else {
            echo 2;
        }
    }
}



if (isset($_POST["update_cart"])) {
    $cid = mysqli_escape_string($con, $_POST["cart_id"]);
    $qty = mysqli_escape_string($con, $_POST["qty"]);
    $user = $_SESSION["colorarc_user_id"];

    $check_sql = "select * from tbl_cart where id='$cid'";
    $check_run = mysqli_query($con, $check_sql);
    $count = mysqli_num_rows($check_run);

    if ($count === 0) {
        echo 0;
    } else {

        $sql = "update tbl_cart set qty='$qty' where id='$cid'";
        $run = mysqli_query($con, $sql);
        if ($run === TRUE) {
            echo 1;
        } else {
            echo 2;
        }
    }
}



if (isset($_POST["add_wishlist"])) {
    $pid = mysqli_escape_string($con, $_POST["product_id"]);
    $user = $_SESSION["colorarc_user_id"];

    $check_sql = "select * from tbl_products where id='$pid'";
    $check_run = mysqli_query($con, $check_sql);
    $count = mysqli_num_rows($check_run);

    if ($count === 0) {
        echo 0;
    } else {
        $sql = "insert into tbl_wishlist(pid, user) values('$pid', '$user')";
        $run = mysqli_query($con, $sql);

        if ($run == TRUE) {
            echo 1;
        } else {
            echo 2;
        }
    }
}



if (isset($_POST["cart_btn"])) {
    $pid = mysqli_escape_string($con, $_POST["product_id"]);
    $user = $_SESSION["colorarc_user_id"];

    $check_sql = "select * from tbl_wishlist where id='$pid'";
    $check_run = mysqli_query($con, $check_sql);
    $count = mysqli_num_rows($check_run);

    if ($count === 0) {
        echo 0;
    } else {
        $sql = "insert into tbl_cart(pid, qty, user) values('$pid', '1' , '$user')";
        $run = mysqli_query($con, $sql);

        if ($run == TRUE) {
            echo 1;
        } else {
            echo 2;
        }
    }
}



if (isset($_POST["submit"])) {

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $gender = $_POST["gender"];
    $phone_number = $_POST["phone_number"];
    $about = $_POST["about"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $pincode = $_POST["pincode"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    // $img = $_POST["img"];

    

    // $img = $_FILES["img"]["name"];
    // $tmp_name = $_FILES["img"]["tmp_name"];
  
    // $to = "../assets/images/profile/" . $img;
  
    // move_uploaded_file($tmp_name, $to);
  
    $sql = "insert into tbl_profile(first_name,last_name,gender,phone_number,about,address,city,pincode,email,password,img) values('$first_name','$last_name','$gender','$phone_number','$about','$address','$city','$pincode','$email','$password','1234')";
    if(mysqli_query($con, $sql))
    {
        echo "<script> alert('new record inserted')</script>";
        header("Location: ../profile.php");
     
    } else {

      echo "<script> alert('profile not inserted')</script>";
      header("Location: ../profile.php");

    }
    mysqli_close($con);
}