<?php
 include "db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">


 
  <title>Anistacy</title>
</head>
<body>
  <section id ="header">
    <div class="logo">Anistacy</div>
      <div>
      <ul id="navbar">
      <li><a class="active" href="index.php">Home</a></li>
       <li><a  href="#feature">Latest</a></li>
       <li> <a  href="Products.php">Products</a></li>
       <li> <a  href="contact.php">Contact</a></li>
       <li><a href="login.php">Login</a></li>
       <li id="lg-bag"><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
       <a href="#" id="close2"><i class="fas fa-times"></i></a>
      
      </ul>
      <ul id="navbar2"style="background: rgb(234, 142, 85);display:inline-flex; margin: 0;padding-left: 10px; width: 100%">
  <?php
   
   $select_catagories="Select *from catagories";
   $result_cat=mysqli_query($conn,$select_catagories);
  // $row_data=mysqli_fetch_assoc($result_cat);
   //echo $row_data['catagory_title'];
   while($row_data=mysqli_fetch_assoc($result_cat)){
    $cat_title=$row_data['catagory_title'];
    $cat_id=$row_data['catagory_id'];
    echo "<li style='display: inline;'><a href='$cat_title'>$cat_title</a></li>";
   }
   ?>
                    
  </ul>

    </div>
    <div id="mobile2">
     
      <a href=""><i class="fas fa-shopping-cart"></i></a>
      <i id="bar" class="fas fa-outdent"></i>
     
      
</div>
<script src ="bar.js"></script>
</section>



<section id="feature">
 <div class="catagories">
   <h2 class="title" style="margin-right:250px;">Catagories</h2>
        <div class="small-container">
             <div class="row">
             <?php
        $select_query="Select *from catagories";
        $result=mysqli_query($conn,$select_query);
       
        while($row=mysqli_fetch_assoc($result)){
          $catagory_id=$row['catagory_id'];
          $catagory_title=$row['catagory_title'];
          $product_image=$row['image'];
          echo "<div class='col-3'>
          <h4>$catagory_title</h4>
          <img src='./Uploads/$product_image'>
          </div>
       ";
        }
        
        ?>
          </div>
        </div>
      </div>
    
    <div class="small-container">
      <h2 class="title">Featured products</h2>
      <div class="row">
        <!--fetching products--->
        <?php
        $select_query="Select *from products";
        $result=mysqli_query($conn,$select_query);
       
        while($row=mysqli_fetch_assoc($result)){
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $catagory_id=$row['catagory_id'];
          $product_image=$row['product_image'];
          $product_price=$row['product_price'];
          echo "<div class='col-4'>
          <img src='./Uploads/$product_image'>
          <h4>$product_title</h4>
          <p>$product_description</p>
          <p>Tk.$product_price</p>
          <button class='btn'><a href='cart.php'>Add to cart</a></button>
          </div>
       ";
        }
        
        ?>

        <h2 class="title">Latest Products</h2>
        <div class="row">
        <?php
        $select_query="Select *from products";
        $result=mysqli_query($conn,$select_query);
       
        while($row=mysqli_fetch_assoc($result)){
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_description=$row['product_description'];
          $catagory_id=$row['catagory_id'];
          $product_image=$row['product_image'];
          $product_price=$row['product_price'];
          echo "<div class='col-4'>
          <img src='./Uploads/$product_image'>
          <h4>$product_title</h4>
          <p>$product_description</p>
          <p>Tk.$product_price</p>
          <button class='btn'><a href='cart.php'>Add to cart</a></button>
          </div>
       ";
        }
        
        ?>
          
    <!----- footer------>

    <footer class="footer">
        <div class="container">

           <div class="row">

                 <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                       <li><a href="#">About us</a></li>
                       <li><a href="#">Our service</a></li>
                       <li><a href="#">Privacy policy</a></li>
                       <li><a href="#">Affiliate program</a></li>
                    </ul>
                 </div>

                 <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                      <li><a href="#">FAQ</a></li>
                      <li><a href="#">Order status</a></li>
                      <li><a href="#">Returns</a></li>
                      <li><a href="#">Payment options</a></li>
                    </ul>
                 </div>

                 <div class="footer-col">
                    <h4>Online Shop</h4>
                    <ul>
                      <li><a href="#">T-Shirt</a></li>
                      <li><a href="#">Shoes</a></li>
                      <li><a href="#">Accessaries</a></li>
                      <li><a href="#">Others</a></li>
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


   
   <!-- javascript to make side menu appear -->
  
 
</body>
</html>
