<?php


$username = $_POST["username"];
$password = $_POST["password"];

$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"dbmain");

$queryy = "SELECT username from admin WHERE username='$username' AND password='$password'";
$qry = mysqli_query($connection,$queryy);

if(mysqli_num_rows($qry) != 0){
    // echo "LOGGED IN SUCCESSFULLY!";
    header("Location: admin.php");
    exit();
}
else{
    echo "INCORRECT USERNAME OR PASSWORD.";
}


?>