<?php
include("signupprocess.php");
?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <title>SignUp</title>
    </head>
    <body>
        <div class="main-wrapper">
            
            <div class="form-wrapper ">
                <!--For that text before the Input fields-->
              
                <!--form and clas for the form-->
                <div class="form-container">
                  <div style="margin:auto; width:80%; background: red;">
               <h6 style="text-align: center"><?php echo $username_error1; ?></h6>
               <p style="font-size:12px;color:white; text-align:center;"><?php echo $username_error2; ?></p>
               <p style="font-size:12px; color:white; text-align:center;"><?php echo $username_error3; ?></p>
               <p style="font-size:12px; color:white; text-align:center;"><?php echo $username_error4; ?></p>
               
				</div>
                  
                   <div class="main-header">
                    <h1 class="team-text">Team X HNGi6</h1>
                    <h3>Join us by signing up</h3>
                </div>
                   <form class="form" action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post">
                        <div class="form-group">
                         	<div style="margin:auto; width:200px;">
                           <small style="color: green; font-size:16px; text-align: center"><strong><?php echo $success; ?></strong></small>
                           </div>
                          	<div style="margin:auto; width:200px;">
                           <small style="color:red; font-size:14px; text-align: center"><?php echo $name_error; ?></small>
                           </div>
                            <div class="input-group">
                                <input name="name" type="text" class="form-control input-default" placeholder="Your Full Name"
                                    aria-label="name" aria-describedby="add-text">
                            </div>
                        </div>
                        <div class="form-group">
                          <div style="margin:auto; width:200px;">
                           <small style="color:red; font-size:14px"><?php echo $email_error; ?></small>
							</div>
                            <div class="input-group">
                                <input name="email" type="text" class="form-control input-default" placeholder="Your Email"
                                    aria-label="email" aria-describedby="add-email">
                            </div>
                        </div>
                        <div class="form-group">
                          <div style="margin:auto; width:200px;">
                           <small style="color:red; font-size:14px"><?php echo $username_error; ?></small>
							</div>
                            <div class="input-group">
                                <input name="username" type="text" class="form-control input-default" placeholder="your Username"
                                    aria-label="username" aria-describedby="add-username" >
                            </div>
                        </div>
                        <div class="form-group">
                          <div style="margin:auto; width:200px;">
                           <small style="color:red; font-size:14px; text-align:center;"><?php echo $password_error; ?></small>
							</div>
                            <div class="input-group">
                                <input name="password" type="password" class="form-control input-default" placeholder="Your Password"
                                    aria-label="password" aria-describedby="add-email" >
                            </div>
                        </div>
                        <button type="submit" class="btn " name="sign_up">Sign Up</button>
                    </form>
                    <div class="login-link">
                    Already have an account? <a href="index.php" class="-">Sign In</a>  
                </div>
                </div>
                
            </div>
        </div>
        

        <script src="assets/bootstrap/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
