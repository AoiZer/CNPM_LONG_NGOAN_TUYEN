<?php 
include "header.php";
include "slider.php";
include "class/product_class.php";
?>

<?php 
$product = new product;
$show_product = $product ->show_product();


 ?>
		<div class="admin-content-right">
			<div class="admin-content-right-cartegory_list">
				<h1>Danh sách danh mục</h1>
				<table>
					<tr>
						<th>STT</th>
						<th>Product ID</th>
						<th>Thương hiệu</th>
						<th>Tên sản phẩm</th>
						<th>Gía sản phẩm</th>
						<th>Dung lượng pin</th>
						<th>Tồn kho</th>
						<th>Đã bán</th>
						<th>Thông tin SP</th>
					</tr>
					<?php 
					if($show_product){
						$i=0;
						while ($result = $show_product->fetch_assoc()) { $i++;
			 		 ?>
					<tr>
						<td><?php
						echo $i
						 ?></td>
						<td><?php 
						echo $result['product_id'];
						 ?></td>
						<td><?php 
						echo $result['product_name'];
						 ?></td>
						 <td><?php 
						 $db2 = new database;
						$db2 ->connectDB();
						$cart = $result['cartegory_id'];
						$data2 = $db2->select("SELECT * FROM tbl_cartegory WHERE cartegory_id = $cart ");
						 foreach ($data2 as $dt2) {						 
						 echo $dt2['cartegory_name'];
						}
						  ?></td>
						  <td><?php 
						echo $result['product_price'];
						 ?></td>
						 <td><?php 
						echo $result['product_bat'];
						 ?></td>
						 <td><?php 
						echo $result['product_inventory'];
						 ?></td>
						 <td><?php 
						echo $result['product_sale'];
						 ?></td>
						 <td><?php 
						echo $result['product_description'];
						 ?></td>
						<td><a href="brandedit.php?brand_id=<?php echo $result['brand_id'] ?>">Edit</a>|<a href="branddelete.php?brand_id=<?php echo $result['brand_id'] ?>">Delete</a></td>
					</tr>
					<?php 
				}}
					 ?>
				</table>
				
			</div>
		</div>
	</section>
</body>
</html>