<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

?>
<!-- starting HTML Code -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Order History | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php include 'includes/header.php'; ?>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        echo "<h2><center>Order Histroy</center></h2><br><br>";
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, users_items.history, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.pid WHERE users_items.user_id='$user_id' AND status='Confirmed'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Order Date & Time</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sum = 0;
                                while ($row = mysqli_fetch_array($result)) {
                                  $sum+= $row["Price"];
                                    echo "<tr><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td>" . $row["history"];
                                }
                                
                                
                                echo "<tr><td> Total </td><td>Rs ". $sum ."</td><td></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<h4><center>You don't have any orders to display..!!</h4></center>";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <!--Footer-->
        <?php include("includes/footer.php"); ?>
        <!--Footer end-->
        
    </body>
</html>
<!-- Ending HTML Code -->