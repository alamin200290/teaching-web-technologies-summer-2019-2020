<?php

	if(isset($_POST['submit'])){

		//print_r($_FILES['myfile']);

		//$filedir = 'upload/'.$_FILES['myfile']['name'];
		$filedir = 'upload/'.time().'.pdf';

		if(move_uploaded_file($_FILES['myfile']['tmp_name'], $filedir)){
			echo "Done";
		}else{
			echo "error";
		}
	}

?>