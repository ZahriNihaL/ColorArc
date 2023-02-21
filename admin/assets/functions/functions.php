<?php
include("../includes/db.php");

session_start();

if (isset($_POST['logout'])) {
  unset($_SESSION['colorarc_loggedin']);
  header("Location:../../login.php");
}

if (isset($_POST["login"])) {
  $username = mysqli_real_escape_string($con, $_POST["username"]);
  $password = mysqli_real_escape_string($con, $_POST["password"]);
  $passhash = hash("sha256", $password);
  $sql = "select * from tbl_users where username='$username' and password='$passhash'";
  $run = mysqli_query($con, $sql);
  $count = mysqli_num_rows($run);
  if ($count === 0) {
    header("Location: ../../login.php?error=Invalid credential");
  } else {
    $_SESSION["colorarc_loggedin"] = true;
    header("Location: ../../indexx.php");
  }
}

if (isset($_POST["add_hom"])) {
  $title = mysqli_real_escape_string($con,$_POST["title"]);
  $description = mysqli_real_escape_string($con,$_POST["description"]);
  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];
  $to = "../images/home/" . $img;
  move_uploaded_file($tmp_name, $to);
  $img2 = $_FILES["img2"]["name"];
  $tmp_name = $_FILES["img2"]["tmp_name"];
  $to = "../images/home/" . $img2;
  move_uploaded_file($tmp_name, $to);
  $sql = "insert into tbl_home(title,description,img,img2) values('$title','$description','$img','$img2')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../hom.php?success=home added successfully");
  } else {
    header("Location: ../../hom.php?error=failed to add home!");
  }
}

if (isset($_POST["delete_hom"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_home where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../hom.php?success=home deleted successfully");
  } else {
    header("Location: ../../hom.php?error=failed to delete home!");
  }
}

if (isset($_POST["update_hom"])) {
  $id = $_POST["id"];
  $title = $_POST["title"];
  $description = $_POST["description"];

  $img = "";
  if ($_FILES['img']['size'] === 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $to = "../images/classification/" . $img;
    move_uploaded_file($tmp_name, $to);
  }

  $img2 = "";
  if ($_FILES['img2']['size'] == 0) {
    $img = $_POST["old_img2"];
  } else {
    $img2 = $_FILES["img2"]["name"];
    $tmp_name = $_FILES["img2"]["tmp_name"];
    $to = "../images/home/" . $img2;
    move_uploaded_file($tmp_name, $to);
  }
  $sql = "update tbl_home set title='$title', description='$description', img='$img' , img2='$img2' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../hom.php?success=hom updated successfully");
  } else {
    header("Location: ../../hom.php?error=failes to update hom!");
  }
}


if (isset($_POST["add_trend"])) {
  $product_name = $_POST["product_name"];
  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];
  $to = "../images/trending/" . $img;
  move_uploaded_file($tmp_name, $to);
  $sql = "insert into tbl_trending(product_name,img) values('$product_name','$img')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../trend.php?success=trending added successfully");
  } else {
    header("Location: ../../trend.php?error=failed to add trending!");
  }
}

if (isset($_POST["delete_trend"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_trending where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../trend.php?success=trend deleted successfully");
  } else {
    header("Location: ../../trend.php?error=failed to delete trend!");
  }
}

if (isset($_POST["update_trend"])) {
  $id = $_POST["id"];
  $product_name = $_POST["product_name"];
  $img = "";
  if ($_FILES['img']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $to = "../images/trending/" . $img;
    move_uploaded_file($tmp_name, $to);
  }
  $sql = "update tbl_trending set product_name='$product_name', img='$img' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../trend.php?success=trending edited successfully");
  } else {
    header("Location: ../../trend.php?error=failes to edit trending!");
  }
}

if (isset($_POST["add_classifications"])) {
  $product_name = $_POST["product_name"];
  $explanation =$_POST["explanation"];
  $price = $_POST["price"];
  $pincode = $_POST["pincode"];
  $img = $_POST["img"];
  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];
  $to = "../images/classification/" . $img;
  move_uploaded_file($tmp_name, $to);
  $sql = "insert into tbl_classification(product_name,explanation,img,price,pincode) values('$product_name','$explanation','$img','$price','$pincode')";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../classifications.php?success=classifications added successfully");
  } else {
    header("Location: ../../classifications.php?error=Failed to add classifications!");
  }
}

if (isset($_POST["delete_classifications"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_classification where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../classifications.php?success=classifications deleted successfully");
  } else {
    header("Location: ../../classifications.php?error=failed to delete classifications!");
  }
}

if (isset($_POST["update_classifications"])) {
  $id = $_POST["id"];
  $product_name = $_POST["product_name"];
  $explanation =$_POST["explanation"]; 
  $price = $_POST["price"];
  $pincode = $_POST["pincode"];
  
  $img = "";
  if ($_FILES['img']['size'] === 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $to = "../images/classification/" . $img;
    move_uploaded_file($tmp_name, $to);
  }
  $sql = "update tbl_classification set product_name='$product_name',explanation='$explanation', img='$img',price='$price', pincode='$pincode' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../classifications.php?success=classification updated successfully");
  } else {
    header("Location: ../../classifications.php?error=failes to update classification!");
  }
}

