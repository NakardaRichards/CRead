<?php
     // session_id();

     // include './functions/users.php';

     // $usersObj = new Users();

     // if (isset($_POST['submit'])) {
     //      $usersObj->loginData($_POST);
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

          <title>CRead - Log-in Page</title>
     </head>
     <body>
          <section>
               <div class="form-cont">
                    <h2>Log In</h2>
                    <form action="./functions/users.php" method="post">
                         <label name="email">Email Address</label>
                         <input type="email" name="email" placeholder="ex. jbrown@mail.com" required>
                         <br>
                         <label name="pwd">Password</label>
                         <input type="password" name="pass" placeholder="Use numbers and letters" required>
                         <br>
                         <button class="sub-btn" type="submit" name="login">Log In</button>
                    </form>
                    <a href="./sign-up.php" class="switch-auth">You do not have an account?</a>
               </div>
               <a href="./get-started.php" class="go-back">&lt;--</a>
          </section>
          <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
          <script src="./js/auth.js"></script>
     </body>
</html>