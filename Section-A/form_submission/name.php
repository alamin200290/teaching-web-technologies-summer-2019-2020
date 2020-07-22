<?php

	//print_r($_GET);

	if(isset($_GET['submit'])){
		$a = $_GET['sname'];
		if($a == ""){
			echo "Invalid request";
		}else{
			echo $a;
		}
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Name Input</title>
</head>
<body>

	<form action="#" method="GET">
		<fieldset>
			<legend>NAME</legend>
			Name: <input type="text" name="sname" value=""><br>
			Password: <input type="password" name="password" value=""><br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>