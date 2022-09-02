<?php
    session_start();
    $database_name = "anistacy";
    $con = mysqli_connect("localhost","root","",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"]
                );
                $_SESSION["cart"][$count] = $item_array;
                // echo '<script>window.location="cart.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"]
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_POST["add"])){

        $product_id = $_GET["id"];
        $item_name = $_POST['hidden_name'];
        $product_price = $_POST['hidden_price'];
        $item_quantity = $_POST['quantity'];

        $select_cart = mysqli_query($con, "SELECT * FROM orderlist WHERE P_NAME = '$item_name'");
       
        if(mysqli_num_rows($select_cart) > 0){
            // echo '<script>alert("Product has been added to orderlist...!")</script>';
            // echo '<script>window.location="cart.php"</script>';
        }
        else{
            $insert_product = mysqli_query($con, "INSERT INTO orderlist(P_NAME,PRICE,QUANTITY)
            VALUES('$item_name','$product_price','$item_quantity')");
        }

    }

    // if (isset($_GET["action"]))
    // {
        
    //     $remove_id = $_GET["action"];
        
    //     mysqli_query($con, "DELETE FROM `orderlist` WHERE `orderlist`.`ID` = '$remove_id'");
        
    // }


    


//    if (isset($_POST["removeitm"]))
//     {
        
//         $remove_id = $_POST["removeitm"];
        
//         mysqli_query($con, "DELETE FROM orderlist WHERE ID = '$remove_id'");
        
//     }



    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    // echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="cart.php"</script>';
                }
            }
        }
    }

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="cart.css">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
</head>
<body>

  <div class="container" style="width: 70%">
        <h2>Shopping Cart</h2>
        <?php
            $query = "SELECT * FROM products ORDER BY product_id ASC";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result)> 0){

                while($row= mysqli_fetch_array($result)){

                 ?>

                <div class="box_container">
                    <form method="post" action="cart.php?action=add&id=<?php echo $row["product_id"]?>">

                        <div class="product">
                            <img src="<?php echo $row["product_image"]; ?>" class="img_responsive" name="prod_img">
                            <h5 class="text_info"><?php echo $row["product_title"]; ?></h5>
                            <h5 class="text-danger">Tk.<?php echo $row["product_price"]; ?></h5>
                            <input type="text"   name="quantity" class="form-control" value="1">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["product_title"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["product_price"]; ?>">
                            <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-danger" value="Add To Cart">

                        </div>

                    </form>

                </div>
                <?php
                
                }
            }

         ?>

        <div class="clear: both"></div>

        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">Product Name</th>
                    <th width="10%">Quantity</th>
                    <th width="13%">Price Details</th>
                    <th width="10%">Total Price</th>
                    <th width="17%">Remove Item</th>
                </tr>

                <?php
                    if(!empty($_SESSION["cart"])){
                        $total = 0;
                        foreach($_SESSION["cart"] as $key => $value){

                ?>
                <tr> 
                    <th><?php echo $value["item_name"]; ?></th>
                    <th><?php echo $value["item_quantity"]; ?></th>
                    <td>Tk <?php echo $value["product_price"]; ?></td>
                            <td>
                                Tk <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="cart.php?action=delete&id=<?php echo $value["product_id"]; ?>" name="removeitm"><span
                               class="text-danger">Remove Item</span></a></td>

                </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align-items="right">Total</td>
                            <th align-items="right">Tk <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
        
        <div class="checkout_btn">
            <a href="checkout.php" class="btn btn-success <?= ($total>1)?'':'disabled'; ?>">Checkout</a>
    
        </div>

     <!-- </div> -->


                <!-- </tr> -->


        <!-- </div> -->

  </div>
  
    
</body>
</html>