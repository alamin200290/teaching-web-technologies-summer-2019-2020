<?php
	
	session_start();
	
	if(isset($_POST['submit'])){

		$uname 		= $_POST['uname'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];

		if(empty($uname) || empty($password) || empty($email) ){
			echo "null submission found!";
		}else{
			$_SESSION['uname'] 		= $uname;
			$_SESSION['password'] 	= $password;
			$_SESSION['email'] 		= $email;

			echo "done!";
		}	

	}else{
		//echo "invalid request";
		header('location: login.html');
	}




?>