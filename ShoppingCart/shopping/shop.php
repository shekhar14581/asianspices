<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			
			$productByCode = $db_handle->runQuery("SELECT * FROM products WHERE product_id='" . $_GET["product_id"] . "'");
			$itemArray = array($productByCode[0]["product_id"]=>array('product_name'=>$productByCode[0]["product_name"], 'product_id'=>$productByCode[0]["product_id"], 'quantity'=>$_POST["quantity"], 'product_price'=>$productByCode[0]["product_price"], 'product_cat'=>$productByCode[0]["product_cat"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["product_id"],array_keys($_SESSION["cart_item"]))) {
					
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["product_id"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			
			foreach($_SESSION["cart_item"] as $k => $v) {
				
					if($_GET["product_id"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>

<div id="shopping-cart">

<div class="txt-heading">Shopping Cart</div>


<a id="btnEmpty" href="shop.php?action=empty">.Empty Cart</a>

<a id="btnEmpty" href="../../display.html">Home.</a>	
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Product Name</th>
<th style="text-align:left;">Product Id</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["product_price"];
		?>
				<tr>
				<td><img src="<?php echo $item["product_cat"]; ?>" class="cart-item-image" /><?php echo $item["product_name"]; ?></td>
				<td><?php echo $item["product_id"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["product_price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
	
				
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["product_price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>

</tr>
</tbody>
</table>
<a id="btnEmpty" href="../../paymentsPage.html">Proceed</a>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>

<div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM products ORDER BY product_id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item" style="margin-left:4%">
			<form method="post" action="shop.php?action=add&product_id=<?php echo $product_array[$key]["product_id"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["product_cat"]; ?>" style='width:300px;height:200px'></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["product_name"]; ?></div>
			<div class="product-price"><?php echo "€".$product_array[$key]["product_price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
	<?php
		}
	}
	?>
</div>
</BODY>
</HTML>