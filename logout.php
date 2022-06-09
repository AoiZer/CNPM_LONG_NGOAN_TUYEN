<?php 
include "class/user_class.php";
$db = new database;
$db ->connectDB();
$user = new user;
$users_id = $_GET["users_id"];
$reset_status = $user ->reset_status($users_id);
echo '<meta http-equiv="refresh" content="1; URL=index.php" />'; 
 ?>