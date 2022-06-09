<?php 
include "database.php";
 ?>

 <?php 

class user{
	private $db;

	public function __construct()
	{
		$this ->db = new Database();
	}
  

	public function show_user(){
		$query = "SELECT * FROM tbl_user ORDER BY user_id DESC";
		$result = $this ->db->select($query);
		return $result;
	}
	public function insert_user(){
	$user_info = $_POST['user_info'];	
	$user_name = $_POST['user_name'];
	$user_pass = $_POST['user_pass'];
	$user_mail = $_POST['user_mail'];
	$user_sdt = $_POST['user_sdt'];

	$query = "INSERT INTO tbl_user (
					user_info,
					user_name,
					user_pass,
					user_mail,
					user_sdt) 
		VALUES (
			'$user_info',
			'$user_name',
			'$user_pass',
			'$user_mail',
			'$user_sdt')";
		$result = $this ->db->insert($query);

		header('Location:register-done.php');
		return $result;
	}
	public function update_status($name_request){
	$query = "UPDATE tbl_user SET user_status = '1' WHERE user_name = '$name_request'";
		$result = $this ->db->update($query);		
		/*header('Location:http://localhost/CNPM_Project_xampp/admin/index.php');*/
		return $result;

	}
	public function reset_status($user_id){
	$query = "UPDATE tbl_user SET user_status = '0' WHERE user_id = '$user_id'";
		$result = $this ->db->update($query);		
		/*header('Location:http://localhost/CNPM_Project_xampp/admin/index.php');*/
		return $result;

	}

	public function update_cartegory($cartgory_name,$cartegory_id){
		$query = "UPDATE tbl_cartegory SET cartegory_name = '$cartgory_name' WHERE cartegory_id = '$cartegory_id'";
		$result = $this ->db->update($query);
		header('Location:cartegorylist.php');
		return $result;
	}
	public function delete_cartegory($cartegory_id){
		$query = "DELETE FROM tbl_cartegory WHERE cartegory_id = '$cartegory_id' ";
		$result = $this ->db->delete($query);
		header('Location:cartegorylist.php');
		return $result;
	}
}

  ?>

