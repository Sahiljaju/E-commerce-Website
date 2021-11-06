<?php
session_start();
 
 header('location:login.php');

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
$Uname=$_POST['Uname'];
$Password=$_POST['password'];

$s = "select * from signup where username='$Uname'";
$result = mysqli_query($conn,$s);

$num = mysqli_num_rows($result);

if($num==1){
	echo " Username already taken";
}else{
	$reg = "INSERT INTO signup (Fname,Lname,Contact,email,username,Password) VALUES ('$Fname','$Lname','$contact','$email','$Uname','$Password')";
	if (mysqli_query($conn, $reg)) {
      echo "New record created successfully";
        } else {
          echo "Error: " . $reg . "<br>" . mysqli_error($conn);
        }
}  

mysqli_close($conn);   
?>