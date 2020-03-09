<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!-- starting HTML Code -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact | Life Style Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
        <div class="container" id="content">
            <div class="col-sm-10"><br>
                <h2>Live Support</h2>
                <p class="w">The Contact Us page is one of the most visited pages of any website. That seems like a compelling
                enough reason to redesign your Contacts section to better meet your user's needs and grab their attention.
                While working on this post, I came across hundreds of beautifully made websites, yet their Contact Us
                pages were, for the most part, disappointing. Most contact pages are made for show, with just an email
                address, phone, location, and some short boring text on a plain background.reason to redesign your Contacts
                section to better meet your user's needs and grab their attention. While working on this post, I came across
                hundreds of beautifully made websites.</p>
            </div> 
            <div class="col-sm-2" style="float:right;"><br>
                <img src="img/contact.png" alt="contact picture">
            </div>
            <div class="col-sm-8">
                <h1>CONTACT US</h1>
                <!-- form to Collect Users issue -->
                <form action="contact_script.php" method="POST">
                    <div class="form-group">
                        <input class="form-control" placeholder="Name" name="name"  required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true"> <?php if(isset($_GET['msg1'])) echo $_GET['msg1']."<br>"; ?>
                    </div>
                    <div class="form-group">
                        <textarea style="border-radius: 5px;"rows="8" cols="101" placeholder=" Address your issue here"></textarea> 
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <!-- Displaying contact information -->
            <div class="col-sm-4">
                <h3>COMPANY INFORMATION:</h3><br>
                <p>Gurgaon, India-122018</p><br>
                <p>phone: +91 7302195227</p><br>
                <p>email: lifestylestore@gmail.com</p>
            </div>
        </div> 
        <!--Footer-->
        <?php include("includes/footer.php"); ?>
        <!--Footer end-->
        
    </body>
</html>
<!-- Ending HTML Code -->