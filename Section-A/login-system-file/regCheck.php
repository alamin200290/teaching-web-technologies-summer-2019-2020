<?php
	session_start();

	if(isset($_POST['submit'])){

		$uname = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(empty($uname) || empty($password) || empty($email)){
			echo "null submission";
		}else {

		
			/*$_SESSION['uname'] 		= $uname;
			$_SESSION['email'] 		= $email;
			$_SESSION['password'] 	= $password;
			$_SESSION['user'] 		= $user;*/


			$file = fopen('user.txt', 'a');
			fwrite($file, $uname.'|'.$password.'|'.$email."/r/n");
			fclose($file);



			header('location: login.html');
		}

	}else{
		header("location: login.html");
	}


?>