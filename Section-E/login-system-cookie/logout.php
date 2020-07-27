<?php

	//session_start();
	//session_destroy();
	//session_unset($_SESSION['status']);
	
	setcookie('status', "OK", time()-3600, '/');
	header('location: login.php');
?>