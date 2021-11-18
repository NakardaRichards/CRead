<?php
     session_id();

     include '..\Functions\users.php';

     $usersObj = new Users();

     if (isset($_POST['submit1'])) {
          $usersObj->signupData($_POST);
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

          <style type="text/css">
               body{
                    width: 100%;
                    background: url("../img/book.png");
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover;
               }

               /* Additional Styles */
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
          
          <title>CRead | SIGN UP</title>
          <link rel="icon" href="../img/Cread transparent.png">
     </head>
     <body>
        
     	<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
							<h5 style="font-family: Noto Sans;">Welcome to </h5><h4 style="font-family: Noto Sans;text-align:center;">CRead</h4><br>
							<form method="post" action="sign-up.php" enctype="multipart/form-data">
                                        <div class="form-group">
									<label>Enter Your First Name:</label>
									<input type="text" name="fname" class="form-control" required />
								</div>
                                        <div class="form-group">
									<label>Enter Your Last Name:</label>
									<input type="text" name="lname" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Enter Your Email:</label>
									<input type="email" name="email" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Enter Your Password:</label>
									<input type="password" name="pass" class="form-control" required />
                                        </div>
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit1">Register</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Already have an account! </span> <a href="log-in.php">Login </a> Here..
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