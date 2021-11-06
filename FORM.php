 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="FORM.CSS">
    
    
</head>
<body>
    <div class="container">
            <div class ="inbox">
                <div class="topnav">
                              <a href="home.php">Home</a>
                              <a  href="login.php">login</a>
                              <a href="Cart1.php">Cart
                              <img src="photos\cart.png" height="14" width="14">
                              </a>
                              <a class="active" href="FORM.php"> Sign up</a>
                              <a href="contactus.php">24*7 Help</a>
                              <a href="aboutus."> About us</a>       
                </div>        
            </div>
            <form name="signup" action="registration.php" method="post" onsubmit="return validation()">
                <br><br><br><br>
                <div class="row">
                    <div class="col-50">
                        <div class="Inputs" style="border-right: 1px solid black; margin-left: 20%; background-color: lightcyan;">
                        <br>Firstname<br><input type="text" name="Fname" id="Fname" placeholder="Sahil" required>
                        <br>Lastname<br><input type="text" name="Lname" id="Lname" placeholder="Jaju" required>
                        <br>Phone Number<br><input type="text" name="number" id="number" placeholder="7666453699" required>
                        <br>E-mail<br><input type="email" name="email" id="email" placeholder="Sahil@gmail.com" required>
                        </div>
                    </div>
                    <div class="col-50">
                        <div class="input" style="margin-left: 20%;">
                        <br>Username<br><input type="text" name="Uname" id="Uname" placeholder="SahilJaju" required>
                        <br>Password<br><input type="password" name="password" id=password placeholder="Sahil@0230" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        <br>Confirm Password<br><input type="password" name="confirm_password" id=confirm_password placeholder="Sahil@0230" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>
                    </div>
                </div>
                    <br><input type="submit" name="submit" value="Sign up" align="center" style="margin-left:20%">
            </form>   
    </div>
        <!--<?php  
if (isset($_POST['submit'])) {  
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $email=$_POST['email'];
    $contact=$_POST['number'];
    $Uname=$_POST['Uname'];
    $Password=$_POST['password'];

    $servername = "localhost";  
    $username   = "root";  
    $password   = "";  
    $dbname     = "intenship";  
    // Create connection  
    $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
    $sql = "INSERT INTO signup (Fname,Lname,Email,Contact ,Username,Password) VALUES ('$Fname','$Lname','$email','$contact','$Uname','$Password')";  
    
        if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    mysqli_close($conn);  
} 
?>--> 

</body>
</html>



