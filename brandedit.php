<?php 
include "header.php";
include "slider.php";
include "class/brand_class.php";
?>


<?php 
$brand = new brand;
if (!isset($_GET['brand_id']) || $_GET['brand_id']==NULL) {
	echo "<script>window.location = 'brandlist.php'</script>";
}
else {
	$brand_id = $_GET['brand_id'];
}
	$get_brand = $brand -> get_brand($brand_id);
	if($get_brand){
		$result = $get_brand -> fetch_assoc();
	}
 ?>

<?php 
if($_SERVER['REQUEST_METHOD']=== 'POST'){
	$cartegory_id = $_POST['cartegory_id'];
	$brand_name = $_POST['brand_name'];
	$update_brand = $brand ->update_brand($cartegory_id,$brand_id,$brand_name);
}
 ?>

<div class="admin-content-right">
			<div class="admin-content-right-cartegory_add">
				<h1>Thêm Danh Mục</h1>
				<form action="" method="POST">
					<input required name="brand_name" type="text" placeholder="Nhập tên loại sản phẩm" value="<?php echo $result['brand_name'] ?>">
					<button type="submit">Sửa</button>
				</form>
			</div>
		</div>
	</section>
</body>
</html>
