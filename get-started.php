<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="./css/style.css">
          <link rel="stylesheet" href="./css/start.css">

          <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->

          <title>CLearn | User Authentication Page</title>
     </head>
     <body>
          <section>
               <div class="join-cont">
                    <div class="join-us">
                         <h1>What we do</h1>
                    </div>
                    Interested?
               </div>
               <div class="circle-cont">
                    <a href="#join-sect" class="circle">D</a>
               </div>
          </section>
          <section id="join-sect">
               <div class="join-cont">
                    <div class="join-us">
                         <h1>Why You Should Join Us</h1>
                    </div>
                    Are You Ready to Join Us?
               </div>
               <div class="circle-cont">
                    <a href="#choice-sect" class="circle">D</a>
               </div>
          </section>
          <section id="choice-sect">
               <div>
                    <h2>Are You New Here?</h2>
               </div>
               <div>
                    <a href="./sign-up.php" class="yes">Yes</a>
                    <a href="./log-in.php" class="no">No</a>
               </div>
               
          </section>

          
          <!-- May or may not use here -->
          <?php
               // if(isset($_GET["error"])){
               //      if($_GET["error"]=="email"){
               //           echo"<script>
               //                     $(document).ready(function(){
               //                          alert('Email address is not valid');
               //                     });
               //                </script>";
               //      }
               //      elseif($_GET["error"]=="confirm"){
               //           echo"<script>
               //                     $(document).ready(function(){
               //                          alert('The passwords don\'t match');
               //                     });
               //                </script>";
               //      }
               //      elseif($_GET["error"]=="emailexists"){
               //           echo"<script>
               //                     $(document).ready(function(){
               //                          alert('This email already exists');
               //                     });
               //                </script>";
               //      }
               //      elseif($_GET["error"]=="statementerror"){
               //           echo"<script>
               //                     $(document).ready(function(){
               //                          alert('There was trouble submitting this form. Please try another input or contact the page admins.');
               //                     });
               //                </script>";
               //      }
               //      elseif($_GET["error"]=="login"){
               //           echo"<script>
               //                     $(document).ready(function(){
               //                          alert('This login was unsuccessful.');
               //                     });
               //                </script>";
               //      }
               // }
          ?>
     </body>
     
</html>