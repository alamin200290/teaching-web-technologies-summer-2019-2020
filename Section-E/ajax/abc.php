<?php

	//sleep(4);
	
	$name = $_POST['name'];
	
	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select * from users where username like '%{$name}%'";

	$result = mysqli_query($con, $sql);

	$data = "<table border=1>
				<tr>
					<td>ID</td>
					<td>username</td>
					<td>email</td>
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