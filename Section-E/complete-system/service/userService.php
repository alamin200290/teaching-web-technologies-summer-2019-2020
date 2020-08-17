<?php
	
	require_once('../db/db.php');
	
	function validate ($user){
		$con = dbConnection();
		$sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";

		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}

	function create($user){
		$con = dbConnection();
		$sql = "insert into users values('', '{$user['username']}', '{$user['password']}', '{$user['email']}', 'user')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUser(){
		$con = dbConnection();
		$sql = "select * from users";
		$result = mysqli_query($con, $sql);
			
		$users =[];
		while($row = mysqli_fetch_assoc($result)){
			//$users = $row;
		};

		return $users;

	}

?>