<?php
	
	print_r($_GET);
	//echo $_GET['id'];
	
	//print_r($_SERVER);	

	//phpinfo();

	//$a = 'alamin';
	//$b = 12;
	//$c = '3';
	//echo $a." ".$b;

	//$a = array(2,5,'alamin',9,'CS');
	$b = [2,5,'alamin',9,'CS'];
	//echo $b[3];

	/*$student = [ 
					['alamin','CS','12'], 
					['XYZ','CSE','13'], 
					['PQR','CIS','14'], 
					['ABC','SE','125'] 
				];*/

	//echo  $student[3][2];

	//$student = ['alamin','CS','12']
	$student = ['name'=>'alamin', 'dept'=>'cs', 'id'=>'12'];

	//echo $student['id'];

	/*$student = [ 
					['name'=>'alamin', 'dept'=>'cs', 'id'=>'12'], 
					['name'=>'XYZ', 'dept'=>'cse', 'id'=>'32'], 
					['name'=>'pqr', 'dept'=>'cis', 'id'=>'15'], 
					['name'=>'abc', 'dept'=>'se', 'id'=>'16'] 
				];*/

	/*$student = [ 
				's1' =>	['name'=>'alamin', 'dept'=>'cs', 'id'=>'12'], 
				's2' =>	['name'=>'XYZ', 'dept'=>'cse', 'id'=>'32'], 
				's3' =>	['name'=>'pqr', 'dept'=>'cis', 'id'=>'15'], 
				's4' =>	['name'=>'abc', 'dept'=>'se', 'id'=>'16'] 
				];*/

	//echo $student['s3']['name']; 

	//print "Welcome to PHP...";
	//echo "Hello from PHP";
	//print('xyz');

	/*function sum($a=0, $b=0){

		return $a+$b;
	}*/

	//echo sum();

/*	$sum = function($a=0, $b=0){
		return $a+$b;
	}*/
	//print $sum;

/*if(){

}else{

}

foreach ($variable as $key => $value) {
	# code...
}

for ($i=0; $i < ; $i++) { 
	# code...
}*/

$a = "";

/*if($a == ""){
	echo "<h1>Not found!</h1>";
}else{
	echo "<h1>".$a."</h1>";
}*/


/*$a = print('test');

if(print('test')){

}

echo "<br><h1>".$a."</h1>";*/


/*$x = 20;
$y = 20;

function sum(){
	
	//global $x;
	//global $y;

	return $GLOBALS['x']+$GLOBALS['y'];
}*/



//echo sum();

?>

<!-- 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<h2>This is <?php   echo "PHP";  ?> content</h2>
</body>
</html> -->