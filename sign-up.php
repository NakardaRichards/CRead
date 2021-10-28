<?php
     // session_id();

     // include './functions/users.php';

     // $usersObj = new Users();

     // if (isset($_POST['submit1'])) {
     //      $usersObj->signupData($_POST);
     // }
?>

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
               Add 'remember me' functionality (maybe)
               JS to toggle visibility in password fields (maybe)
          -->
          <section>
               <!-- <nav>
                    <a href="#" class="main-nav">Getting started</a>
               </nav> -->
               <div class="form-cont">
                    <h2>Sign Up</h2>
                    <form action="./functions/users.php" method="post">
                         <label name="fname">First Name</label>
                         <input type="text" name="fname" placeholder="ex. John" required>
                         <br>
                         <label name="lname">Last Name</label>
                         <input type="text" name="lname" placeholder="ex. Brown" required>
                         <br>
                         <label name="email">Email Address</label>
                         <input type="email" name="email" placeholder="ex. jbrown@mail.com" required>
                         <br>
                         <label name="pwd">Password</label>
                         <input type="password" name="pass" placeholder="Use numbers and letters" required>
                         <br>
                         <label name="cpwd">Confirm Password</label>
                         <input type="password" name="cpass" placeholder="Repeat your password" required>
                         <br>
                         <button class="sub-btn" type="submit" name="signup">Sign Up</button>
                    </form>
                    <a href="./log-in.php" class="switch-auth">Already have an account?</a>
               </div>
               <a href="./get-started.php" class="go-back">&lt;--</a>
          </section>
          <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
          <script type="text/javascript" src="./js/auth.js"></script>
     </body>
</html>