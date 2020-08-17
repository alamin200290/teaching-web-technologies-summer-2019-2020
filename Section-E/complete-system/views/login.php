<?php
	
	if(isset($_GET['error'])){

		if($_GET['error'] == 'null'){
			echo "username/password can't left empty...";
		}

		if($_GET['error'] == 'invalid'){
			echo "invalid username/password";
		}

		if($_GET['error'] == 'invalid_request'){
			echo "invalid request...please login first..";
		}
	}

	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'success'){
			echo "Registration done! now you can sign in...";
		}
	}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>

	<h1>Login page</h1>

	<form action="../php/loginController.php" method="post">
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>username</td>
					<td><input type="text" name="username"></td>
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