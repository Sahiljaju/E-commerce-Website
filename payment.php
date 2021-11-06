<!doctype html>
	<head>
		<link rel="stylesheet" type="text/css" href="payment.css">
		<title>Payment</title>
	</head>
	<body>
		<div class="row">
			<div class="col-75">
				<div class="container">
					<form action="paymentdata.php" method="post"> 
						<div class="row">
							<div class="col-50">
								<h3>Billing Address</h3>
								<label for="fname"><i class="fa fa-user"></i>Full Name</label>
								<input type="text" id="fname" name="firstname" placeholder="Sahil Suresh Jaju" required>
								<label for="email"><i class="fa fa-envelope"></i>Email</label>
								<input type="email" id ="email" name="email" placeholder="rohit13@gmail.com">
								<label for="Address"><i class="fa fa-address-card-o"></i>Address</label>
								<input type="text" id="Address"name="Address" placeholder="34 A jabhira sector">
								<label for= "city"><i class="fa fa-institution"></i>City</label>
								<input type="text"  id ="city" name="city" placeholder="Mumbai">

								<div class="row">
									<div class="col-50">
										<label for="state">State</label>
										<input type="text" id="State" name="state" placeholder="Maharashtra">	
									</div>

									<div class="col-50">
										<label for="zip">Zip</label>
										<input type="text" id="zip" name="zip" placeholder="416115">
									</div>
								</div>	
							</div>
							<div class="col-50">
								<h3>Payment</h3>
								<label for="fname">Accepted Cards</label>
								<div class="icon-container">
									<i class="fa fa-cc-visa" style="color: navy;"></i>
									<i class="fa fa-cc-amex" style="color:red;"></i>
								</div>
								<label for="cname">Name on card</label>
								<input type="text" id="cname"name="CardName" placeholder="Rohit Suresh Jaju">
								<label for="Cnum"> Credit Card Number</label>
								<input type="text" id="Cnum" name="CardNumber" placeholder="2465-5446-4446-4445">
								<div class="row">	
									<div class="col-8">
										<label for="Month">Exp Month</label>
										<input type="text" id="Month" name="card_Expiry" placeholder="08">
									</div>	
									<div class="col-16">
										<label for="Year">Exp Year</label>
										<input type="text" id="Year" name="card_ExpiryYear" placeholder="YYYY">
									</div>
									<div class="col-25">
										<label for="CVV">CVV</label>
										<input type="text" id="CVV" name="CVV" placeholder="023">
									</div>
								</div>
								<div>
									<label>
										<input type="checkbox" checked="checked" name="sameadr"> Shipping address is same as billing
									</label>
									<input type="submit" value="Continue to checkbox" class="btn">
								</div>	
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>		
	</body>
	</html>