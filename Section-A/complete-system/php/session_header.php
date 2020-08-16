<?php
	session_start();

	if(!isset($_SESSION['username'])){
		header('location: ../views/login.php?error=invalid_request');
	}
?>