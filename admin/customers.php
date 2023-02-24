<?php
require_once 'assets/includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
     include("assets/css/style.php");
    ?>
    <title>CUSTOMERS</title>
</head>
<body>

    <?php include("assets/content/navbar.php") ?>
    <section class="home">
        <div class="text">
            <div class="admin-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-11">
                                <h4 class="card-title ms-0 fw-bold mt-3">CUSTOMERS</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card custom-card-2 mt-5">
                <div class="card-header ">
                    <h5 class="text-center">Customer Details Of ColorArc</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr class="table table-bordered text-white text-center" style="background-color: #72080f;">
                            <td>NAME</td>
                            <td>EMAIL</td>
                            <td>PHONE NUMBER</td>
                            <td>DELETE</td>
                        </tr>
                        <tr>
                            <?php
                            $query = "select * from tbl_customers";
                            $result = mysqli_query($con, $query);
                            while ($row = mysqli_fetch_assoc($result)) {

                                $id = $row["id"];
                                $name = $row["name"];
                                $mail = $row["mail"];
                                $phone_number = $row["phone_number"];
                            ?>
                                <td class="text-center"><?php echo $row['name']; ?></td>
                                <td class="text-center"><?php echo $row['mail']; ?></td>
                                <td class="text-center"><?php echo $row['phone_number']; ?></td>

                                <form method="post" action="assets/functions/functions.php">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <td>
                                    <form method="post" action="assets/functions/functions.php">
                                        <input type="hidden" name="id" value="<?php echo $id ?>">
                                        <div class="text-center">
                                        <button type="submit" name="delete_customers" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure to delete?');" style="background-color: #72080f; border: 0;">Delete</button>
                                        </div>
                                    </form>  
                                    </td>
                                </form>
                        </tr>
                    <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php include("assets/content/script.php"); ?>
    <script>
        changeNav("cust-nav");
    </script>
</body>
</html>