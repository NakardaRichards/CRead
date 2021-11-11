<?php
     session_id();

     include 'C:\xampp\htdocs\FieldGroupProject\Functions\users.php';

     $usersObj = new Users();

     if (isset($_POST['submit'])) {
          $usersObj->loginData($_POST);
     }
?>
<!DOCTYPE html>
<html lang="en">
     <head>
          
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <!--Fonts-->
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,100&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css2?family=Euphoria+Script&display=swap" rel="stylesheet">
          
          <link rel="stylesheet" href="../scripts/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="../scripts/ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="../css/form.css">
    
          <link rel="stylesheet" href="style.css">
        
          

          <title>CRead | LOGIN</title>
          <link rel="icon" href="transparent logo hd.png">

          <!--Additional Styles-->
          <style>
               body {
                    background: url("../img/bg1.png") !important;
               }

               h2 {
                    font-family: 'Euphoria Script', cursive;
                    font-size: 70px;
               }

               input{
                    font-family: 'Montserrat', sans-serif;
                    font-size: normal;
               }
               
          </style>

     </head>
     <body>
          <!-- Login  Form -->
          <section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
                              <a href="../Pages/Homepage.html">
                               <img src="../img/Cread transparent.png" alt="CRead Logo" width="30%" height="30%" style="margin:20px;">
                              </a> 
                               <br>
							<form method="post" action="log-in.php" enctype="multipart/form-data">
								<div class="form-group">
									<label>Enter Your Email:</label>
									<input type="email" name="email" class="form-control">
								</div>
								<div class="form-group">
									<label class="fw">Enter Your Password:
										
									</label>
									<input type="password" name="pass" class="form-control">
								</div> 
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit">Login</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Don't have an account?</span> <a href="sign-up.php">Register</a> Here..
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script src="js/jquery.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
     </body>
</html>