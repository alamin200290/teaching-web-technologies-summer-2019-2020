<?php

	session_start();
	if(!isset($_SESSION['username'])){
		header("location: login.php?error=invalid_request");
	}

?>