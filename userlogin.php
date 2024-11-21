<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Arena - Sign In</title>
    <link rel="stylesheet" href="assets/css/userlogin.css">
</head>
<body>
    <div class="container">
        <center>
            <h1 id="heading">SPORTS ARENA</h1>
        </center>

        <img src="assets/css/logo.jpeg" id="logo" alt="">
        <form action="loginbackend.php" id='form1'  method="POST">
            
            <div class="form">
                <input type="text" placeholder="Username" id="uname" name='username' class="input-field">
                <input type="password" placeholder="Password" id="pass" name='password' class="input-field">
            </div>
            <button  id='btn' class='btn'>

                <div class="football-container">
                    <!-- <p id="signintext">Sign IN</p> -->
                    <img id="football" src="assets/css/football.png" alt="Sign In Football" class="football">
                </div>
            </button>
            <!-- <audio id="kick-sound" src="kick-sound.mp3" preload="auto"></audio> -->
            <div id="congratulations" class="hidden">
                <h2>Congratulations, that's a Goal!
                    <!-- And You are logged in -->
                </h2>
            </div>
        </div>
    </form>

    <script src="assets/js/userlogin.js"></script>
</body>
</html>
