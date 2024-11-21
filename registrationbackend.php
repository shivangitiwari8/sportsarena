<?php
// $color = $_GET["color"];
$name = $_POST["name"];
$age = $_POST["age"];
$mobilenumber = $_POST["mobilenumber"];
$username = $_POST["username"];
$password = $_POST["password"];

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"dbmain");

$rs = mysqli_query($conn,"SELECT name from users where username='$username'");
// echo mysqli_fetch_row($rs);
if($rw = mysqli_fetch_row($rs))
{
        echo "<h1>Already exists!";
}
else{
$qry = "insert into users(name,age,mobilenumber,username,password) values('$name','$age','$mobilenumber','$username','$password')";
mysqli_query($conn,$qry);
echo "<h1>INSERTED SUCCESSFULLY!";

}
?>