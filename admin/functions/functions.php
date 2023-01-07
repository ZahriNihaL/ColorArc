<?php

include("../includes/db.php");

session_start();

if (isset($_POST['logout'])) {

  unset($_SESSION['loggedin']);
  header("Location:../login.php");
}


if (isset($_POST["login"])) {

  $username = mysqli_real_escape_string($con, $_POST["username"]);
  $password = mysqli_real_escape_string($con,$_POST["password"]);

  $passhash = hash("sha256", $password);

  $sql = "select * from tbl_users where username='$username' and password='$passhash'";
  $run = mysqli_query($con, $sql);
  $count = mysqli_num_rows($run);
  if ($count === 0) {
    header("Location: ../login.php?error=Invalid credential");
  } else {
    $_SESSION["loggedin"] = true; 
    header("Location: ../indexx.php"); 
  }
}



if (isset($_POST["add_trending"])) {
  
  $product_name = $_POST["product_name"];
  $explanation =$_POST["explanation"]; 
  $img = $_POST["img"];
  $price = $_POST["price"];
  $rating = $_POST["rating"];
  $reviews = $_POST["reviews"];
  $pincode = $_POST["pincode"];

  
  $img = $_FILES["image"]["name"];
  $tmp_name = $_FILES["image"]["tmp_name"];

  $to = "../assets/images/trending/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_trending(product_name,explanation,img,price,rating,reviews,pincode) values('$product_name','$explanation','$img','$price','$rating','$reviews','$pincode')";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../trending.php?success=trending added successfully");
  } else {
    header("Location: ../trending.php?error=Failed to add trending!");
  }
}


if (isset($_POST["delete_trending"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_trending where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../trending.php?success=trending deleted successfully");
  } else {
    header("Location: ../trending.php?error=failed to delete trending!");
  }
}


if (isset($_POST["update_trending"])) {

  
  $id = $_POST["id"];  
  $product_name = $_POST["product_name"];
  $explanation =$_POST["explanation"]; 
  $price = $_POST["price"];
  $rating = $_POST["rating"];
  $reviews = $_POST["reviews"];
  $pincode = $_POST["pincode"];


  $img = "";
  if ($_FILES['img']['size'] === 0) {
      $img = $_POST["old_img"];
  } else {

    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
  }

  $to = "../assets/images/trending/" . $img; 

  move_uploaded_file($tmp_name, $to);


  $sql = "update tbl_trending set product_name='$product_name',explanation='$explanation',img='$img',price='$price',rating='$rating',reviews='$reviews',pincode='$pincode' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../trending.php?success=trending updated successfully");
  } else {
    header("Location: ../trending.php?error=failes to update trending!");
  }
}


if (isset($_POST["add_home"])) {
  
  $title = mysqli_real_escape_string($con,$_POST["title"]);
  $description = mysqli_real_escape_string($con,$_POST["description"]);

  
  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];

  $to = "../assets/images/home/" . $img;

  move_uploaded_file($tmp_name, $to);


 
  $img2 = $_FILES["img2"]["name"];
  $tmp_name = $_FILES["img2"]["tmp_name"];

  $to = "../assets/images/home/" . $img2;

  move_uploaded_file($tmp_name, $to);


  $sql = "insert into tbl_home(title, img, img2, description) values('$title', '$img' , '$img2', '$description')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../home.php?success=home added successfully");
  } else {
    header("Location: ../add_home.php?error=failed to add home!");
  }
  

}

if (isset($_POST["delete_home"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_home where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../home.php?success=home deleted successfully");
  } else {
    header("Location: ../home.php?error=Failed to delete home!");
  }
}



if (isset($_POST["update_home"])) {
  $id = $_POST["id"];
  $title = $_POST["title"];
  $description = $_POST["description"];


  $img = $_POST["img"];

  $img = $_FILES["image"]["name"];
  $tmp_name = $_FILES["image"]["tmp_name"];

  $to = "../assets/images/home/" . $img;

  move_uploaded_file($tmp_name, $to);


  $img2 = $_POST["img2"];
  $img = $_FILES["image"]["name"];
  $tmp_name = $_FILES["image"]["tmp_name"];

  $to = "../assets/images/trending/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "update tbl_home set title='$title', img='$img' , img='$img', description='$description' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../home.php?success=home edited successfully");
  } else {
    header("Location: ../home.php?error=failes to edit home!");
  }
}



