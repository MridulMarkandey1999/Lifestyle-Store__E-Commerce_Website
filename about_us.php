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
        <title>About Us | Life Style Store</title>
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
            <div class="col-sm-4"><br>
                <h4><b>WHO WE ARE</b></h4><br>
                    <img src="img/about-img.jpg" alt="About Image">
                    <p class="w">Online shopping is a form of electronic commerce which allows consumers to directly
                    buy goods or services from a seller over the Internet using a web browser. Consumers 
                    find a product of interest by visiting the website of the retailer directly or by
                    searching among alternative vendors using a shopping search engine, which 
                    displays the same product's availability, and pricing at different e-retailers.
                    As of 2016, customers can shop online using a range of different computers
                    and devices, including desktop computers, laptops, tablet computers and smartphones.</p>
            </div>
            <div class="col-sm-4"><br>
                <h4><b>OUR HISTORY</b></h4><br>
                    <p style="color: #269abc">1960</p>
                    <p class="w">One of the earliest forms of trade conducted online was IBM's online transaction processing
                        (OLTP) developed in the 1960s</p><br>
                    
                    <p style="color: #269abc">1985</p>
                    <p class="w">The processing of financial transaction in real-time. The computerized ticket reservation 
                    system developed for American Airlines called Semi-Automatic Business Research Environment (SABRE)
                    was one of its applications.</p><br>
                    
                    <p style="color: #269abc">1990</p>
                    <p class="w">Here, computer terminals located in different travel agencies were linked to a large
                    IBM mainframe computer, which processed transactions simultaneously and coordinated them so
                    that all travel agents had access to the same information at the same time.<br><br>
                    The emergence of online shopping as we know today developed with the emergence of the Internet.</p>
                    
            </div>
            <div class="col-sm-4"><br>
                    <h4><b>GROWTH</b></h4><br>
                    <h4><b>Growth in online shoppers</b></h4><br>
                    <p class="w"> As the revenue from online sales continue to grow significantly researchers identified different 
                    types of online shoppers, Rohm & Swaninathan[7] identified four categories and named them 
                    "convenience shoppers, variety seekers, balanced buyers, and store-oriented shoppers". They
                    focused on shopping motivations and found that the variety of products available and the perceived 
                    convenience of the buying online experience were significant motivating factors. </p>
            </div>
        </div>       
        <?php include("includes/footer.php"); ?>
    </body>
</html>
<!-- ending HTML Code -->
