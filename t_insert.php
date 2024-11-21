<?php
$game = $_GET["game"];
$date = $_GET["date1"];
$dis = $_GET["dis"];

// Establish the database connection
$conn = mysqli_connect("localhost", "root", "", "dbmain");

// Check for connection errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to check if an entry already exists for the given date
$rs = mysqli_query($conn, "SELECT game FROM tournaments WHERE date='$date'");

// Check if the query was successful
if ($rs === false) {
    die("Query error: " . mysqli_error($conn));
}

// Check if an entry was found
if (mysqli_fetch_array($rs)) {
    echo "<div class='alert'><h1>Entry Already Exists</h1><p>An entry for this game already exists. Please check again.</p></div>";
} else {
    // Insert new entry
    $qry = "INSERT INTO tournaments (game, date, des) VALUES ('$game', '$date', '$dis')";
    if (mysqli_query($conn, $qry)) {
        echo "<div class='success'><h1>Entry Successfully Added!</h1><p>The fee details have been successfully added to the database.</p></div>";
    } else {
        echo "<div class='alert'><h1>Error</h1><p>There was an error adding the entry. Please try again.</p></div>";
    }
}

// Close the database connection
mysqli_close($conn);
?>
