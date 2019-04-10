<?php

include 'config.php';

if(isset($_POST['done'])){

  $product_id = $_POST['product_id'];
 $product_name = $_POST['product_name'];
 $product_price = $_POST['product_price'];
  $product_cat = $_POST['product_cat'];
 $product_details = $_POST['product_details'];

 $q = " INSERT INTO `products`(`product_id`, `product_name`, `product_price`, `product_cat`, `product_details`) VALUES ( '$product_id', '$product_name', '$product_price', '$product_cat', '$product_details')";

  $query = mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Add Products </h1>
 <a href="crud/admin/admin.html" class="text-white" style="margin-left:32%">Go back to admin panel</a>
 </div><br>

  <label> Product Id: </label>
 <input type="text" name="product_id" class="form-control" required> <br>

  <label> Product Name: </label>
 <input type="text" name="product_name" class="form-control" required>  <br>
   <label> Product Price: </label>
 <input type="text" name="product_price" class="form-control" required> <br>

  <label> Product Image: </label>

 <select name="product_cat" class="form-control" required>
  <option value="img/ginger.jpg">Ginger</option>
  <option value="img/paprika.jpg">Paprika</option>
  <option value="img/turmeric.jpg">turmeric</option>
   <option value="img/cinnamon.jpg">Cinnamon</option>
  <option value="img/cumin.png">cumin</option>
</select>
 
   <label> Product Details: </label>
 <input type="text" name="product_details" class="form-control" required="please select image"> <br>
 <br>
 <!--
 <div>
 <input type="radio" value="admin" name="type" class="form-control">Admin
<input type="radio"  value="generaluser" name="type" class="form-control">Gen User
</div>
-->

<br>
<br>
  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>
</body>
</html>