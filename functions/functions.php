<?php
session_start();
include("../admin/assets/includes/db.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "../PHPMailer/src/PHPMailer.php";
require_once "../PHPMailer/src/SMTP.php";
require_once "../PHPMailer/src/Exception.php";



session_start();

if (isset($_POST['logout'])) {
  unset($_SESSION['colorarc_loggedin']);
  header("Location:../login.php");
}

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
    if (mysqli_query($con, $sql)) {
        header("Location: ../profile.php");
    } else {
        header("Location: ../profile.php");
    }
    mysqli_close($con);
}

if (isset($_POST["signup"])) {

    $name = $_POST["name"];
    $phone_number = $_POST["phone_number"];
    $mail = $_POST["mail"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $img = $_POST["img"];

    $sql = "select * from tbl_customers where phone_number='$phone_number' || mail='$mail";
    $run = mysqli_query($con, $sql);
    $count = mysqli_num_rows($run);
    if ($count > 0) {
        header("Location: ../signup.php?error=Account already exist");
    }
    if ($password != $confirm_password) {
        header("Location: ../signup.php?error=Passwords are not match!");
    }
    $passhash = hash("sha256", $password);
    $sql = "insert into tbl_customers(name, phone_number, mail, password, gender, img) values('$name', '$phone_number', '$mail', '$passhash', '', '')";
    $run = mysqli_query($con, $sql);
    $user_id = mysqli_insert_id($con);
    if ($run == TRUE) {
        $_SESSION["colorarc_loggedin"] = TRUE;
        $_SESSION["colorarc_user_id"] = $user_id;
        header("Location: ../index.php");
    } else {
        header("Location: ../signup.php?error=Failed to create account!");
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
        $_SESSION["colorarc_loggedin"] = true;
        header("Location: ../index.php");
    }
}


if (isset($_POST["update_profile"])) {

    $name = $_POST["name"];
    $phone_number = $_POST["phone_number"];
    $gender = $_POST["gender"];
    $user_id = $_SESSION["colorarc_user_id"];
    
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $to = "../images/profile/" . $img;
    move_uploaded_file($tmp_name, $to);

    $sql = "update tbl_customers set name='$name', phone_number='$phone_number', gender='$gender', img='$img' where id='$user_id'";
    $run = mysqli_query($con, $sql);

    if ($run == TRUE) {
        header("Location: ../profile.php?success=profile updated successfully");
    } else {
        header("Location: ../profile.php?error=failes to update profile!");
    }
}


if (isset($_POST["change_password"])) {
    $password = $_POST["old_pass"];
    $new_password = $_POST["new_pass"];
    $confirm_password = $_POST["retype_pass"];
    $passhash = hash("sha256", $password);
    $sql = "select * from tbl_login where password='$passhash' AND id='1'";
    $run = mysqli_query($con, $sql);
    $count = mysqli_num_rows($run);
    if ($count != 0) {
      if ($new_password == $confirm_password) {
        $newpass_hash = hash("sha256", $new_password);
        $sql = "update tbl_users set password='$newpass_hash' where id='1'";
        $run = mysqli_query($con, $sql);
        if ($run == TRUE) {
          header("Location: ../security.php?success=Password changed successfully!");
        } else {
          header("Location: ../security.php?error=Failed to change password!");
        }
      } else {
        header("Location: ../security.php?error=New passwords not match!");
      }
    } else {
      header("Location: ../security.php?error=Old password is incorrect!");
    }
  }
  

/*------------------------customer-service function start---------------------------*/

if (isset($_POST["send_message"])) {

    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->Username = "zaahrinrcet@gmail.com";
    $mail->Password = "zikziggolnevmzfj";
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->From = "zaahrinrcet@gmail.com";
    $mail->FromName = "Hanna Zahrin";
    $mail->addAddress("swathikrishnaus2015@gmail.com", "SWATHIKRISHNA US");
    $mail->isHTML(true);
    $mail->Subject = "Contact Form Email";

    $message = "
  <table>
      <tr><td>Name: </td><td>" . $_POST["name"] . "</td></tr>
      <tr><td>Name: </td><td>" . $_POST["phone_number"] . "</td></tr>
      <tr><td>Name: </td><td>" . $_POST["email"] . "</td></tr>
      <tr><td>Name: </td><td>" . $_POST["message"] . "</td></tr>
  </table>
  ";

    $mail->Body = $message;
    try {
        $mail->send();
        echo "<h2>Message has been sent successfully</h2>";
    } catch (Exception $e) {
        echo "Mailer error: " . $mail->ErrorInfo;
    }

    $id = $row["id"];
    $name = $_POST["name"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $sql = "insert into tbl_customer_service(name, email, phone_number, message) values('$name', '$email', '$phone_number', '$message')";
    if (mysqli_query($con, $sql)) {
        header("Location: ../customer_service.php?success=contact added successfully");
    } else {
        header("Location: ../customer_service.php?error=failed to add contact!");
    }
    mysqli_close($con);
}

/*------------------------customer-service function ends---------------------------*/
?>


