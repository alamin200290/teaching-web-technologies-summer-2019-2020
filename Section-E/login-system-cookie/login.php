<?php

	if(isset($_GET['msg'])){
		echo $_GET['msg'];
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form action="logcheck.php" method="post">
		<fieldset>
			<legend>SignIn</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="uname"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>