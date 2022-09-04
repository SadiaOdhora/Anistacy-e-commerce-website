<?php include "db_conn.php";
	include('functions.php');
?>
<link rel="stylesheet" href="styles.css">

<header class="header" style="background:linear-gradient(to right, rgba(222, 97, 14, 0.75), rgba(17, 15, 158, 0.8));height:20%">
<div class="logo">Anistacy</div>
      <div>
      <ul id="navbar">
      <li><a class="active" href="user.php">Home</a></li>
       <li><a  href="#feature">Latest</a></li>
       <li> <a  href="user_product.php">Products</a></li>
       <li> <a  href="contact.php">Contact</a></li>
      <!-- <li><a href="login.php">Login</a></li>-->
       
       <li id="lg-bag"><?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

<a href="user_cart.php"><i class="fas fa-shopping-cart"></i> <span><?php echo $row_count; ?></span> </a></li>
       <a href="#" id="close"><i class="fas fa-times"></i></a>
      
      </ul>
    </div>

    <!-- logged in user information -->
		<div class="profile_info" style="margin-top:20px;">
			<img src="Images/user.png" style="width:30px;height:30px;"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: white;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: black;">logout</a>
					</small>

				<?php endif ?>
        </li>
      </ul>
    </div>
    <div id="mobile">
     
      <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
      <i id="bar" class="fas fa-outdent"></i>
      
			</div>
<script src ="bar.js"></script>

   <!--<div class="flex">

      <a href="#" class="logo">Anistacy</a>

      <nav class="navbar">
         <a href="index.php">Home</a>
         <a href="products.php">Products</a>
         <a href="contact.php">Contact</a>
      </nav>

      

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>-->

</header>