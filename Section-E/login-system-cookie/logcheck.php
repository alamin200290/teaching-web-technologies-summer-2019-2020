<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$uname 		= $_POST['uname'];
		$password 	= md5($_POST['password']);

		if(empty($uname) || empty($password) ){
			echo "null submission found!";
		}else{
			if(isset($_COOKIE['uname']) && isset($_COOKIE['password'])){
				if($uname == $_COOKIE['uname'] && $password == $_COOKIE['password']){
					
					setcookie('status', "OK", time()+3600, '/');
					header('location: home.php');

				}else{
					header('location: login.php?msg=invalid_username/password');
				}
			}else{
				echo "don't have any account!";
			}
			
		}	

	}else{
		//echo "invalid request";
		header('location: login.php?msg=submitbuttonerror');
	}




?>