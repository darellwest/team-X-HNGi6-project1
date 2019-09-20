<?php
include("functions.php");

if(isset($_POST["reset"])){
	
	if(empty($_POST["reset_email"])){
		$reset_email_error = "email required";
	}else{
		$email = validateFormData($_POST["reset_email"]);
	}
	
	if($emil){
		
	$sql1 = "SELECT * FROM team_members WHERE email = '$email'";
	
	$result = mysqli_query($conn, $sql1);

	if(mysqli_num_rows($restult) > 0){
		$token = mytoken();
		
$sql2 = "UPDATE team_members SET token = '$token', token_expire= DATE_ADD(NOW(), INTERVAL 5 MINUTE)
WHERE email = '$mail'";
		
		$result2 = mysqli_query($conn, $sql2);
		
		if($rsult2){
			echo "we created a token";
		}
		
	}
 
  }
	
	
}


















?>