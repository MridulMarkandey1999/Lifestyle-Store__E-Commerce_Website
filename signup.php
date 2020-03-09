<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!-- starting HTML Code -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>SIGN UP</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Enter Valid Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true"> <?php if(isset($_GET['msg1'])) echo $_GET['msg1']."<br>"; ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password (Min.6 characters)" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Enter Valid Phone Number (Ex: 8448444853)" maxlength="10" size="10" name="contact" required = "true"> <?php if(isset($_GET['msg2'])) echo $_GET['msg2']."<br>"; ?>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Enter Valid City" name="city" required = "true"><?php if(isset($_GET['msg3'])) echo $_GET['msg3']."<br>"; ?>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <?php include "includes/footer.php"; ?>
        <!--Footer end-->
    </body>
</html>
<!-- Ending HTML Code -->