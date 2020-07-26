<?php
	//session_start();
	//session_destroy();
	//session_unset($_SESSION['status']);
	
	setcookie('status', "OK", time()-60, '/');
	header('location: login.html');

?>