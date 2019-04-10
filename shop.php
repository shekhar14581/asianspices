<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

  <div class="container">
 <div class="col-lg-12">

 <br><br>

 
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Product Id </th>
 <th> Product Name </th>
 <th> Product price </th>
  <th>Product Image </th>
 <th> Product Details </th>

 <th> Action </th>


  </tr >

  <?php

  include 'config.php'; 
 $q = "select * from products ";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['product_id'];  ?> </td>
 <td> <?php echo $res['product_name'];  ?> </td>
 <td> <?php echo $res['product_price'];  ?> </td>
  <td> <img src='<?php echo $res['product_cat'];  ?>' style='width:90px;height:90px'> </td>
 <td> <?php echo $res['product_details'];  ?> </td>
 <td> <button class="btn-success btn"> <a href="paymentsPage.html" class="text-white"> Buy Now </a>  </button> </td>
 

  </tr>

  <?php 
 }
  ?>
 
 </table>  

  </div>
 </div>

  <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>