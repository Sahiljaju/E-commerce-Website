<?php
session_start();

header('location:Yourorder.php');    

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

$Fname=$_POST['firstname'];
$email=$_POST['email'];
$Address=$_POST['Address'];
$city=$_POST['city'];
$State=$_POST['state'];
$Zip=$_POST['zip'];
$Cardname=$_POST['CardName'];
$CardNumber=$_POST['CardNumber'];
$card_Expiry=$_POST['card_Expiry'];
$card_ExpiryYear=$_POST['card_ExpiryYear'];
$CVV=$_POST['CVV'];


$reg = "INSERT INTO payment (Name,email,Address,City,State,zip,Card_Name,Card_Number,Exp_Month,Exp_Year,CVV) VALUES ('$Fname','$email','$Address','$city','$State','$Zip','$Cardname','$CardNumber','$card_Expiry','$card_ExpiryYear','$CVV')";
    if (mysqli_query($conn, $reg)) {
      echo "New record created successfully";   
        } else {
          echo "Error: " . $reg . "<br>" . mysqli_error($conn);
        }

mysqli_close($conn);   
?>