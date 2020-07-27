<?php
	
	session_start();
	
	if(isset($_POST['submit'])){

		$uname 		= $_POST['uname'];
		$email 		= $_POST['email'];
		$password 	= md5($_POST['password']);


		if(empty($uname) || empty($password) || empty($email) ){
			echo "null submission found!";
		}else{
			//$_SESSION['uname'] 		= $uname;
			//$_SESSION['password'] 	= $password;
			//$_SESSION['email'] 		= $email;


			setcookie('uname', $uname, time()+3600, '/');
			setcookie('password', $password, time()+3600, '/');
			setcookie('email', $email, time()+3600, '/');

			header('location: login.php');
		}	

	}else{
		//echo "invalid request";
		header('location: login.php');
	}




?>