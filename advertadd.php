<?php 
include "header.php";
include "slider.php";
include "class/advert_class.php";
?>
<?php 
$advert = new advert;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
	//var_dump($_POST,$_FILES);
	/*echo "<pre>";
	echo print_r($_FILES['product_img_more']);
	echo "</pre>";*/
	$insert_advert = $advert ->insert_advert($_POST,$_FILES);
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
				<h1>Thêm ADV</h1>
				<form action="" method="POST" enctype="multipart/form-data" ><br>
					<label for=""> <span style="margin: 20px;">MÔ TẢ ADV 1 </span> <span style="color: red;">*</span></label><br>
					<textarea name="advert_content1" id="editor1" cols="60" rows="10" ></textarea><br>

					<label for=""> <span style="margin: 20px;">MÔ TẢ ADV 2 </span> <span style="color: red;">*</span></label><br>
					<textarea name="advert_content2" id="editor1" cols="60" rows="10" ></textarea><br>

					<label for=""> <span style="margin: 20px;">CHỌN ẢNH CHÍNH </span> <span style="color: red;">*</span></label><br>
					<input name="advert_img" required type="file"><br>

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