<?php

  include 'config.php';

  if(isset($_POST['done'])){

  $product_id = $_GET['product_id'];
 $product_name = $_POST['product_name'];
 $product_price = $_POST['product_price'];
 // $product_cat = $_POST['product_cat'];
  $product_details = $_POST['product_details'];
 
 $q = " update products set product_id=$product_id, product_name='$product_name', product_price='$product_price', product_details='$product_details' where product_id=$product_id  ";

  $query = mysqli_query($con,$q);

  header('location:productdisplay.php');
 }

?>
<?php
//getting id from url
$product_id = $_GET['product_id'];
 
//selecting data associated with this particular id


$q = "SELECT * FROM products WHERE product_id=$product_id";

  $query = mysqli_query($con,$q);
 
while($res = mysqli_fetch_array($query))
{
    $product_name = $res['product_name'];
    $product_price = $res['product_price'];
    $product_details = $res['product_details'];
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
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>
                                         
  <label> Productname: </label>
 <input type="text" name="product_name" class="form-control" required value="<?php echo $product_name;?>" > <br>

  <label> Product price: </label>
 <input type="text" name="product_price" class="form-control" required value="<?php echo $product_price;?>"> <br>
  <label> Product Details: </label>
 <input type="text" name="product_details" class="form-control" required  value="<?php echo $product_details;?>"> <br>

  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

  </div>
 </form>
 </div>
</body>
</html>