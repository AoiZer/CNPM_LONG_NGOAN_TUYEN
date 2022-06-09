<?php 
include "database.php";
 ?>

 <?php 

class advert{
	private $db;

	public function __construct()
	{
		$this ->db = new Database();
	}

	public function insert_advert(){
	$advert_content1 = $_POST['advert_content1'];
	$advert_content2 = $_POST['advert_content1'];
	$advert_img = $_FILES['advert_img']['name'];
	move_uploaded_file($_FILES['advert_img']['tmp_name'],"uploads/".$_FILES['advert_img']['name']);

	$query = "INSERT INTO tbl_adv (
					advert_content1,
					advert_content2,
					advert_img) 
		VALUES (
			'$advert_content1',
			'$advert_content2',
			'$advert_img')";
		$result = $this ->db->insert($query);
		return $result;
		}

		public function show_advert(){
		$query = "SELECT * FROM tbl_adv ORDER BY advert_id DESC";
		$result = $this ->db->select($query);
		return $result;
    }
		//header('Location:cartegorylist.php');
		
	}


  ?>