if (isset($_POST["add_classifications"])) {
  
  $product_name = $_POST["product_name"];
  $explanation =$_POST["explanation"]; 
  $img = $_POST["img"];
  $price = $_POST["price"];
  $rating = $_POST["rating"];
  $reviews = $_POST["reviews"];
  $pincode = $_POST["pincode"];

  
  if ($_FILES['image']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];

    $to = "../assets/images/classification/" . $img;

    move_uploaded_file($tmp_name, $to);
  }


  $sql = "insert into tbl_classification(product_name,explanation,img,price,rating,reviews,pincode) values('$product_name','$explanation','$img','$price','$rating','$reviews','$pincode')";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../classifications.php?success=classifications added successfully");
  } else {
    header("Location: ../classifications.php?error=Failed to add classifications!");
  }
}


if (isset($_POST["delete_classifications"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_classification where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../classifications.php?success=classifications deleted successfully");
  } else {
    header("Location: ../classifications.php?error=failed to delete classifications!");
  }
}


if (isset($_POST["update_classifications"])) {

  $id = $_POST["id"];
  $product_name = $_POST["product_name"];
  $explanation =$_POST["explanation"]; 
  $img = $_POST["img"];
  $price = $_POST["price"];
  $rating = $_POST["rating"];
  $reviews = $_POST["reviews"];
  $pincode = $_POST["pincode"];

  $img = "";
  if ($_FILES['img']['size'] === 0) {
      $img = $_POST["old_img"];
  } else {

    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
  }

  $to = "../assets/images/classification/" . $img; 

  move_uploaded_file($tmp_name, $to);

  $sql = "update tbl_classification set product_name='$product_name',explanation='$explanation',img='$img',price='$price',rating='$rating',reviews='$reviews',pincode='$pincode' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../classifications.php?success=classifications updated successfully");
  } else {
    header("Location: ../classifications.php?error=failes to update classifications!");
  }
}


if (isset($_POST["add_product"])) {
        
  $product_name = $_POST["product_name"];
  $price = $_POST["price"]; 
  $offer_price = $_POST["offer_price"];
  $rating = $_POST["rating"]; 
  $img = $_POST["img"];  
  
  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];

  $to = "../assets/images/product" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_product(product_name, img , price, offer_price, rating ) values('$product_name','$img' , '$price', '$offer_price', '$rating')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../product.php?success=product added successfully");
  } else {
    header("Location: ../add_product.php?error=failed to add product!");
  }

}


if (isset($_POST["delete_product"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_product where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../product.php?success=product deleted successfully");
  } else {
    header("Location: ../product.php?error=Failed to delete product!");
  }
}



if (isset($_POST["update_product"])) {

  $id = $_POST["id"];
  $product_name = $_POST["product_name"];
 
  $price = $_POST["price"]; 
  $offer_price = $_POST["offer_price"];
  $rating = $_POST["rating"];   

  $img = "";
  if ($_FILES['img']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];

    $to = "../assets/images/product" . $img;

    move_uploaded_file($tmp_name, $to);
  }

  $sql = "update tbl_product set product_name='$product_name',img='$img',price='$price', offer_price='$offer_price', rating='$rating' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../product.php?success=product edited successfully");
  } else {
    header("Location: ../product.php?error=failes to edit product!");
  }
}


if (isset($_POST["add_services"])) {
  
  
  $services =$_POST["services"]; 
  $img = $_POST["img"];
  
  $img = $_FILES["image"]["name"];
  $tmp_name = $_FILES["image"]["tmp_name"];

  $to = "../assets/images/services/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_services(services,img) values('$services','$img')";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../services.php?success=services added successfully");
  } else {
    header("Location: ../services.php?error=Failed to add services!");
  }
}


if (isset($_POST["delete_services"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_services where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../services.php?success=trending deleted successfully");
  } else {
    header("Location: ../services.php?error=failed to delete services!");
  }
}


if (isset($_POST["update_services"])) {
  $id = $_POST["id"];
  
  
  $services =$_POST["services"]; 
  $img = $_POST["img"];
  

  $img = "";
  if ($_FILES['img']['size'] === 0) {
      $img = $_POST["old_img"];
  } else {

    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
  }

  $to = "../assets/images/services/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "update tbl_services set services='$services',img='$img'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../services.php?success=services updated successfully");
  } else {
    header("Location: ../services.php?error=failes to update services!");
  }
}


if (isset($_POST["wishlist_add"])) {
        
  $product_name = $_POST["product_name"];
  $price = $_POST["price"]; 
  $explanation = $_POST["explanation"];
  $img = $_POST["img"];
  
  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];

  $to = "../assets/images/wishlist" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_wishlist(product_name, img , price, explanation ) values('$product_name','$img' , '$price', '$explanation')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../wishlist.php?success=wishlist added successfully");
  } else {
    header("Location: ../wishlist_add.php?error=failed to add wishlist!");
  }
}


