<?php
     session_id();

     include '../functions/tests-verify.php';
     include '../functions/users.php';

     $tests = new tests();
     $usersObj = new Users();

     // if (!isset($_SESSION['id']) || $_SESSION['id'] != true) {
     //      header("location: ../Pages/Homepage.html");
     //      exit;
     // }

     if (isset($_POST['send-b-1'])) {
          $score = $tests->test();
          // $usersObj->diagTestStatus($score);
          // $diagnose -> chooseLesson($score);
     }
?>
<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>CRead - Beginner Test 1</title>

          <link rel="stylesheet" href="../css/tests.css">
     </head>
     <body>
          <!-- Fill in the blanks!
               1. A ____ C (b)
               2. ____ P Q (o)
               3. W X ___ (y)
               4. M ___ O (n)
               5. H I ____ (j)
               6. ____ Y Z (x)
               7. E ____ G (f)
               8. T U ____ (v)
               9. ___ M N (l)
               10. C ____ E (d)
          -->
          <section>
               <div class="quiz-div">
                    <h1>Beginner - Test 1</h1>
               </div>
               <div class="starter">
                    <p>Fill in the blanks in <span class="highlight">alphabetical order</span> for all 10 questions.</p>
                    <div class="start" onclick="nextQ('.ques-1')">Start Test</div>
                    <br>
                    <div class="start" > <a href="../tests/beginner-t2.php" style="text-decoration: none;"> Next Test</div>

               </div>
          </section>
          <section class="quiz ques-1">
               <div class="quiz-div">
                    <span>Question 1</span> 
                    <br> 
                    Fill in the blanks in alphabetical order:
                    <br>
                    <label>A</label> <input id="q1" type="text"> <label>C</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-2',$('#q1').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-2','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-2">
               <div class="quiz-div">
                    <span>Question 2</span> 
                    <br> 
                    Fill in the blanks in alphabetical order:
                    <br>
                    <input id="q2" type="text"> <label>P</label> <label>Q</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-3',$('#q2').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-3','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-3">
               <div class="quiz-div">
                    <span>Question 3</span> 
                    <br> 
                    Fill in the blanks in alphabetical order:
                    <br>
                    <label>W</label> <label>X</label> <input id="q3" type="text">
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-4',$('#q3').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-4','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-4">
               <div class="quiz-div">
                    <span>Question 4</span> 
                    <br> 
                    Fill in the blanks in alphabetical order:
                    <br>
                    <label>M</label> <input id="q4" type="text"> <label>O</label> 
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-5',$('#q4').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-5','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-5">
               <div class="quiz-div">
                    <span>Question 5</span> 
                    <br> 
                    Fill in the blanks in alphabetical order:
                    <br>
                    <label>H</label> <label>I</label> <input id="q5" type="text">
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-6',$('#q5').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-6','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-6">
               <div class="quiz-div">
                    <span>Question 6</span> 
                    <br> 
                    Fill in the blanks in alphabetical order:
                    <br>
                    <input id="q6" type="text"> <label>Y</label> <label>Z</label> 
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-7',$('#q6').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-7','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-7">
               <div class="quiz-div">
                    <span>Question 7</span> 
                    <br> 
                    Fill in the blanks in alphabetical order:
                    <br>
                    <label>E</label> <input id="q7" type="text"> <label>G</label> 
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-8',$('#q7').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-8','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-8">
               <div class="quiz-div">
                    <span>Question 8</span> 
                    <br> 
                    Fill in the blanks in alphabetical order:
                    <br>
                    <label>T</label> <label>U</label> <input id="q8" type="text">
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-9',$('#q8').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-9','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-9">
               <div class="quiz-div">
                    <span>Question 9</span> 
                    <br> 
                    Fill in the blanks in alphabetical order:
                    <br>
                    <input id="q9" type="text"> <label>M</label> <label>N</label> 
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-10',$('#q9').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-10','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-10">
               <div class="quiz-div">
                    <span>Question 10</span>
                    <br> 
                    Fill in the blanks in alphabetical order:
                    <br>
                    <label>C</label> <input id="q10" type="text"> <label>E</label> 
                    <br>
                    <button class="sub-btn" onclick="fSubmit('.send',$('#q10').val())">Next</button>
                    <div class="skip" onclick="fSubmit('.send','')">Skip</div>
               </div>
          </section>
          <section class="quiz send">
               <form method="post" action="./beginner-t1.php" class="final-stage">
                    <div class="quiz-div">
                         <h1>You have completed the Beginner Test 1</h1>
                         <p>Click continue to go to the main page</p>
                    </div>
                    <div>
                         <label for="">Question 1</label><input type="text" name="q1" >
                         <label for="">Question 2</label><input type="text" name="q2">
                    </div>
                    <div>
                         <label for="">Question 3</label><input type="text" name="q3">
                         <label for="">Question 4</label><input type="text" name="q4">
                    </div>
                    <div>
                         <label for="">Question 5</label><input type="text" name="q5">
                         <label for="">Question 6</label><input type="text" name="q6">
                    </div>
                    <div>
                         <label for="">Question 7</label><input type="text" name="q7">
                         <label for="">Question 8</label><input type="text" name="q8">
                    </div>
                    <div>
                         <label for="">Question 9</label><input type="text" name="q9">
                         <label for="">Question 10</label><input type="text" name="q10">
                    </div>
                         
                    <button class="start" name="send-b-1">Continue</button>
               </form>
          </section>
     </body>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script type="text/javascript" src="../js/main.js"></script>
</html>