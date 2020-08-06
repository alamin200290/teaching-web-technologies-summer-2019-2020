<?php
	session_start();

	session_destroy();
	//session_unset($_SESSION['status']);

	header('location: login.html');

?>