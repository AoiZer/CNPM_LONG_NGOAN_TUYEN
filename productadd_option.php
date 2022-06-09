<?php 
include "class/product_class.php";
$product = new product;
$cartegory_id = $_GET['cartegory_id'];
 ?>


<?php 
$show_brand_option = $product ->show_brand_option($cartegory_id);
if ($show_brand_option) 
	{while ($result = $show_brand_option -> fetch_assoc()){
						
?>
<option value="<?php echo $result['brand_id'] ?>"><?php echo $result['brand_name'] ?></option>
 <?php 
}}
?>