<?php 
include "header.php";
include "slider.php";
include "class/advert_class.php";
?>

<?php 
$advert = new advert;
$show_advert = $advert ->show_advert();
 ?>
		<div class="admin-content-right">
			<div class="admin-content-right-cartegory_list">
				<h1>Danh sách danh mục</h1>
				<table>
					<tr>
						<th>ID</th>
						<th>Content 1</th>
						<th>Content2</th>
						</tr>
					<?php 
					if($show_advert){
						$i=0;
						while ($result = $show_advert->fetch_assoc()) { $i++;
			 		 ?>
					<tr>						
						<td><?php 
						echo $result['advert_id']
						 ?></td>
						<td><?php 
						echo $result['advert_content1']
						 ?></td>
						 <td><?php 
						 echo $result['advert_content2'];
						  ?></td>
						<td><a href="advert_edit.php?brand_id=<?php echo $result['advert_id'] ?>">Edit</a>|<a href="advertdelete.php?advert_id=<?php echo $result['advert_id'] ?>">Delete</a></td>
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