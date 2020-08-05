<?php
	session_start();

	if(isset($_SESSION['status'])){
		if($_SESSION['status'] == "OK"){

			$connection = mysqli_connect('127.0.0.1', 'root', '', 'webtech'); 
			$result = mysqli_query($connection, "select * from users");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome home</h1><a href="logout.php"> logout</a>

	<h3>User List</h3>
	<table border=1> 
				<tr>
					<td>ID</td> 
					<td>NAME</td>
					<td>password</td> 
					<td>Email</td>
				</tr>
			<?php while ($row = mysqli_fetch_assoc($result)) { ?>
				
				<tr>
					<td><?= $row['id'] ?></td>
					<td><?= $row['username'] ?></td>
					<td><?= $row['password'] ?></td>
					<td><?= $row['email'] ?> </td>
				</tr>

			<?php } ?>
		</table>
</body>
</html>


<?php
}else{
		header('location: login.php');
		}
	}else{
		header('location: login.php');
	}
?>