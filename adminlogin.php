<!DOCTYPE html>
<html>

<head>
      <title>HTML Login Form</title>
      <link rel="stylesheet" href="assets/css/adminlogin.css">
</head>

<body>
    <!-- <img src="bg.jpg" id="bg" alt="aa" srcset=""> -->

    <div class="main">
        <center>
            <img src="assets/css/image.png" alt="" id="logo" srcset="">
        </center>
        <h1 id="heading">SPORTS ARENA</h1>
        <!-- <h3>Enter your login credentials</h3> -->
            <form action="adminbackend.php" method="POST">
                  <label for="first">
                        Username:
                  </label>
                  <input type="text" 
                         id="first" 
                         name="username" 
                         placeholder="Enter your Username" required>

                  <label for="password">
                        Password:
                  </label>
                  <input type="password"
                         id="password" 
                         name="password"
                         placeholder="Enter your Password" required>

                  <div class="wrap">
                        <button type="submit">
                              Submit
                        </button>
                  </div>
                  </form>
                  <!-- 
            <p>Not registered?
                  <a href="signup.php"
                     style="text-decoration: none;">
                        Create an account
                  </a>
            </p> -->
      </div>
</body>

</html>
