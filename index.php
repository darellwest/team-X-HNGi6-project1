<?php 
$username_email =
include("loginprocess.php");
?>


<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Loginpage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  />
    <script src="js/jquery-1.11.1.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <br>
    <style type="text/css">
        body {
            height: 100%;
            background-image: url("https://res.cloudinary.com/dsvldd9an/image/upload/v1568702234/Business02_aakki7.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .form-control {
            box-shadow: none;
            border-color: #ddd;
            border-radius: 20px;
            font-size: 12px;
            background: #FFFFFF;
            border-radius: 10px;
        }
        .form-control:focus {
            border-color: #04248b;
        }
        .form-control, .btn {        
            border-radius: 4px;
        }
        .container {
            width: 350px;
            margin: 0 auto;
            padding: 20px 0;		
        }
        .container form {
        color: #434343;
    	margin-bottom: 5px;
		border: 1px solid #f3f3f3;
        padding: 20px;
        background: #DDDDDD;
        box-shadow: 2px 4px 20px rgba(71, 7, 251, 0.93);
        border-radius: 15px;	
        }
        .container h4 {
        margin-bottom: 20px;
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 42px;
        display: flex;
        align-items: center;
        text-align: center;
        margin: 0 90px 0px;
        letter-spacing: 0.02em;
        color: #EE5906;
    }
        .container h3 {
        margin-bottom: 10px;
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 42px;
        display: flex;
        align-items: center;
        text-align: center;
        margin: 0 65px 0px;
        letter-spacing: 0.1em;
        color: #000000;
        }
        .container .profilepic_container img{
        color: #fff;
		margin: 0 100px 5px;
        text-align: center;
		width: 100px;
		height: 100px;
		border-radius: 50%;
		z-index: 9;
        }
        .container .form_container {
        margin-bottom: 20px;
        }
        .container .form-control, .container .btn {
		    min-height: 40px;
		    border-radius: 10px; 
            transition: all 0.5s; 
        }
        .container .close {
            position: absolute;
		    top: 15px;
		    right: 15px;
	    }
        .container .btn {
        font-size: 18px;
        font-weight: bold;
		line-height: normal;
        background: #121793;
        border-radius: 24px;
	}
        .container .btn:hover, .container .btn:focus {
            background: #42ae68;
        }
        .container .checkbox-inline {
        float: left;
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        line-height: normal;
        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: 0.1em;
        color: #EE5906;
    }
        .container input[type="checkbox"] {
        background: #C4C4C4;
    }
        .container .forgot-link {
        float: right;
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        line-height: normal;
        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: 0.1em;
        color: #EE5906;
    }    
        .container .footer {
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: normal;
        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: 0.1em;
        margin: 0 40px 0px;
        color: #000000;
    }
        .container .bottom_signup {
            color: #0000ff;
        }
        
    </style>    
</head>
	<body>    
	<div class="container">
        <!--took out div form for content-for-user and started with form-->
             <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post">
 <!--This is for the avatar node-->
                    <div class="profilepic_container"><img src="https://res.cloudinary.com/dsvldd9an/image/upload/v1568731147/avating_meyd6h.png"> </img></div>
                    <!--span changed to h4-->
                    <h4 class="modal-title">Team X HNGi6</h4>
                    <h3 class="modal-title">Sign in to Continue</h3>

                    <div class="form_container input-field1">
                       	<small style="color:red; font-size:14px"><?php echo $username_email_error?></small>
                        <input name="username_email"type="text" class="form-control input_user"  placeholder="Your Username or email" >
                    </div>
    
                    <div class="form_container input-field2">
                       <small style="color:red; font-size:14px"><?php echo $password_error?></small>
                        <input name="password" type="password" class="form-control input_pass" minlength="5" placeholder="Your password">
                    </div>
                    <div class="signin_button">
                    <button type="submit" name="login" class="btn btn-primary btn-block btn-lg">SIGN IN</button>
                    </div> <br>
                    <!--This is a group in the form for the remember me and the check box-->
                    <div class="form-group small clearfix">
                        <label class="checkbox-inline"><input type="checkbox" id="rememberme_check"> Remember me</label>
                        <a href="forgotpassword.php" class="forgot-link">Forgot Password?</a>
                    </div> 
                    
                    <div class="text-center small footer">Don't have an account? <a href="signup.php" class="bottom_signup">Sign up</a></div>
                    
	
</form>
	</div>
	</body>
	</html>

