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

     if (isset($_POST['send-b-2'])) {
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
          <title>CRead - Beginner Test 2</title>

          <link rel="stylesheet" href="../css/tests.css">
     </head>
     <body>
          <!-- 
               Circle the vowels in each of the following letter groups:
               1. A B C (A)
               2. X Y Z (Y)
               3. L O T (O)
               4. S I P (I)
               5. B U S (U)
               Which vowels are in each of the following words?
               6. Cute (u,e)
               7. Monkey (o,e,y)
               8. Apple (a,e)
               9. Giraffe (i,a,e)
               10. Study (u,y)
          -->

          <!-- 
               Find out the vowels for the words
               Make the header and footer and whatever else possible components
               Create tables in database (test-verify.php explains how)
               Modify user table in database
               Finish the other tests
               Redo the array verification in test-verify.php (and diagnostic-verify.php)
          -->
          <section>
               <div class="quiz-div">
                    <h1>Beginner - Test 2 (Part 1)</h1>
               </div>
               <div class="starter">
                    <p>For questions 1 - 5, choose the <span class="highlight">vowel</span> in each of the following letter groups</p>
                    <div class="start" onclick="nextQ('.ques-1')">Start Test</div>
                   <br>
                    <h1>Scroll Down To Continue Test</h1>
               </div>
          </section>
          <section class="quiz ques-1">
               <div class="quiz-div">
                    <span>Question 1</span> 
                    <br> 
                    <p>Choose the vowel in each of the following letter groups:</p>
                    <br>
                    <button class="multiple choice" value="a">A</button>
                    <button class="multiple choice" value="b">B</button>
                    <button class="multiple choice" value="c">C</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-2',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-2','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-2">
               <div class="quiz-div">
                    <span>Question 2</span> 
                    <br> 
                    <p>Choose the vowel in each of the following letter groups:</p>
                    <br>
                    <button class="multiple choice" value="x">X</button>
                    <button class="multiple choice" value="y">Y</button>
                    <button class="multiple choice" value="z">Z</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-3',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-3','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-3">
               <div class="quiz-div">
                    <span>Question 3</span> 
                    <br> 
                    <p>Choose the vowel in each of the following letter groups:</p>
                    <br>
                    <button class="multiple choice" value="l">L</button>
                    <button class="multiple choice" value="o">O</button>
                    <button class="multiple choice" value="t">T</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-4',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-4','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-4">
               <div class="quiz-div">
                    <span>Question 4</span> 
                    <br> 
                    Fill in the blanks in alphabetical order:
                    <br>
                    <button class="multiple choice" value="s">S</button>
                    <button class="multiple choice" value="i">I</button>
                    <button class="multiple choice" value="p">P</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-5', choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-5','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-5">
               <div class="quiz-div">
                    <span>Question 5</span> 
                    <br> 
                    <p>Choose the vowel in each of the following letter groups:</p>
                    <br>
                    <button class="multiple choice" value="b">B</button>
                    <button class="multiple choice" value="u">U</button>
                    <button class="multiple choice" value="s">S</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.mid-point', choice)">Next</button>
                    <div class="skip" onclick="submit('.mid-point','')">Skip</div>
               </div>
          </section>
          <section class="mid-point">
               <div class="quiz-div">
                    <h1>Beginner - Test 2 (Part 2)</h1>
               </div>
               <div class="starter">
                    <p> For questions 6 - 10, choose all the <span class="highlight">vowel(s)</span> in each of the following words</p>
                    <div class="start" onclick="nextQ('.ques-6')">Continue Test</div>

                    <br>
                    <div class="start" > <a href="../tests/beginner-t3.php" style="text-decoration: none;"> Next Test</div>

               </div>
          </section>
          <section class="quiz ques-6">
               <div class="quiz-div">
                    <span>Question 6</span> 
                    <br> 
                    <p>Choose all the vowel(s) in the following word:</p> 
                    <br>
                    <button class="multiple selects" value="c">C</button>
                    <button class="multiple selects" value="u">U</button>
                    <button class="multiple selects" value="t">T</button>
                    <button class="multiple selects" value="e">E</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-7',allChoice)">Next</button>
                    <div class="skip" onclick="submit('.ques-7','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-7">
               <div class="quiz-div">
                    <span>Question 7</span> 
                    <br> 
                    <p>Choose all the vowel(s) in the following word:</p> 
                    <br>
                    <button class="multiple selects" value="m">M</button>
                    <button class="multiple selects" value="o">O</button>
                    <button class="multiple selects" value="n">N</button>
                    <button class="multiple selects" value="k">K</button>
                    <button class="multiple selects" value="e">E</button>
                    <button class="multiple selects" value="y">Y</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-8',allChoice)">Next</button>
                    <div class="skip" onclick="submit('.ques-8','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-8">
               <div class="quiz-div">
                    <span>Question 8</span> 
                    <br> 
                    <p>Choose all the vowel(s) in the following word:</p> 
                    <br>
                    <button class="multiple selects" value="a">A</button>
                    <button class="multiple selects" value="p">P</button>
                    <button class="multiple selects" value="p">P</button>
                    <button class="multiple selects" value="l">L</button>
                    <button class="multiple selects" value="e">E</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-9',allChoice)">Next</button>
                    <div class="skip" onclick="submit('.ques-9','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-9">
               <div class="quiz-div">
                    <span>Question 9</span> 
                    <br> 
                    <p>Choose all the vowel(s) in the following word:</p> 
                    <br>
                    <button class="multiple selects" value="g">G</button>
                    <button class="multiple selects" value="i">I</button>
                    <button class="multiple selects" value="r">R</button>
                    <button class="multiple selects" value="a">A</button>
                    <button class="multiple selects" value="f">F</button>
                    <button class="multiple selects" value="f">F</button>
                    <button class="multiple selects" value="e">E</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-10',allChoice)">Next</button>

                    
                    <div class="skip" onclick="submit('.ques-10','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-10">
               <div class="quiz-div">
                    <span>Question 10</span>
                    <br> 
                    <p>Choose all the vowel(s) in the following word:</p>
                    <br>
                    <button class="multiple selects" value="s">S</button>
                    <button class="multiple selects" value="t">T</button>
                    <button class="multiple selects" value="u">U</button>
                    <button class="multiple selects" value="d">D</button>
                    <button class="multiple selects" value="y">Y</button>
                    <br>
                    <button class="sub-btn" onclick="fSubmit('.send',allChoice)">Next</button>
                    <div class="skip" onclick="fSubmit('.send','')">Skip</div>
               </div>
          </section>
          
          <section class="quiz send">
               <form method="post" action="./beginner-t2.php" class="final-stage">
                    <div class="quiz-div">
                         <h1>You have completed the Beginner Test 2</h1>
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
                         
                    <button class="start" name="send-b-2">Continue</button>
               </form>
          </section>
     </body>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script type="text/javascript" src="../js/main.js"></script>
</html>