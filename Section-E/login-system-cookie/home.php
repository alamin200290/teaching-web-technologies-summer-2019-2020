<?php
	session_start();

	if(isset($_COOKIE['status'])){
		if($_COOKIE['status'] == "OK"){
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome home</h1><a href="logout.php"> logout</a>
</body>
</html>


<?php
}else{
		header('location: login.php');
		}
	}else{
		header('location: login.php?msg=statusnotfound');
	}
?>