if (isset($_POST["add_products"])) {
  $product_name = $_POST["product_name"];
  $explanation = $_POST["explanation"];
  $price = $_POST["price"];
  $total = $_POST["total"];
  $rating = $_POST["rating"];
  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];
  $to = "../images/products/" . $img;
  move_uploaded_file($tmp_name, $to);
  $sql = "insert into tbl_products(product_name,explanation,img,price,total,rating) values('$product_name','$explanation','$img','$price','$total','$rating')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../products.php?success=products added successfully");
  } else {
    header("Location: ../../products.php?error=failed to add products!");
  }
}

if (isset($_POST["delete_products"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_products where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../products.php?success=products deleted successfully");
  } else {
    header("Location: ../../products.php?error=failed to delete products!");
  }
}
 
if (isset($_POST["update_products"])) {
  $id = $_POST["id"];
  $product_name = $_POST["product_name"];
  $explanation = $_POST["explanation"];
  $price = $_POST["price"];
  $total = $_POST["total"];
  $rating = $_POST["rating"];
  $img = "";
  if ($_FILES['img']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $to = "../images/products/" . $img;
    move_uploaded_file($tmp_name, $to);
  }
  $sql = "update tbl_products set product_name='$product_name', explanation='$explanation',img='$img',price='$price',total='$total',rating='$rating' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../products.php?success=products updated successfully");
  } else {
    header("Location: ../../products.php?error=failes to update products!");
  }
}


if (isset($_POST["add_service"])) {
  $name = $_POST["name"];
  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];
  $to = "../images/service/" . $img;
  move_uploaded_file($tmp_name, $to);
  $sql = "insert into tbl_service(name,img) values('$name','$img')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../service.php?success=service added successfully");
  } else {
    header("Location: ../../service.php?error=failed to add service!");
  }
}

if (isset($_POST["delete_service"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_service where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../service.php?success=service deleted successfully");
  } else {
    header("Location: ../../service.php?error=failed to delete service!");
  }
}
 
if (isset($_POST["update_service"])) {
  $id = $_POST["id"];
  $name = $_POST["name"];
  $img = "";
  if ($_FILES['img']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $to = "../images/service/" . $img;
    move_uploaded_file($tmp_name, $to);
  }
  $sql = "update tbl_service set name='$name',img='$img' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../service.php?success=service updated successfully");
  } else {
    header("Location: ../../service.php?error=failes to update service!");
  }
}


if (isset($_POST["add_testimonial"])) {

  $name = $_POST["name"];
  $designation =$_POST["designation"];
  $description = $_POST["description"];
  
  $img = $_POST["img"];
  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];
  $to = "../images/testimonial/" . $img;
  move_uploaded_file($tmp_name, $to);
  $sql = "insert into tbl_testimonial(name,designation,description,img) values('$name','$designation','$description','$img')";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../testimonial.php?success=classifications added successfully");
  } else {
    header("Location: ../../testimonial.php?error=Failed to add classifications!");
  }
}

if (isset($_POST["delete_testimonial"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_testimonial where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../testimonial.php?success=testimonial deleted successfully");
  } else {
    header("Location: ../../testimonial.php?error=failed to delete testimonial");
  }
}

if (isset($_POST["update_testimonial"])) {
  $id = $_POST["id"];
  $name = $_POST["name"];
  $designation =$_POST["designation"];
  $description = $_POST["description"];
  $img = "";
  if ($_FILES['img']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $to = "../images/testimonial/" . $img;
    move_uploaded_file($tmp_name, $to);
  }
  $sql = "update tbl_testimonial set name='$name', designation='$designation', description='$description' , img='$img' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../testimonial.php?success=testimonial edited successfully");
  } else {
    header("Location: ../../testimonial.php?error=failes to edit testimonial!");
  }
}

if (isset($_POST["add_cart"])) {
  $product_name = $_POST["product_name"];
  $explanation = $_POST["explanation"];
  $price = $_POST["price"];
  $total = $_POST["total"];
  $total_price = $_POST["total_price"];
  $img = $_POST["img"];
  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];
  $to = "../assets/images/cart/" . $img;
  move_uploaded_file($tmp_name, $to);
  $sql = "insert into tbl_cart(product_name,explanation,img,price,total,total_price) values('$product_name','$explanation','$img','$price','$total','$total_price')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../cart.php?success=cart added successfully");
  } else {
    header("Location: ../../cart.php?error=failed to add cart!");
  }
}

