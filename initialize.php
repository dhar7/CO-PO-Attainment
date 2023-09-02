<?php
    
	session_start();
	
	$name = $_POST['firstName'];
	$code = $_POST['lastName'];
	$batch = $_POST['batch'];
	//$email = $_POST['email'];
	//$containsDesiredValue = false;
	//$containsDesiredValue2 = false;
	$_SESSION['code'] = $code;
	$_SESSION['batch'] = $batch;

	header("Location: ini3.html");
	

?>

	


	





