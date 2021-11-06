
<?php
session_start();
 
 header('location:contactus.php');

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
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$email=$_POST['email'];
$contact=$_POST['number'];
$message=$_POST['message'];


	$reg = "INSERT INTO contactus (Fname,Lname,Contact,email,message) VALUES ('$Fname','$Lname','$contact','$email','$message')";
	if (mysqli_query($conn, $reg)) {
      echo "New record created successfully";
        } else {
          echo "Error: " . $reg . "<br>" . mysqli_error($conn);
        }

mysqli_close($conn);   
?>