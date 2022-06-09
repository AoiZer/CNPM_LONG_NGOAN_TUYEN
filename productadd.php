<?php 
include "header.php";
include "slider.php";
include "class/product_class.php";
?>
<?php 
$product = new product;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
	//var_dump($_POST,$_FILES);
	/*echo "<pre>";
	echo print_r($_FILES['product_img_more']);
	echo "</pre>";*/
	$insert_product = $product ->insert_product($_POST,$_FILES);
}
 ?>
		<style>
		select{
		width: 200px;
		height: 30px;
		margin: 20px;
		}
		input{
		width: 200px;
		height: 30px;
		margin: 20px;	
		}
		textarea{
		margin: 20px;
		}
		</style>
		<div class="admin-content-right">
			<div class="admin-content-right-product_add">
				<h1>Thêm Sản Phẩm</h1>
				<form action="" method="POST" enctype="multipart/form-data" ><br>
					<select name="cartegory_id" id="cartegory_id">
						<option value="#">-- CHỌN DANH MỤC ---</option>
						<?php 
						$show_cartegory = $product ->show_cartegory();
						if ($show_cartegory) {while ($result = $show_cartegory -> fetch_assoc()){
						
						 ?>
						 <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
						 <?php 
						}}
						  ?>
					</select><br>
					<select name="brand_id" id="brand_id">
						<option value="#">-- CHỌN LOẠI SẢN PHẨM ---</option>
						<?php 
						$show_brand = $product ->show_brand();
						if ($show_brand) {while ($result = $show_brand -> fetch_assoc()){
						
						 ?>
						 <option value="<?php echo $result['brand_id'] ?>"><?php echo $result['brand_name'] ?></option>
						 <?php 
						}}
						  ?>
					</select><br>

					<label for=""> <span style="margin: 20px;">TÊN SẢN PHẨM </span> <span style="color: red;">*</span></label><br>
					<input name="product_name" required type="text"><br>

					<label for=""> <span style="margin: 20px;">GIÁ SẢN PHẨM </span> <span style="color: red;">*</span></label><br>
					<input name="product_price" required type="text"><br>

					<label for=""> <span style="margin: 20px;">DUNG LƯỢNG PIN </span> <span style="color: red;">*</span></label><br>
					<input name="product_bat" required type="text"><br>

					<label for=""> <span style="margin: 20px;">TỒN KHO </span> <span style="color: red;">*</span></label><br>
					<input name="product_inventory" required type="text"><br>

					<label for=""> <span style="margin: 20px;">ĐÃ BÁN </span> <span style="color: red;">*</span></label><br>
					<input name="product_sale" required type="text"><br>

					<label for=""> <span style="margin: 20px;">MÔ TẢ SẢN PHẨM </span> <span style="color: red;">*</span></label><br>
					<textarea name="product_description" id="editor1" cols="60" rows="10" ></textarea><br>

					<label for=""> <span style="margin: 20px;">CHỌN ẢNH CHÍNH </span> <span style="color: red;">*</span></label><br>
					<input name="product_img" required type="file"><br>

					<label for=""> <span style="margin: 20px;">CHỌN ẢNH PHỤ</span> <span style="color: red;">*</span></label><br>
					<input name="product_img_more[]" required multiple type="file"><br>

					<button type="submit" style="
					height: 30px;
					width: 100px;
					margin: 20px;
					cursor: pointer;
					background-color: powderblue;
					border: gray;
					transition: all 0.3s ease;
					">THÊM</button>
				</form>
			</div>
		</div>
	</section>
</body>
<!-- <script> CKEDITOR.replace("editor1"); </script> -->
<script type="text/javascript">
	CKEDITOR.replace("editor1"); 
</script>
<script>
	$(document).ready(function(){
		$("#cartegory_id").change(function(){
			var x = $(this).val()
			$.get("productadd_option.php",{cartegory_id:x},function(data){
				$("#brand_id").html(data);
			})
		})
	})
</script>
</html>