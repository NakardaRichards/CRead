<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="./css/style.css">
          <link rel="stylesheet" href="./css/auth.css">
          <style>
               input[name="email"]{
                    display: inline;
               }
               label[name="email"]{
                    display: block;
               }
               .pwd-next{
                    display: inline;
               }
          </style>
          <title>CRead - Log-in Page</title>
     </head>
     <body>
          <section>
               <div class="form-cont">
                    <h2>Log In</h2>
                    <form action="./controller/login.php" method="post">
                         <label name="email">Email Address</label>
                         <input type="email" name="email" placeholder="ex. jbrown@mail.com" required>
                         <div class="continue-btn pwd-next">Continue</div>
                         <br>
                         <label name="pwd">Password</label>
                         <input type="password" name="pwd" placeholder="Use numbers and letters" required>
                         <div class="continue-btn login-next">Continue</div>
                         <br>
                         <div class="sub-btn" type="submit" name="login">Log In</div>
                    </form>
               </div>
               <a href="./get-started.php" class="go-back">&lt;--</a>
          </section>
          <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
          <script>
               $(".pwd-next").click(function(){
                    // Check if input is valid

                    $( ".login-next" ).css('display','inline');
               });
          </script>
          <script src="./js/auth.js"></script>
     </body>
</html>