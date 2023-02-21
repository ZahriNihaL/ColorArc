<?php
session_start();
include("../admin/assets/includes/db.php");

// $_SESSION["colorarc_user_id"] = "10";

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
    $sql = "insert into tbl_profile(first_name,last_name,gender,phone_number,about,address,city,pincode,email,password,img) values('$first_name','$last_name','$gender','$phone_number','$about','$address','$city','$pincode','$email','$password','1234')";
    if(mysqli_query($con, $sql))
    {
        header("Location: ../profile.php");
    }
    else {
      header("Location: ../profile.php");
    }
    mysqli_close($con);
}

if (isset($_POST["signup"])) {

    $phone_number = $_POST["phone_number"];
    $mail = $_POST["mail"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $name = $_POST["name"];
    $sql = "insert into tbl_login(phone_number,mail,password,confirm_password,name) values('$phone_number','$mail',$password',$confirm_password',$name')";
    $run = mysqli_query($con, $sql);
    $count = mysqli_num_rows($run);
    if ($count != 0) {
        if ($password == $confirm_password){
            $_SESSION["colorarc_loggedin"] = true;
            header("Location: ../index.php");
        } 
        else{
        header("Location: ../signup.php?error=Invalid credential");
        }
    }
    else {
        header("Location: ../signup.php?error=Invalid credential");
    }
}


if (isset($_POST["login"])) {

    $phone_number = mysqli_real_escape_string($con, $_POST["phone_number"]);
    $mail = mysqli_real_escape_string($con, $_POST["mail"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    $passhash = hash("sha256", $password);
    $sql = "select * from tbl_login where phone_number='$phone_number' || mail='$mail' and password='$passhash'";
    $run = mysqli_query($con, $sql);
    $count = mysqli_num_rows($run);
    if ($count === 0) {
      header("Location: ../index.php?error=Invalid credential");
    } else {
      header("Location: ../index.php");
    }
  }


if (isset($_POST["send_message"])) {

    $name = $_POST["name"];
    $phone_num = $_POST["phone_num"];
    $email = $_POST["email"];
    $message = $_POST["message"];
   
    $sql = "insert into tbl_customer_service(name,phone_num,email,message) values('$name','$phone_number','$email','$message')";
    if(mysqli_query($con, $sql))
    {
        echo "<script> alert('message send')</script>";
        header("Location: ../customer-service.php");
     
    } else {

      echo "<script> alert('message can't send ')</script>";
      header("Location: ../customer-service.php");

    }
    mysqli_close($con);
}
