<?php

	$name = $_POST['name'];

	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql= "select * from users where username like '%{$name}%'";

	$result = mysqli_query($conn, $sql);

	$data = "<table border=1> 
				<tr>
					<td>ID</td>
					<td>Username</td>
					<td>Email</td>
				</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
			$data .= "<tr>
							<td>{$row['id']}</td>
							<td>{$row['username']}</td>
							<td>{$row['email']}</td>
					</tr>";
	}

	$data .= "</table>";

	echo $data;

?>