if (isset($_POST["delete_cart"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_cart where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../cart.php?success=cart deleted successfully");
  } else {
    header("Location: ../../cart.php?error=failed to delete cart!");
  }
}
 
if (isset($_POST["update_cart"])) {
  $id = $_POST["id"];
  $product_name = $_POST["product_name"];
  $explanation = $_POST["explanation"];
  $price = $_POST["price"];
  $total = $_POST["total"];
  $total_price = $_POST["total_price"];
  $img = "";
  if ($_FILES['img']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $to = "../assets/images/cart/" . $img;
    move_uploaded_file($tmp_name, $to);
  }
  $sql = "update tbl_cart set product_name='$product_name', explanation='$explanation',img='$img',price='$price',total='$total',total_price='$total_price' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../cart.php?success=cart updated successfully");
  } else {
    header("Location: ../../cart.php?error=failes to update cart!");
  }
}

if (isset($_POST["remove_item"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_cart where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../cart.php?success=cart deleted successfully");
  } else {
    header("Location: ../../cart.php?error=failed to delete cart!");
  }
}

if (isset($_POST["update_settings"])) {
  $company_time = $_POST["company_time"];
  $place = $_POST["place"];
  $email1 = $_POST["email1"];
  $phone_number1 = $_POST["phone_number1"];
  $phone_number2 = $_POST["phone_number2"];
  $link = $_POST["link"];
  $facebook = $_POST["facebook"];
  $instagram = $_POST["instagram"];
 
  $sql = "update tbl_company set company_time='$company_time' , place='$place' , email1='$email1' , phone_number1='$phone_number1' , phone_number2='$phone_number2' , link='$link' , facebook='$facebook' , instagram='$instagram'  where id='1'";
  $run = mysqli_query($con, $sql);

  if ($run == TRUE) {
    header("Location: ../../settings.php?success=settings updated successfully");
  } else {
    header("Location: ../../settings.php?error=failes to update settings!");
  }
}

if (isset($_POST["add_profile"])) {
  $img = $_POST["img"];
  $first_name =  $_POST["first_name"];
  $last_name =  $_POST["last_name"];
  $gender =  $_POST["gender"];
  $phone_number =  $_POST["phone_number"];
  $about =  $_POST["about"];
  $address =  $_POST["address"];
  $city =  $_POST["city"];
  $pincode =  $_POST["pincode"];
  $email =  $_POST["email"];
  $password =  $_POST["password"];
  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];
  $to = "../assets/images/profile/" . $img;
  move_uploaded_file($tmp_name, $to);
  $sql = "insert into tbl_profile(img,first_name,last_name,gender,phone_number,about,address,city,pincode,email,password)  values( '$img' , '$first_name' , '$last_name' ,  '$gender' , '$phone_number' , '$about' , '$address' , '$city' ,'$pincode'  '$email' , '$password')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../cart.php?success=cart added successfully");
  } else {
    header("Location: ../../cart.php?error=failed to add cart!");
  }
}

if (isset($_POST["delete_profile"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_cart where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../cart.php?success=cart deleted successfully");
  } else {
    header("Location: ../../cart.php?error=failed to delete cart!");
  }
}

if (isset($_POST["update_profile"])) {
  $img = $_POST["img"];
  $first_name =  $_POST["first_name"];
  $last_name =  $_POST["last_name"];
  $gender =  $_POST["gender"];
  $phone_number =  $_POST["phone_number"];
  $about =  $_POST["about"];
  $address =  $_POST["address"];                                                                          
  $city =  $_POST["city"];
  $pincode =  $_POST["pincode"];
  $email =  $_POST["email"];
  $password =  $_POST["password"];
  $sql = "update tbl_profile set img='$img' , first_name='$first_name' , last_name='$last_name' ,  gender='$gender' , phone_number='$phone_number' , about='$about' , address='$address' , city='$city' , pincode='$pincode'  email='$email' , password='$password'   where id='1'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../settings.php?success=settings updated successfully");
  } else {
    header("Location: ../../settings.php?error=failes to update settings!");
  }
}

if (isset($_POST["change_password"])) {
  $password = $_POST["old_pass"];
  $new_password = $_POST["new_pass"];
  $confirm_password = $_POST["retype_pass"];
  $passhash = hash("sha256", $password);
  $sql = "select * from tbl_users where password='$passhash' AND id='1'";
  $run = mysqli_query($con, $sql);
  $count = mysqli_num_rows($run);
  if ($count != 0) {
    if ($new_password == $confirm_password) {
      $newpass_hash = hash("sha256", $new_password);
      $sql = "update tbl_users set password='$newpass_hash' where id='1'";
      $run = mysqli_query($con, $sql);
      if ($run == TRUE) {
        header("Location: ../../settings.php?success=Password changed successfully!");
      } else {
        header("Location: ../../settings.php?error=Failed to change password!");
      }
    } else {
      header("Location: ../../settings.php?error=New passwords not match!");
    }
  } else {
    header("Location: ../../settings.php?error=Old password is incorrect!");
  }
}
