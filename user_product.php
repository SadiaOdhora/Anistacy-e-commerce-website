<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM cart WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO cart(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="footer.css">
</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'header2.php'; ?>

<div class="container" >



<section id="feature "style=" margin: top 300px;">
 
<section class="products">

   <h1 class="heading">latest products</h1>

   <div class="box-container"style=" margin: top 300px;">

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="uploads/<?php echo $fetch_product['product_image']; ?>" alt="">
            <h3><?php echo $fetch_product['product_title']; ?></h3>
            <div class="price">Tk.<?php echo $fetch_product['product_price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['product_title']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['product_price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['product_image']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>
 <!----- footer------>

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
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>