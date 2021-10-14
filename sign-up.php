<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="./css/style.css">
          <link rel="stylesheet" href="./css/auth.css">
          
          <title>CRead - Sign-up Page</title>
     </head>
     <body>
          <!-- 
               Need color indications of success/failure on each input field (sign-up/log-in)
               Need js rules on success/failure on each input validation.
               Fix responsiveness
               Add remember me functionality (maybe)
               Add toggle for visibility in password fields (maybe)
          -->
          <section>
               <div class="form-cont">
                    <h2>Sign Up</h2>
                    <form action="./controller/signup.php" method="post">
                         <label name="fname">First Name</label>
                         <input type="text" name="fname" placeholder="ex. John" required> 
                         <div class="continue-btn lname-next">Continue</div>
                         <br>
                         <label name="lname">Last Name</label>
                         <input type="text" name="lname" placeholder="ex. Brown" required>
                         <div class="continue-btn email-next">Continue</div>
                         <br>
                         <label name="email">Email Address</label>
                         <input type="email" name="email" placeholder="ex. jbrown@mail.com" required>
                         <div class="continue-btn pwd-next">Continue</div>
                         <br>
                         <label name="pwd">Password</label>
                         <input type="password" name="pwd" placeholder="Use numbers and letters" required>
                         <div class="continue-btn cpwd-next">Continue</div>
                         <br>
                         <label name="cpwd">Confirm Password</label>
                         <input type="password" name="cpwd" placeholder="Repeat your password" required>
                         <div class="continue-btn signup-next">Continue</div> 
                         <br>
                         <div class="sub-btn" type="submit" name="signup">Sign Up</div>
                    </form>
                    <!-- <a href="./log-in.php">Already have an account?</a> -->
               </div>
               <a href="./get-started.php" class="go-back">&lt;--</a>
          </section>
          <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
          <script type="text/javascript" src="./js/auth.js"></script>
     </body>
</html>