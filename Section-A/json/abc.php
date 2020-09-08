<?php

	//$json = $_POST['json'];
	//$data = json_decode($json);
	//echo $data->name ." | ". $data->password ." | ". $data->email;

	$name		= "alamin";
	$password	= "123";
	$email		= "alamin@aiub.edu";

	//$data = '{"name":"alamin","password":"123","email":"alamin@aiub.edu"}';
	//echo $data;


	class data {

	};

	$data  = new data();
	$data->name 	= "xyz";
	$data->password = "123";
	$data->email 	= "xyz@gmail.com";

	header('content-type:application/json');
	echo json_encode($data);

	/*$data = ['name'=>'alamin', 'password'=>'123', 'email'=>'abc@aiub.edu'];


	$test= json_encode($data);
	header('content-type:application/json');
	echo $test;
?>*/