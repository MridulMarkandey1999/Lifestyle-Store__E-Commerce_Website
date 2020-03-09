<?php
// Redirects the user to index.php page if he/she is not logged in or has logout successfully.*/
session_start();
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
// Destroy session and session variables
session_destroy();
header('location: index.php');
?>