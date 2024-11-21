<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title >Fee Structure</title>
        
        <style>
            #title{
                font-size:2.5rem;                
            }
            BODY{
                /* background-color: #ffb3c6; */
                background-color: #A3B18A;
            }
            header {
    background: #344E41; /* Semi-transparent medium brown */
    color: #DAD7CD; /* Light beige text color */
    padding: 10px 0;
    position: relative; /* Positioning context for logo */
}
            
header .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative; /* Relative positioning for children */
    text-align: center; /* Center the text */
}

/* Logo styles */
.logo {
    max-width: 60px; /* Smaller logo size */
    height: auto;
    border-radius: 100px;
    position: absolute; /* Absolute positioning within the header */
    left: -90px; /* Move the image to the left */
    top: 50%; /* Center vertically */
    transform: translateY(-50%); /* Adjust vertical alignment */
}
h1{
    color:#DAD7CD ;
    font-family: 'Times New Roman', Times, serif;
    /* font-size: 3rem; */
}
table{
    font-size: 22px ;
    line-height: 60px;
    

}
a{
    color: black;
    width: 86%;
}
p{
    /* color: #0077b6; */
    /* color: #03045e; */
}
#btn{
    /* color:red; */
    background-color:#344E41;
    color:white;
    font-size:1rem;
    padding:10px;
    cursor:pointer;
    border-radius:20px;
    margin-top:0;
    margin-bottom:30px;
}

.tablehead{
    color:white;
    font-size:1.5rem;
}

#logo{
    max-width:80px;
    position: absolute;
    left:28%;
    width:80px;
}
            
        </style>
    </head>
    <body>
    <header>
            <div class="container">
                <img src="assets/css/logo.jpeg" id='logo' alt="Site Logo" class="logo">
                <h1 id="title">Fees & Charges</h1>
            </div>
        </header>
     


<?php
$conn=mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "dbmain");

$rs=mysqli_query($conn, "select * from fee");
?>
<center>
<table border=0 align=center width=89%>
<tr><td>&nbsp;
<tr bgcolor=#344E41 >
<!-- <th id="tab1">S no <font color="#03045e"></font></th>     -->
<th class='tablehead' id="tab1"> GAME <font color="white"></font>
<th class='tablehead' id="tab1">FEE  <font color="white"></font> 

<?php  
$n=0;
while($rw=mysqli_fetch_row($rs))
{
    $n++;
    echo"<tr bgcolor=#DAD7CD>";
    echo"<td> <center>$rw[1]";
    echo"<td><center>$rw[2]";

}
?>
<tr><td>
</table>
</table>
<p>&copy; SPORTS ARENA
</p>
<center>    
    <!-- <br> -->
    <center>
    
    <a href="index.php"><button id='btn'>BACK</button></a>  

    </body>
    </html>