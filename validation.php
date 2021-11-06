<?php
session_start();
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

$Uname=$_POST['Uname'];
$Password=$_POST['password'];

$s = "select * from signup where username='$Uname' and Password='$Password'";
$result = mysqli_query($conn,$s);

$num = mysqli_num_rows($result);

if($num==1){
	header('location:Afterlogin.php');
}else{
	header('location:login.php');
    echo "Username or password is incorrect";
}  

mysqli_close($conn);   
?>