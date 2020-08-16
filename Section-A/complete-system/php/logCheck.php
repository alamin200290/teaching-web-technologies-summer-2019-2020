<?php
	
	//include '../db/db.php';
	//require('../db/db.php');
	//include_once('../db/db.php');
	require_once('../db/db.php');
	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){
			header('location: ../views/login.php?error=null_value');
		}else{

			$conn = dbConnection();

			if(!$conn){
				echo "DB connection error";
			}

			$sql = "select * from users where username='{$username}' and password='{$password}'";
			$result = mysqli_query($conn, $sql);
			$user = mysqli_fetch_assoc($result);

			if(count($user) > 0 ){
				$_SESSION['username'] = $username;
				header('location: ../views/home.php');
			}else{
				header('location: ../views/login.php?error=invalid_user');
			}

		}
	}



?>