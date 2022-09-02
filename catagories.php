<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
<link rel ="stylesheet" href = "style-3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.0/css/all.css">

</head>
<body>

<div class="sidebar">
  <a class="active" href="admin.php">Home</a>
  <a href="index.php">Main Page</a>
  <a href="#catagories">Catagories</a>
  <a href="product_details.php">Products</a>
</div>

<section id="catagories">
     <div class="content">
     <h3 class="text-sm-start" style="color:rgb(232, 136, 76);margin-top:200px;">Insert Catagories</h3>
     <?php 
     include "db_conn.php";
     if(isset($_POST['insert_cat'])){
      $catagory_title=$_POST['cat-title'];
       //accessing image
   $product_image=$_FILES['image']['name'];
   //acccessing temp name
   $temp_image=$_FILES['image']['tmp_name'];
   $img_upload_path='Uploads/'.$product_image;

      $select_query="Select *From catagories where catagory_title='$catagory_title'";
      $result_select=mysqli_query($conn,$select_query);
      $number=mysqli_num_rows($result_select);
      if($number>0){
        echo "<script>alert('This catagory already inserted')</script>";
      }else{
        move_uploaded_file($temp_image,$img_upload_path);
        $insert_query="insert into catagories(catagory_title,image) values('$catagory_title','$product_image')";
      $result=mysqli_query($conn, $insert_query);
      if($result)
      {
        echo "<script>alert('Catagory has been inserted successfully')</script>";
      }

    }
      
     }
     ?>
     <form action="" method="post" enctype="multipart/form-data" class="mb-2">
  <div class="input-group w-90 mb-3">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-receipt"></i></span>   
    <input type="text" class="form-control" name="cat-title" placeholder="Insert Catagories" area-label="Username" aria-describedby="basic-addon1">
    
  </div>
  <div class="form-outline mb-4  m-auto ">
                    <label for="product_image" class="form-label  mt-4">Catagory Image</label>
                    <input type="file" name="image" id="image" class="form-control" 
                     required="required">
                </div>
  
  <div class="input-group mt-4">  
  <input Type="submit"
                   name="insert_cat"
                   value="Insert Catagories">

  </div>
</form>

</div>
</section>

</body>
</html>
