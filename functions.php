<?php
session_start();

	$server		 = 'localhost';
	$user		 = 'root';
	$password	 = 'root';
	$db			 = 'team_x_hngi6';

	$conn		 = mysqli_connect($server, $user, $password, $db);

	if(!$conn){
		die("connection to this database failed: " .mysqli_connect_error());
	}

	echo "we connected successfully";



	function validateFormData($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	$data = strip_tags($data);
	
	return $data;
}

?>