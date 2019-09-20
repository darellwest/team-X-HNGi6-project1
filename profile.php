<?php
session_start();

	// if user is not logged in
if(!$_SESSION['loggedin_user']) {
	//send them back to homepage
	header('Location:index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_SESSION["loggedin_user"]?></title>
</head>
<body>
	<div style="margin:70px auto auto auto; width:300px;">
		<h3 style="color: green; ">
		<?php echo "welcome ".$_SESSION["loggedin_user"]." Thanks for joining us, we will be improving this platform soon..." ;
		?>
</h3>
		
	</div>
</body>
</html>