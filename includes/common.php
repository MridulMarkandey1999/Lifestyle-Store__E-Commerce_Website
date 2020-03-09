<?php
/* this php code is common in almost all the files so we have written it only once and then we will include it where ever required.
 * This will reduce the code length and will make our code more optimised and support reusability of code.
 * Here we are creating connection to the database and starting a session
 */
$con = mysqli_connect("localhost", "root", "", "store")or die($mysqli_error($con));
if(isset($_SESSION['email'])){
   $con = mysqli_connect("localhost", "root", "", "store")or die($mysqli_error($con)); 
}else{
$con = mysqli_connect("localhost", "root", "", "store")or die($mysqli_error($con));
session_start();
}
