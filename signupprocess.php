<?php
include("functions.php");


//SIGN UP PROCESS
if(isset($_POST["sign_up"])){
	
	if(empty($_POST["name"])){
		$name_error = "You can't leave this field empty";
	}else{
		$full_name = validateFormData($_POST["name"]);
		//checking the name format
		if(!preg_match("/^[a-zA-Z ]*$/", $full_name)){
			$name_error = "Use only alphabets and whitespaces";
		}

	}
	
	if(empty($_POST["username"])){
		$username_error = "You can't leave this field empty";
	}else{
		$username = validateFormData($_POST["username"]);
		//i am checking if the username followed our required format
		if(!preg_match("/^[A-Za-z][A-Za-z0-9]*.[A-Za-z0-9]*$/", $username)){
			$username_error = "wrong username format";
			$username_error1 = "Format for username";
			$username_error2 = "only number, aphabet and underscore allowed";
			$username_error3 = "you must start with at least an alphabet";
			$username_error4 = "You must not use underscore at begining or end";
		}
	}
	
	 if(empty($_POST["email"])) {
    	$email_error = "Email is required";
    } else {
		 $email = validateFormData($_POST["email"]);
    	// checking if it is a valid email
    	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      		$email_error = "Invalid email format"; 
    	}
		 
  	}
	
	if(empty($_POST["password"])){
		$password_error = "You can't leave this field empty";
	}else{
		$password = password_hash( validateFormData($_POST['password']), PASSWORD_DEFAULT );
	}
	
	$query1 = "SELECT * FROM team_members WHERE username = '$username'";
	$query2 = "SELECT * FROM team_members WHERE email = '$email'";
	
	$result1 = mysqli_query($conn, $query1);
	$result2 = mysqli_query($conn, $query2);
	
	if(mysqli_num_rows($result1) > 0){
		$username_error = "This username has been taken" ;
		
	}else if(mysqli_num_rows($result2) > 0){
		$email_error = "This email has been taken";
	}
	
	
		if($full_name && $username && $email && $password){
		$query = "INSERT INTO team_members (id, full_name, username, email, password, sign_up_date)
		
				   VALUES (NULL, '$full_name', '$username', '$email', '$password',  CURRENT_TIMESTAMP)";
		
		if(mysqli_query($conn, $query)){
			$success= "Thanks for joining our team";
		}else{
			
		echo "Errror:" . $query . "<br>" .mysqli_error($conn);

		}
	}
	

}



//LOGIN PROCESS
	

 

?>




























































