<link rel="stylesheet" href="styles.css">

<header class="header" style="background:linear-gradient(to right, rgba(222, 97, 14, 0.75), rgba(17, 15, 158, 0.8));height:20%">
<div class="logo">Anistacy</div>
      <div>
      <ul id="navbar">
      <li><a class="active" href="index.php">Home</a></li>
       <li><a  href="#feature">Latest</a></li>
       <li> <a  href="Products.php">Products</a></li>
       <li> <a  href="contact.php">Contact</a></li>
       <li><a href="login.php">Login</a></li>
       
       <li id="lg-bag"><?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

<a href="cart.php"><i class="fas fa-shopping-cart"></i> <span><?php echo $row_count; ?></span> </a></li>
       <a href="#" id="close"><i class="fas fa-times"></i></a>
      
      </ul>
    </div>
    
    <div id="mobile">
     
      <a href=""><i class="fas fa-shopping-cart"></i></a>
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