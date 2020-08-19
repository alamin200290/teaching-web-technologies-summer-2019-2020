<?php
	
	require_once('../php/sessionController.php');	
	require_once('../service/userService.php');	


	$user = getById($_GET['id']);

	if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>
	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Edit User</legend>
			<table>
				<tr>
					<td>username</td>
					<td><input type="text" name="username" value="<?=$user['username']?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$user['password']?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?=$user['email']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$user['id']?>">
						<input type="submit" name="update" value="update">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>