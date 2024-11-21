<!DOCTYPE html>
<html>

<head>
      <title>HTML Login Form</title>
      <link rel="stylesheet" href="assets/css/signup.css">


</head>

<body>

    <div class="main">
        <center>
            <img src="assets/css/signuplogo.jpeg" alt="" id="logo" srcset="">
        </center>
        <h1 id="heading">SPORTS ARENA</h1>
        <!-- <h3>Enter your login credentials</h3> -->
            <form action="registrationbackend.php" method="POST">
                  <label for="Name">
                        Name:
                  </label>
                  <input type="text" 
                         id="first" 
                         name="name" 
                         placeholder="Enter your Name" required>
                         
                 
                 
                  <label for="age">
                        Age:
                  </label>
                  <input type="number" 
                         id="first" 
                         name="age" 
                         placeholder="Enter your Age" required>




                  <label for="first">
                  Mobile Number:
                  </label>
                  <input type="mnumber" 
                         id="first" 
                         name="mobilenumber" 
                         placeholder="Enter your Mobile Number" required>


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
                <center>

                    <div class="wrap">
                        <button type="submit">
                            Submit
                        </button>
                    </center>
                  </div>
            </form>

            </p>
      </div>
</body>

</html>
