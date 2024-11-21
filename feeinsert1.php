<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Fee Entry</title> 
    <style> 
        body { 
            font-family: Arial, sans-serif; 
            background-color: #F9F0F2; 
            color: #7B0025; 
            margin: 0; 
            padding: 0; 
        } 
        .container { 
            max-width: 600px; 
            margin: 50px auto; 
            padding: 20px; 
            background: #ffffff; 
            border-radius: 8px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
            text-align: center; 
        } 
        h1 { 
            color: #7B0025; 
        } 
        p { 
            font-size: 18px; 
            margin: 20px 0; 
        } 
        .alert { 
            color: #D8000C; 
            background-color: #FFBABA; 
            border: 1px solid #D8000C; 
            border-radius: 4px; 
            padding: 10px; 
        } 
        .success { 
            color: #4F8A10; 
            background-color: #DFF2BF; 
            border: 1px solid #4F8A10; 
            border-radius: 4px; 
            padding: 10px; 
        } 
    </style> 
</head> 
<body> 
    <div class="container"> 
        <?php 
        // Securely fetch GET parameters 
        $game = htmlspecialchars($_GET["game"] ?? ''); 
        $fee = htmlspecialchars($_GET["fee"] ?? ''); 
        $duration = htmlspecialchars($_GET["duration"] ?? ''); 
 
        // Database connection 
        $conn = mysqli_connect("localhost", "root", "", "dbmain"); 
        // Fetch the last s_no 
        $rs = mysqli_query($conn, "SELECT s_no FROM fee ORDER BY s_no DESC"); 
        $s_no = 1; // Default value if no rows 
        if ($rw = mysqli_fetch_row($rs)) { 
            $s_no = $rw[0] + 1; // Increment last s_no 
        } 
        // Check for existing game entry 
        $rs = mysqli_query($conn, "SELECT game FROM fee WHERE game='$game'"); 
        if (mysqli_fetch_row($rs)) { 
            echo "<div class='alert'><h1>Entry Already Exists</h1><p>An entry for this game already exists. Please check again.</p></div>"; 
        } 
        else { 
            // Insert new entry 
            $qry = "INSERT INTO fee (game, fee, duration) VALUES ('$game', '$fee', '$duration')"; 
            if (mysqli_query($conn, $qry)) { 
                echo "<div class='success'><h1>Entry Successfully Added!</h1><p>The fee details have been successfully added to the database.</p></div>"; 
            } else { 
                echo "<div class='alert'><h1>Error</h1><p>There was an error adding the entry. Please try again.</p></div>"; 
            } 
        } 

        ?> 
    </div> 
    <center>
        <a href="admin.php"> Back</a> 
    </center>
</body> 
</html>