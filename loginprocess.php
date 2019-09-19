<?php 


include("functions.php");

if(isset($_POST["login"])){
	
	
	if(empty($_POST["username_email"])){
		$username_email_error = "username or email required";
	}else{
		$username_email = validateFormData($_POST["username_email"]);
	}
	
	if(empty($_POST["password"])){
		$password_error = "password required";
	}else{
		$password = validateFormData($_POST["password"]);
	}
	
	
	$query = "SELECT * FROM team_members WHERE username = '$username_email' || email = '$username_email'";
	//$query2 = "SELECT * FROM team_members WHERE email = '$email'";
	
	$result = mysqli_query($conn, $query);
	//$result2 = mysqli_query($conn, $query2);
	
	if(mysqli_num_rows($result) > 0){
		while($rows = mysqli_fetch_assoc($result) ){
			$user			= $rows['username'];
			$form_email		= $rows['email'];
			$hashedPass		= $rows['password'];	
			$full_name		= $rows['full_name'];	
		}
		
		if(password_verify($password, $hashedPass)){
			session_start();
			$_SESSION["loggedin_user"] = $user;
			$_SESSION["loggedin_email"] = $form_email;
			$_SESSION["loggedin_full_name"] = $full_name;
			
			echo "loging verified";
			header("Location: profile.php");
		}else{
			$password_error = "wrong password";
		}
		
	}else{
		$username_email_error = "wrong username/email";
	}
	
}


?>