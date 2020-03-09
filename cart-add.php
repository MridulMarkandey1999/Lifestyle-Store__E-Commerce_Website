<?php
/* Checking that the Item_id is numeric value and then inserting the Record in users_items table with status as ' Added to cart' */
require("includes/common.php"); 
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
/* Redirecting to products.php page, after successful insertion, if user want to add any other item to cart */    
    header('location: products.php');
}
?>   