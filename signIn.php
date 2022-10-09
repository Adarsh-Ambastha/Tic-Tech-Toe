<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- sign in form -->
    <form action="action_page.php" method= "POST">
        <div class="container">
          <h1 style="padding-left: 17%; font-size: 35px;">Sign-in</h1>
         
      
          <label for="email"><b>Email: </b></label><br>
          <input type="text" placeholder="xyz@gmail.com" name="email" id="email" required>
          <br>
  
          <label for="psw"><b>Password: </b></label><br>
          <input type="password" placeholder="xxxxxxxxx" name="psw" id="psw" required>
          <br>
      
      
          <p style="font-size: 15px;">By creating an account you agree to our <a href="signIn.html">forget password?</a>.</p>

          <button type="signIn" class="loginbtn">Login</button>
        </div>
      
        <div class="container signin">
          <p style="font-size: 15px;">Do not have an account? <a href="regForm.php">Register</a>.</p>
        </div>
      </form>


       

    
</body>
</html>