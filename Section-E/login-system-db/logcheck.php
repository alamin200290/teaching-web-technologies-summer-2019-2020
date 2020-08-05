<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$uname 		= $_POST['uname'];
		$password 	= $_POST['password'];

		if(empty($uname) || empty($password) ){
			echo "null submission found!";
		}else{
			
			$con = mysqli_connect('localhost', 'root', '', 'webtech');
			$sql = "select * from users where username='".$uname."' and password='".$password."'";
			
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_assoc($result);

			if(count($row) > 0){
				$_SESSION['status'] = "OK";
				header('location: home.php');
			}else{
				header('location: login.php?msg=invalid_username/password');
			}
		}	

	}else{
		//echo "invalid request";
		header('location: login.php');
	}




?>