<?php 
include "header.php";
include "slider.php";
include "class/user_class.php";
?>

<?php 
$user = new user;
$show_user = $user ->show_user();
 ?>
		<div class="admin-content-right">
			<div class="admin-content-right-cartegory_list">
				<h1>Danh User</h1>
				<table>
					<tr>
						<th>ID</th>
						<th>User Info</th>						
						<th>User Name</th>
						<th>User Pass</th>
						<th>User Email</th>
						<th>User SĐT</th>
						</tr>
					<?php 
					if($show_user){
						$i=0;
						while ($result = $show_user->fetch_assoc()) { $i++;
			 		 ?>
					<tr>						
						<td><?php 
						echo $result['user_id']
						 ?></td>
						 <td><?php 
						echo $result['user_info']
						 ?></td>
						<td><?php 
						echo $result['user_name']
						 ?></td>
						<td><?php 
						 echo $result['user_pass'];
						 ?></td>
						<td><?php 
						 echo $result['user_mail'];
						 ?></td>
						<td><?php 
						 echo $result['user_sdt'];
						 ?></td>
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