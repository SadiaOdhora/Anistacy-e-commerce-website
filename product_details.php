<?php
session_start();
 include "db_conn.php";
 if(isset($_POST['insert_product'])){
     $product_title=$_POST['product_title'];
     $description=$_POST['description'];
     $product_keyword=$_POST['product_keyword'];
     $product_catagories=$_POST['product_catagories'];
     $product_price=$_POST['product_price'];
     $product_status='true';
   //accessing image
   $product_image=$_FILES['product_image']['name'];
   //acccessing temp name
   $temp_image=$_FILES['product_image']['tmp_name'];
   $img_upload_path='Uploads/'.$product_image;
   //checking empty condition
   if($product_title=='' or  $description=='' or $product_keyword=='' or $product_catagories=='' or $product_price=='' or $temp_image==''){
    echo "<script>alert('Please fill all the available fields')</script>" ;
    exit();
   }
 else{
    move_uploaded_file($temp_image,$img_upload_path);
    //insert
    $insert_products="Insert Into products(product_title,product_description,product_keywords,catagory_id,
    product_image,product_price,date,status) values('$product_title','$description','$product_keyword','$product_catagories','$product_image','$product_price',NOW(),'$product_status')";
    $result_query=mysqli_query($conn,$insert_products);
    if($result_query)
    {
        echo "<script>alert('Successfully Inserted')</script>" ;
    }
 }
}
?>
<!doctype html>
<html>
    <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel ="stylesheet" href = "style-3.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">
        <title>
            Insert Product
        </title>
        <style>
            .bg{
                background-color:rgb(255, 136, 76);
            }
            </style>
    </head>
    <body class="bg">
    <div class="sidebar">
  <a class="active" href="admin.php">Home</a>
  <a href="index.php">Main Page</a>
  <a href="#catagories">Catagories</a>
  <a href="product_details.php">Products</a>
</div>
       <div class="container mt-3">
            <h1 class="text-center">Insert Products</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <!---Title---->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_title" class="form-label">Product Title</label>
                    <input type="text" name="product_title" id="product_title" class="form-control" 
                    placeholder="Enter Product Title" autocomplete="off" required="required">
                </div>

                 <!---description---->

                 <div class="form-outline mb-4 w-50 m-auto ">
                    <label for="description" class="form-label  mt-4">Product description</label>
                    <input type="text" name="description" id="description" class="form-control" 
                    placeholder="Enter Product description" autocomplete="off" required="required">
                </div>
                  <!---Keyword---->
                  <div class="form-outline mb-4 w-50 m-auto ">
                    <label for="product_keyword" class="form-label  mt-4">Product Keyword</label>
                    <input type="text" name="product_keyword" id="product_keyword" class="form-control" 
                    placeholder="Enter Product Keyword" autocomplete="off" required="required">
                </div>
                <!---Catagory---->
                <div class="form-outline mb-4 w-50 m-auto ">
                    <select name="product_catagories" id="" class="form-select mt-4">
                        <option value="">Select Catagory</option>
                        <?php
                        $select_query="Select *From catagories";
                        $result=mysqli_query($conn,$select_query);
                        while($row=mysqli_fetch_assoc($result))
                        {
                            $catagory_title=$row['catagory_title'];
                            $catagory_id=$row['catagory_id'];
                            echo "<option value='$catagory_id'>$catagory_title</option>";
                        }
                        ?>
                        
                    </select>
                </div>
                <!---Image---->
                <div class="form-outline mb-4 w-50 m-auto ">
                    <label for="product_image" class="form-label  mt-4">Product Image</label>
                    <input type="file" name="product_image" id="product_image" class="form-control" 
                     required="required">
                </div>
                <!---Price---->
                <div class="form-outline mb-4 w-50 m-auto ">
                    <label for="product_price" class="form-label  mt-4">Product Price</label>
                    <input type="text" name="product_price" id="product_price" class="form-control" 
                    placeholder="Enter Product Price" autocomplete="off" required="required">
                </div>
                <!---Submit---->
                <div class="form-outline mb-4 w-50 m-auto ">
                   <input type="submit" name="insert_product"class="btn btn-info mt-4 mb-3 px-3" value="Insert Products">
                </div>
            </form>
        </div>
</body>
    </html>