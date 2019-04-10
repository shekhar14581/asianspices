<?php

include 'config.php';

$id = $_GET['product_id'];

$q = " DELETE FROM `products` WHERE product_id = $id ";

mysqli_query($con, $q);

header('location:productdisplay.php');

?>