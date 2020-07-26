<?php
	session_start();

	if(isset($_POST['submit'])){

		$uname 		= $_POST['username'];
		$password 	= $_POST['password'];

		if(empty($uname) || empty($password)){
			echo "null submission";

		}else if( isset($_SESSION['user'])){
			
			if($uname == $_SESSION['user']['uname'] && $password == $_SESSION['user']['password']){
				$_SESSION['status']  = "Ok";
				header('location: home.php');
			}else{
				echo "Invalid username/password";
			}
			
		}else{
			echo "Record not found!";
		}

	}else{
		header("location: login.html");
	}


?>