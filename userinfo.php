<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Tournaments</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #333;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: #E9F1E4; /* Light background for a fresh look */
        }

        header {
            background: #344E41; /* Dark green background */
            color: #F0F8F4; /* Off-white text color */
            padding: 20px 0;
            position: relative;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        header .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
        }

        .logo {
            border-radius: 50%;
            max-width: 80px; /* Slightly larger logo */
            height: auto;
            position: absolute;
            left: 20px; /* Positioned nicely to the left */
            top: 50%;
            transform: translateY(-50%);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Shadow for logo */
        }

        h1 {
            color: #F0F8F4;
            font-size: 2rem;
            margin: 0;
        }

        #poster {
            margin: 20px 0; /* Margin around the poster section */
            text-align: center;
        }

        table {
            font-size: 18px;
            width: 90%;
            margin: 20px auto;
            /* margin-top:7%; */
            border-collapse: collapse;
            background: #F9F9F9; /* Light background for table */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Shadow for table */
            height:60%;
        }

        table th, table td {
            padding: 15px;
            text-align: center;
        }

        table th {
            background: #344E41; /* Dark green for header cells */
            color: #F0F8F4;
            font-size:1.4rem;
            /* color:red; */
        }

        table tr:nth-child(even) {
            background: #F4F4F4; /* Alternating row colors */
            /* color:red; */
            /* font-size:1.8rem; */
        }

        table tr:nth-child(odd) {
            background: #FFFFFF;
            /* font-size:1.8rem; */
            /* color:red; */
        }

        a {
            color: #344E41;
            text-decoration: none;
            font-weight: bold;
        }

        footer {
            background: #344E41; /* Dark green background */
            color: #F0F8F4; /* Off-white text color */
            padding: 15px 0;
            text-align: center;
            margin: 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for footer */
        }

        #logo{
            position: absolute;
            left:20%;
            height:59px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <img src="assets/css/logo.jpeg" id="logo" alt="Site Logo" class="logo">
            <h1>CLIENTS LIST</h1>
        </div>
    </header>
    
    <div id="poster">
        <!-- <img src="t.png" alt="Poster"> -->
    </div>
    
    <?php
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "dbmain");
    $rs = mysqli_query($conn, "SELECT * FROM users");
    ?>

    <table border="0" align="center">
        <tr>
            <th>NAME</th>
            <th>AGE</th>
            <th>MOBILE NUMBER</th>
        </tr>
        <?php  
        while ($rw = mysqli_fetch_row($rs)) {
            echo "<tr>";
            echo "<td>{$rw[0]}</td>";
            echo "<td>{$rw[1]}</td>";
            echo "<td>{$rw[2]}</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <footer>
        <p>&copy; SPORTS ARENA</p>
        <a href="main_page.php">Back</a>
    </footer>
</body>
</html>