if (isset($_POST["delete_wishlist"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_wishlist where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../wishlist.php?success=wishlist deleted successfully");
  } else {
    header("Location: ../wishlist.php?error=Failed to delete wishlist!");
  }
}



if (isset($_POST["wishlist_update"])) {

  $id = $_POST["id"];
  $product_name = $_POST["product_name"];
  $price = $_POST["price"]; 
  $explanation = $_POST["explanation"];

  $img = "";
  if ($_FILES['img']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];

    $to = "../assets/images/wishlist" . $img;

    move_uploaded_file($tmp_name, $to);
  }

  $sql = "update tbl_wishlist set product_name='$product_name',img='$img',price='$price', explanation='$explanation' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../wishlist.php?success=wishlist edited successfully");
  } else {
    header("Location: ../wishlist.php?error=failes to edit wishlist!");
  }
}






if (isset($_POST["add_category"])) {
 
  $id = $_POST["id"];
  $product_name = $_POST["product_name"];
  $explanation =$_POST["explanation"]; 
  $img = $_POST["img"];
  $price = $_POST["price"];
  $rating = $_POST["rating"];
  $reviews = $_POST["reviews"];
  $pincode = $_POST["pincode"];
  
  $img = $_FILES["image"]["name"];
  $tmp_name = $_FILES["image"]["tmp_name"];

  $to = "../assets/images/category/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_category(name,img) values('$name','$img')";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../category.php?success=category added successfully");
  } else {
    header("Location: ../category.php?error=Failed to add category!");
  }
}


if (isset($_POST["delete_category"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_category where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../category.php?success=category deleted successfully");
  } else {
    header("Location: ../category.php?error=failed to delete category!");
  }
}


if (isset($_POST["update_category"])) {

  $id = $_POST["id"];
  $product_name = $_POST["product_name"];
  $explanation =$_POST["explanation"]; 
  $img = $_POST["img"];
  $price = $_POST["price"];
  $rating = $_POST["rating"];
  $reviews = $_POST["reviews"];
  $pincode = $_POST["pincode"];
  
  $img = "";
  if ($_FILES['img']['size'] === 0) {
      $img = $_POST["old_img"];
  } else {

    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
  }

  $to = "../assets/images/category/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "update tbl_category set product_name='$name',img='$img' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../category.php?success=category updated successfully");
  } else {
    header("Location: ../category.php?error=failes to update category!");
  }
}





if (isset($_POST["add_customer"])) {
  
  $name = $_POST["name"];
  $explanation =$_POST["explanation"]; 
  $img = $_POST["img"];
  $designation = $_POST["designation"];
  

  
  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];

  $to = "../assets/images/customer/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_customer(name,designation,explanation,img) values('$name','$designation','$explanation','$img')";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../customer.php?success=customer added successfully");
  } else {
    header("Location: ../customer.php?error=Failed to add customer!");
  }
}


if (isset($_POST["delete_customer"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_customer where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../customer.php?success=customer deleted successfully");
  } else {
    header("Location: ../customer.php?error=failed to delete customer!");
  }
}


if (isset($_POST["update_customer"])) {

  $id = $_POST["id"];
  $name = $_POST["name"];
  $explanation =$_POST["explanation"]; 
  $designation = $_POST["designation"];
  
  $img = "";
  if ($_FILES['img']['size'] === 0) {
      $img = $_POST["old_img"];
  } else {

    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
  }

  $to = "../assets/images/offer/" . $img;

  move_uploaded_file($tmp_name, $to);



  $sql = "update tbl_customer set name='$name',designation='$designation',explanation='$explanation',img='$img' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../customer.php?success=customer updated successfully");
  } else {
    header("Location: ../customer.php?error=failes to update customer!");
  }
}


if (isset($_POST["add_customers"])) {

 
  $image = $_FILES["image"]["name"];
  $tmp_name = $_FILES["image"]["tmp_name"];
  $to = "../assets/images/customers/" . $image;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_customers(brand_name,image) values('$brand_name','$image')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../customers.php?success=customers added successfully");
  } else {
    header("Location: ../customers.php?error=Failed to add customers!");
  }
}

