<?php
	session_start();

	if(isset($_POST['submit'])){

		$uname = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(empty($uname) || empty($password) || empty($email)){
			echo "null submission";
		}else {

			$user = [
						'uname'=>$uname,
						'email'=>$email,
						'password'=>$password
					];

			$_SESSION['uname'] 		= $uname;
			$_SESSION['email'] 		= $email;
			$_SESSION['password'] 	= $password;
			$_SESSION['user'] 		= $user;


			header('location: login.html');
		}

	}else{
		header("location: login.html");
	}


?>