<?php

	//$json = $_POST['json'];
	//$obj = json_decode($json);
	
	
	/*$data = '{
				"username" 	: "alamin",
				"password" 	: "123"
			}';*/

	$data = [
		"username" => 'abc',
		"password" => '123',
		"email" => 'abc@gmail.com',
	];

	class abc {

	}

	$abc = new abc();

	$abc->username = "xyz";
	$abc->password = "12345";
	$abc->email = "xyz@gmail.com";

	header("content-type: application/json");
	echo json_encode($abc);
?>