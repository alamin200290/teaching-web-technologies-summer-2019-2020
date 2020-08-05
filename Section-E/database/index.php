<?php

	//PDO

	//connection 
	$connection = mysqli_connect('127.0.0.1', 'root', '', 'webtech'); 
	$result = mysqli_query($connection, "select * from users");

	//var_dump($result);

/*	$data1 = mysqli_fetch_assoc($result);
	$data2 = mysqli_fetch_assoc($result);
	$data3 = mysqli_fetch_assoc($result);
	$data4 = mysqli_fetch_assoc($result);

	print_r($data1);echo "<br>";
	print_r($data2);echo "<br>";
	print_r($data3);echo "<br>";
	print_r($data4);echo "<br>";*/

	/*echo "<table border=1> 
				<tr>
					<td>ID</td> 
					<td>NAME</td>
					<td>password</td> 
					<td>Email</td>
				</tr>"; 

	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>
				<td>".$row['id']."</td>
				<td>".$row['username']."</td>
				<td>".$row['password']."</td>
				<td>".$row['email']."</td>
			</tr>";
	}

	echo "</table>";*/

	//mysqli_close($connection);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<h1>User List</h1>

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