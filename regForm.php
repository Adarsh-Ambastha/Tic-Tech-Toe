<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
</head>
<body>
    

      <?php

                  // connection link
                  $conn = mysqli_connect("localhost","root","", "daiict");
                
                  //checking the connection
                  if(!$conn){
                      die("Error: couldn't connect ". mysqli_connect_error());
                  }
                  else{
                      echo"connected successfully!";
                    
                  }
      ?>
          

    <!-- reg form -->
    <form action="action_page.php">
      <div class="container">
        <h1 style="padding-left: 17%; font-size: 35px;">Register</h1>
        <p style="padding-left: 10%; font-size: 14px;">Please fill in this form to create an account.</p>
        <!-- <hr> -->

        <label for="name"><b>Name: </b></label><br>
        <input type="text" placeholder="Enter Name" name="name" id="name" required>
        <br>
        
    
        <label for="email"><b>Email: </b></label><br>
        <input type="text" placeholder="xyz@gmail.com" name="email" id="email" required>
        <br>

        <label for="state"><b>State: </b></label><br>
        <input type="text" placeholder="eg: Gujarat" name="state" id="state" required>
         <br>

        <label for="city"><b>City: </b></label><br>
        <input type="text" placeholder="eg: Surat" name="city" id="city" required>
        <br>

        <!-- <label for="revenue"><b>Revenue Generated: </b></label><br>
        <input type="text" placeholder="Enter Revenue" name="revenue" id="revenue" required>
        <br>

        <label for="growth"><b>Growth% : </b></label><br>
        <input type="text" placeholder="Enter Growth%" name="growth" id="growth" required>
        <br> -->
    
        <label for="psw"><b>Password: </b></label><br>
        <input type="password" placeholder="xyz@gmail.com" name="psw" id="psw" required>
        <br>
    
        <label for="psw-repeat"><b>Confirm Password: </b></label><br>
        <input type="password" placeholder="xxxxxxxxx" name="psw-repeat" id="psw-repeat" required>
        <!-- <hr> -->
        <br>
    
        <p>By creating an account you agree to our <br><a href="#">Terms & Privacy</a>.</p>
        <button type="submit" class="registerbtn">Register</button>
      </div>
    
      <div class="container signin">
        <p>Already have an account? <a href="signIn.php">Sign in</a>.</p>
      </div>
    </form>

<!-- php code -->
     <?php

          if(isset($_POST['loginbtn']))
        

            // connection link
            $conn = mysqli_connect("localhost","root","", "daiict");
          
            //checking the connection
            if(!$conn){
                die("Error: couldn't connect ". mysqli_connect_error());
            }
            
            // $name = $_POST['name'];
            // $email = $_POST['email'];
            // $state = $_POST['state'];
            // $city = $_POST['city'];
            // $psw = $_POST['psw'];

            $q1 = "INSERT INTO resteration_details('Name' , 'E-Mail', 'State', 'City', 'Password', 'Confirm Password') VALUES ('Shubham', 'shubham123@gmail.com', 'Gujarat', 'Ahmedabad', 'Shubham#1234', 'Shubham#1234')";

            if (mysqli_query($conn, $q1)) {
              echo "record inserted successfully";
              }
            // else{

            

        ?>

</body>
</html>