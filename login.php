<!doctype html>
    <head>
    	<title>Login E-Book</title>
    	<link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
    	<div class="container">
			<a class="title">BRIGHTFUTURE</a>
			<div class ="inbox">
				<div class="topnav">
							  <a href="home.php">Home</a>
							  <a class="active" href="login.php">login</a>
							  <a href="Cart1.php">Cart
							  <img src="photos\cart.png" height="14" width="14">
							  </a>
							  <a href="FORM.php"> Sign up</a>
							  <a href="contactus.php">24*7 Help</a>
							  <a href="aboutus.php"> About us</a>
							  
						  
				</div>		  
    	    </div>
    	    <div>
		    	<form name="myform" action="validation.php"  method="post">
		    		<br>
		    		<br>
		    		<h2 style="font-style: italic;">Login</h2>
		    		<hr>
		    		<div class="form-group">
			    		<label>Username</label>
			    		<br>
			    		<br>
			    		<input type="text" name="Uname" value="" placeholder="Username" required />
			    	    <br>
			    	    <br>
		    	    </div>
		    	    <div class="form-group">	
			    		<label>Password</label>
			    		<br>
			    		<br>
			    		<input type="password" name="password" placeholder="Password" required />
			    		<br>
		    		</div>
		    		<br>
		    		<input type="Submit" name="" value="login">
		    	</form>
		    </div>
		 </body>
	</html>