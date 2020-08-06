<?php

	$conn = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
	$result = mysqli_query($conn, 'select * from users');

	//var_dump($result);

/*	$data = mysqli_fetch_assoc($result);
	$data1 = mysqli_fetch_assoc($result);
	$data2 = mysqli_fetch_assoc($result);
	$data3 = mysqli_fetch_assoc($result);

	print_r($data); echo "<br>";
	print_r($data1); echo "<br>";
	print_r($data2); echo "<br>";
	print_r($data3); echo "<br>";*/


	/*echo "<table border=1>
			<tr>
				<td>ID</td>
				<td>USERNAME</td>
				<td>PASSWORD</td>
				<td>EMAIL</td>
				<td>TYPE</td>
			</tr>";


	while($data = mysqli_fetch_assoc($result)){

		echo "<tr>
				<td>".$data['id']."</td>
				<td>".$data['username']."</td>
				<td>".$data['password']."</td>
				<td>".$data['email']."</td>
				<td>".$data['type']."</td>
			</tr>";
	}

	echo "</table>";
	mysqli_close($conn);*/

	/*if($conn){
		echo "done!";
	}
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Userlist</title>
</head>
<body>
	<h1>Userlist</h1>

	<table border=1>
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>PASSWORD</td>
			<td>EMAIL</td>
			<td>TYPE</td>
		</tr>

		<?php  while($data = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $data['id'] ?></td>
			<td><?php echo $data['username'] ?></td>
			<td><?php echo $data['password'] ?></td>
			<td><?php echo $data['email'] ?></td>
			<td><?php echo $data['type'] ?></td>
		</tr>

		<?php } ?>

	</table>
</body>
</html>