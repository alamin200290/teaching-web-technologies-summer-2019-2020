<?php
	
	require_once('../php/sessionController.php');	

	if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<body>
	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Create New User</legend>
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
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Create">
						<a href="home.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>