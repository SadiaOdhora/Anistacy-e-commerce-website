<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style-2.css">
	<link rel="stylesheet" type="text/css" href="style-3.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">
</head>
<body>
<div class="sidebar "style="margin: top -100px;height: 500px;width:fit-content;">
  <a  href="index.php">Home</a>
  <a href="Products.php">Products</a>
  <a href="contact.php">Contact</a>
  <a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
</div>
	<div class="header" >
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
	
    <section style="margin-top:150px;">
	<footer class="footer "style="diplay:flex;">
        <div class="container">

           <div class="row">

                 <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                       <li><a href="#">About us</a></li>
                       <li><a href="#">Our service</a></li>
                       <li><a href="#">Privacy policy</a></li>
                    </ul>
                 </div>

                 <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                      <li><a href="#">FAQ</a></li>
                      <li><a href="#">Order status</a></li>
                      <li><a href="#">Payment options</a></li>
                    </ul>
                 </div>

                 <div class="footer-col">
                    <h4>Online Shop</h4>
                    <ul>
                      <li><a href="#">T-Shirt</a></li>
                      <li><a href="#">Shoes</a></li>
                      <li><a href="#">Accessaries</a></li>
                    </ul>
                 </div>

                 <div class="footer-col">
                    <h4>Follow Us</h4>
                    <ul class="socials">
                       <a href="#"><i class="fab fa-facebook-square" ></i></a>
                       <a href="#"><i class="fab fa-twitter"></i></a>
                       <a href="#"><i class="fab fa-instagram"></i></a>
                       <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </ul>
                 </div>


          </div>

        </div>
    </footer>
</section>
</body>
</html>