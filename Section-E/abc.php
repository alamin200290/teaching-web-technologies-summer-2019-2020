<?php
	
	//print "alamin";
	//echo "alamin";
	//print("al-amin");
	
	//input ------

	/*$a = 'abc';
	$i = 12;
	$d = 3.4;*/

	//print $a.$i;

	//$a = array(4);
	$a = [4,4,6];
	
	$student= ['alamin', '123', 'CS'];
	
	$student1 = [
					'name'=>'alamin', 
					'id'=>'123', 
					'dept'=>'CS'
				];
	//echo $student1['name'];

/*	$DBserver = [
					['mysql', '127.0.0.1', 'webtech'],
					['mysql', '192.0.0.1', 'javatech'],
					['mysql', '234.44.6.7', 'pytech']
				];*/

	$DBserver = [
					'mysql'=>[
							'user'=>'root', 
							'host'=>'127.0.0.1', 
							'db'=>'webtech'
					],
					'sqlserver'=>[
							'user'=>'root', 
							'host'=>'127.0.0.1', 
							'db'=>'c#tech'
					],
					'pgsqlserver'=>[
							'user'=>'root', 
							'host'=>'', 
							'db'=>''
					]
				];

	//echo $DBserver['sqlserver']['db'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>This is PHP page</h1>
</body>
</html>