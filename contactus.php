<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">
            <div class="top">
                   <div class="menu">
                              <a href="home.php">Home</a>
                              <a href="login.php">login</a>
                              <a href="Cart1.php">Cart
                              <img src="photos\cart.png" height="14" width="14">
                              </a>
                              <a href="FORM.php"> Sign up</a>
                              <a class="active" href="contactus.php">24*7 Help</a>
                              <a  href="aboutus.php"> About us</a>
                     </div>
            </div>

        <div class="layout head"><h1>Contact Us</h1></div>
        
        <div class="layout left-side">
        <p style="font-family: Georgia, 'Times New Roman', Times, serif;">Latest version of all books are only availabel at our website at best price.</p>
           <p style="font-family: Georgia, 'Times New Roman', Times, serif;">Hurry up!</p>
           <p style="font-family: Georgia, 'Times New Roman', Times, serif;">For any Business realted query reach out to us at:
               <br>
               <a href="mailto:example@gmail.com">example@gmail.com</a>
           </p>
        


        </div>
        <div class="layout right-side">
            
              <form action="contact.php" method="POST">
                <div>
                    
                    <div class="form">
                    <label id="first-name"></label>
                    <input type="text" name="Fname" id="first-name" placeholder="First name" required>
                    </div>

                    <div class="form">
                    <label id="first-name"></label>
                    <input type="text" name="Lname" id="first-name" placeholder="Last name" required>
                    </div>

                    <div class="form">
                    <label id="first-name"></label>
                    <input type="number" name="contact" id="first-name" placeholder="Your number" required>
                    </div>

                    <div class="form">
                    <label id="email"></label>
                    <input type="email"  name =" email" id="email" placeholder="Your Email" required>
                    </div>

                    <div class="form">
                    <label id="message"></label>
                    <input type="text" name="message"id="message" placeholder="Your message" required>
                    </div>

                    
                    <div class="form">
                    <label id="btn"></label>
                        <input type="submit" id="btn">
                    </div>


                </div>
               </form>
            
            
        </div>

          <div class="container two">
              <div class="left">
                <h1 style="font-size: 50px; border-bottom: 2px solid rgb(255, 248, 248); font-family: Georgia, 'Times New Roman', Times, serif;"  >We’ll take good care of our customer.</h1>
                <p style="font-size: 30px; font-family: Georgia, 'Times New Roman', Times, serif;">We’ll give you the best services. All of our books are orginal version and not first copy. Our aim is to provide you best quality books to our Customers. </p>
              </div>
              <div class="right">
                  <a href="CONTACT.html">Contact us</a>
              </div>









          </div>
        
        <!-- <div class="container2">
            <div class="left">
                <div class="head1"><h1>We’ll take good care of your rocket.</h1>
                <p>We’ll treat your rocket as if it’s our own. Our standards are higher than the ISS's altitude. We also enjoy test driving your rocket before giving it back 😱</p>
                </div>
            </div>
            
            <div class="right">
                <div id="btn2">
                <a href="CONTACT.html">Contact us</a>
                </div>
            </div>
        </div> -->
        






    </div>
    
</body>
</html>