if (isset($_POST["delete_customers"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_customers where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../customers.php?success=customer deleted successfully");
  } else {
    header("Location: ../customers.php?error=failed to delete customer!");
  }
}

if (isset($_POST["update_customers"])) {
  $id = $_POST["id"];
  $brand_name = $_POST["brand_name"];
  $image = "";
  if ($_FILES['image']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {
    $image = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];

    $to = "../assets/images/customers/" . $image;

    move_uploaded_file($tmp_name, $to);
  }
  $sql = "update tbl_customers set brand_name='$brand_name', image='$image' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../customers.php?success=customers edited successfully");
  } else {
    header("Location: ../customers.php?error=failes to edit customers!");
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
    header("Location: ../cart.php?success=cart added successfully");
  } else {
    header("Location: ../cart.php?error=failed to add cart!");
  }
}

if (isset($_POST["delete_cart"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_cart where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../cart.php?success=cart deleted successfully");
  } else {
    header("Location: ../cart.php?error=failed to delete cart!");
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
    header("Location: ../cart.php?success=cart updated successfully");
  } else {
    header("Location: ../cart.php?error=failes to update cart!");
  }
}


if (isset($_POST["remove_item"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_cart where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../cart.php?success=cart deleted successfully");
  } else {
    header("Location: ../cart.php?error=failed to delete cart!");
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
    header("Location: ../settings.php?success=settings updated successfully");
  } else {
    header("Location: ../settings.php?error=failes to update settings!");
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
    header("Location: ../cart.php?success=cart added successfully");
  } else {
    header("Location: ../cart.php?error=failed to add cart!");
  }
}

if (isset($_POST["delete_profile"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_cart where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../cart.php?success=cart deleted successfully");
  } else {
    header("Location: ../cart.php?error=failed to delete cart!");
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
    header("Location: ../settings.php?success=settings updated successfully");
  } else {
    header("Location: ../settings.php?error=failes to update settings!");
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

  $to = "../assets/images/products/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_products(product_name,explanation,img,price,total,rating) values('$product_name','$explanation','$img','$price','$total','$rating')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../products.php?success=products added successfully");
  } else {
    header("Location: ../products.php?error=failed to add products!");
  }
}

if (isset($_POST["delete_products"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_products where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../products.php?success=products deleted successfully");
  } else {
    header("Location: ../products.php?error=failed to delete products!");
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

    $to = "../assets/images/products/" . $img;

    move_uploaded_file($tmp_name, $to);
  }

  $sql = "update tbl_products set product_name='$product_name', explanation='$explanation',img='$img',price='$price',total='$total',rating='$rating' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../products.php?success=products updated successfully");
  } else {
    header("Location: ../products.php?error=failes to update products!");
  }
}


if (isset($_POST["add_service"])) {

  $name = $_POST["name"];
  

  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];

  $to = "../assets/images/service/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_service(name,img) values('$name','$img')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../service.php?success=service added successfully");
  } else {
    header("Location: ../service.php?error=failed to add service!");
  }
}

if (isset($_POST["delete_service"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_service where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../service.php?success=service deleted successfully");
  } else {
    header("Location: ..service.php?error=failed to delete service!");
  }
}
 
if (isset($_POST["update_service"])) {

  $id = $_POST["id"];
  $name = $_POST["name"];
  $price = $_POST["price"];
  

  $img = "";
  if ($_FILES['img']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {

    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];

    $to = "../assets/images/service/" . $img;

    move_uploaded_file($tmp_name, $to);
  }

  $sql = "update tbl_service set name='$name',img='$img' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../service.php?success=service updated successfully");
  } else {
    header("Location: ../service.php?error=failes to update service!");
  }
}





if (isset($_POST["add_product"])) {

  $product_name = $_POST["product_name"];
  $explanation = $_POST["explanation"];
  $price = $_POST["price"];
  $total = $_POST["total"];
  $rating = $_POST["rating"];

  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];

  $to = "../assets/images/product/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_product(product_name,explanation,img,price,total,rating) values('$product_name','$explanation','$img','$price','$total','$rating')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../product.php?success=product added successfully");
  } else {
    header("Location: ../product.php?error=failed to add product!");
  }
}

if (isset($_POST["delete_product"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_product where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../product.php?success=product deleted successfully");
  } else {
    header("Location: ../product.php?error=failed to delete product!");
  }
}
 
if (isset($_POST["update_product"])) {

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

    $to = "../assets/images/product/" . $img;

    move_uploaded_file($tmp_name, $to);
  }

  $sql = "update tbl_product set product_name='$product_name', explanation='$explanation',img='$img',price='$price',total='$total',rating='$rating' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../product.php?success=product updated successfully");
  } else {
    header("Location: ../product.php?error=failes to update product!");
  }
}




  

  







