<?php
	require_once('../php/sessionController.php');
	require_once('../service/userService.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>user List</title>
</head>
<body>

	<h1>User List page</h1>

	<?php
		$users = getAllUser();
	?>

	<table border=1> 
		<tr>
			<td>ID</td> 
			<td>NAME</td>
			<td>password</td> 
			<td>Email</td>
			<td>Action</td>
		</tr>
		<?php for($i=0; $i != count($users); $i++ ){ ?>
			<tr>
				<td><?= $users[$i]['id'] ?></td>
				<td><?= $users[$i]['username'] ?></td>
				<td><?= $users[$i]['password'] ?></td>
				<td><?= $users[$i]['email'] ?> </td>
				<td>
					<a href="edit.php?id=<?=$users[$i]['id']?>"> Edit</a> |
					<a href="delete.php?id=<?=$users[$i]['id']?>"> Delete</a> 

				</td>
			</tr>
		<?php } ?>
	</table>

</body>
</html>