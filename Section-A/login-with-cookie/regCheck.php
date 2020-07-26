<?php
	session_start();

	if(isset($_POST['submit'])){

		$uname = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$enc = md5($password);

		if(empty($uname) || empty($password) || empty($email)){
			echo "null submission";
		}else {

			$user = [
						'uname'=>$uname,
						'email'=>$email,
						'password'=>$password
					];

			/*$_COOKIE['uname'] 		= $uname;
			$_SESSION['email'] 		= $email;
			$_SESSION['password'] 	= $password;
			$_SESSION['user'] 		= $user;*/

			setcookie('uname', $uname, time()+3600, '/');
			setcookie('email', $email, time()+3600, '/');
			setcookie('password', $enc, time()+3600, '/');

			header('location: login.html');
		}

	}else{
		header("location: login.html");
	}


?>