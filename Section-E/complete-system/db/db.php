<?php

	$host 	= "127.0.0.1";
	$dbuser = "root";
	$dbpass	= "";
	$dbname	= "webtech";

	function dbConnection(){

		global $host;
		global $dbuser;
		global $dbpass;
		global $dbname;

		return $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
	}

?>