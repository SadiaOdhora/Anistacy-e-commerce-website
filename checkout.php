<?php
 include 'db_conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">

<section class="checkout_form">

    <form action="" method="post">

        <div class="flex">

            <div class="inputBox">
                <span>Your Name:</span>
                <input type="text" name="name" placeholder="Enter name:" required>
            </div>
            <div class="inputBox">
                <span>Your Number:</span>
                <input type="tel" name="number" placeholder="Enter number:" required>
            </div>
            <div class="inputBox">
                <span>Your Email:</span>
                <input type="email" name="email" placeholder="Enter email:" required>
            </div>
            <div class="inputBox">
                <span>Country:</span>
                <input type="text" name="country" placeholder="e.g Bangladesh" required>
            </div>
            <div class="inputBox">
                <span>Address Line:</span>
                <input type="text" name="address" placeholder="e.g Dhanmondi 8A,Dhaka-1205" required>
            </div>

        </div>
        <input type="submit" value="Order now" name="order_btn" class="btn btn-danger margintop">

    </form>

</section>

</div>

    
</body>
</html>