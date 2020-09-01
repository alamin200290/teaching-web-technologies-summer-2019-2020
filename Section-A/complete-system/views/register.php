<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>

	<form action="../php/regCheck.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" onkeyup="f2()"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="button" name="submit" value="Submit" onclick="f1()">
						<a href="login.php" style="display: none">login</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>

	<script type="text/javascript">
		function f1(){
			document.getElementsByTagName('a')[0].style.display = 'inline';
		}

		function f2(){
			
		}
	</script>
</body>
</html>