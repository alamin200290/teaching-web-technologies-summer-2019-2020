<?php 
	session_start();
	require_once('../db/db.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if(empty($username) || empty($password) || empty($email)){
			header('location: ../views/register.php?error=null_value');
		}else{

			$conn = dbConnection();
			if(!$conn){
				echo "DB connection error";
			}

			$sql = "insert into users values('', '{$username}','{$password}', '{$email}','admin')";

			if(mysqli_query($conn, $sql)){
				header('location: ../views/login.php?success=registration_done');
			}else{
				header('location: ../views/register.php?error=db_error');
			}
		}
	}



?>