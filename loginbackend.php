<?php


$username = $_POST["username"];
$password = $_POST["password"];

$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"dbmain");

$queryy = "SELECT * from users WHERE username='$username' AND password='$password'";


// $queryy = "SELECT username from users WHERE 1=1";
$qry = mysqli_query($connection,$queryy);

if(mysqli_num_rows($qry) != 0){
    echo "LOGGED IN SUCCESSFULLY!";
    header("Location: index.php");
}
else{
    echo "INCORRECT USERNAME OR PASSWORD.";
}


?>