<?php
	
	$host	= "127.0.0.1";
	$dbuser = "root";
	$dbpass = "";
	$dbname	= "webtech";

	function dbConnection(){
		global $host;
		global $dbname;
		global $dbuser;
		global $dbpass;

		return $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
	}

?>