<?php
include("signupprocess.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Signinpage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="Box">
            <div class="user content">
                <!--For thet text before the Input fields-->
                <div class="top text">
                    <span>Team X HNGi6</span><br>
                    <span>Join us by signing up</span>
                </div>
			</div>
                <!--div and clas for the form-->
                <div class="fill Box">
          <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post">
          
          		<small class="text-danger">*<?php echo $nameError; ?></small><br>
		  		<input type="text" placeholder="Your name" name="name"><br>
		  
				<small class="text-danger">*<?php echo $nameError; ?></small><br>
		  		<input type="text" placeholder="username" name="username"><br>
				
				<small class="text-danger">* <?php echo $emailError; ?></small><br>
				<input type="text" placeholder="Email" name="email"><br>
				
				<small class="text-danger">* <?php echo $passwordError; ?></small><br>
				<input type="password" placeholder="password" name="password"><br> 
				
				<input type="submit" name="sign_up"  value="sign_up">
				
		 </form>
            </div>
            
        </div>
    </body>
</html>
