<?php
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
    <title>Retrieve Password</title>
    </head>
    <body>
        <div class="main-wrapper">
            
            <div class="form-wrapper ">
                <!--For that text before the Input fields-->
               
                <!--form and clas for the form-->
                <div class="form-container">
                   <div class="main-header">
                    <h1 class="team-text">Team X HNGi6</h1>
                    <h3>Get a new password</h3>
                    <p style="text-align:center">Fill in your email below, If it exists in our database, we'll send you a password reset link</p>
                </div>
                   <form class="form" action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post">
                        
                     
                        <div class="form-group">
                           <small style="color:red; font-size:14px; text-align:center;"><?php echo $password_error; ?></small>
                            <div class="input-group">
                                <input name="reset_email" type="email" class="form-control input-default" placeholder="Your email"
                                    aria-label="email" aria-describedby="add-email" >
                            </div>
                        </div>
                        <button type="submit" class="btn " name="reset">SUBMIT</button>
                    </form>
  
                </div>
                
            </div>
        </div>
        

        <script src="assets/bootstrap/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
