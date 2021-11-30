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

     if (isset($_POST['send-b-3'])) {
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
          <title>CRead - Beginner Test 3</title>

          <link rel="stylesheet" href="../css/tests.css">
     </head>
     <body>
          <!-- 
               Choose a letter from the brackets to make each word:
               1. B ___ y (t, l, o) - [o]
               2. ___s (I, O, E) - [i]
               3. Ca___ (r, u, i) - [r]
               4. Hop__ (p, v, e) - [e]
               5. S___ip (h, q, z) - [h]
               6. Th__nk (x, d, i) - [i]
               7. __hip (T, R, C) - [c]
               8. Hi__e (o, y, d) - [d]
               9. Di__e (w, m, q) - [m]
               10. __t (U, A, P) - [a]
          -->
          <section>
               <div class="quiz-div">
                    <h1>Beginner - Test 3</h1>
               </div>
               <div class="starter">
                    <p>Choose a suitable letter to complete each word:</p>
                    <div class="start" onclick="nextQ('.ques-1')">Start Test</div>
                    <br>
                    <div class="start" > <a href="../dashboard/Dashboard.php" style="text-decoration: none;">Home</div>
               </div>
          </section>
          <section class="quiz ques-1">
               <div class="quiz-div">
                    <span>Question 1</span> 
                    <br> 
                    <p>Choose a suitable letter to complete each word:</p>
                    <br>
                    <label>B</label>
                    <select id="q1">
                         <option aria-placeholder="Select Option"></option>
                         <option value="t">T</option>
                         <option value="l">L</option>
                         <option value="o">O</option>
                    </select>
                    <label>Y</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-2',$('#q1').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-2','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-2">
               <div class="quiz-div">
                    <span>Question 2</span> 
                    <br> 
                    <p>Choose a suitable letter to complete each word:</p>
                    <br>
                    <select id="q2">
                         <option aria-placeholder="Select Option"></option>
                         <option value="i">I</option>
                         <option value="e">E</option>
                         <option value="o">O</option>
                    </select>
                    <label>S</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-3',$('#q2').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-3','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-3">
               <div class="quiz-div">
                    <span>Question 3</span> 
                    <br> 
                    <p>Choose a suitable letter to complete each word:</p>
                    <br>
                    <label>C</label> <label>A</label>
                    <select id="q3">
                         <option aria-placeholder="Select Option"></option>
                         <option value="u">U</option>
                         <option value="r">R</option>
                         <option value="i">I</option>
                    </select>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-4',$('#q3').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-4','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-4">
               <div class="quiz-div">
                    <span>Question 4</span> 
                    <br> 
                    <p>Choose a suitable letter to complete each word:</p>
                    <br>
                    <label>H</label> <label>O</label> <label>P</label>
                    <select id="q4">
                         <option aria-placeholder="Select Option"></option>
                         <option value="p">P</option>
                         <option value="e">E</option>
                         <option value="v">V</option>
                    </select>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-5',$('#q4').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-5','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-5">
               <div class="quiz-div">
                    <span>Question 5</span> 
                    <br> 
                    <p>Choose a suitable letter to complete each word:</p>
                    <br>
                    <label>S</label> 
                    <select id="q5">
                         <option aria-placeholder="Select Option"></option>
                         <option value="q">Q</option>
                         <option value="z">Z</option>
                         <option value="h">H</option>
                    </select>
                    <label>I</label> <label>P</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-6',$('#q5').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-6','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-6">
               <div class="quiz-div">
                    <span>Question 6</span> 
                    <br> 
                    <p>Choose a suitable letter to complete each word:</p>
                    <br>
                    <label>T</label> <label>H</label> 
                    <select id="q6">
                         <option aria-placeholder="Select Option"></option>
                         <option value="x">X</option>
                         <option value="d">D</option>
                         <option value="i">I</option>
                    </select>
                    <label>N</label> 
                    <label>K</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-7',$('#q6').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-7','')">Skip</div>
               </div>
          </section>


          <section class="quiz ques-7">
               <div class="quiz-div">
                    <span>Question 7</span> 
                    <br> 
                    <p>Choose a suitable letter to complete each word:</p>
                    <br>
                    <select id="q7">
                         <option aria-placeholder="Select Option"></option>
                         <option value="r">R</option>
                         <option value="c">C</option>
                         <option value="t">T</option>
                    </select>
                    <label>H</label> <label>I</label> <label>P</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-8',$('#q7').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-8','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-8">
               <div class="quiz-div">
                    <span>Question 8</span> 
                    <br> 
                    <p>Choose a suitable letter to complete each word:</p>
                    <br>
                    <label>H</label> <label>I</label> 
                    <select id="q8">
                         <option aria-placeholder="Select Option"></option>
                         <option value="d">D</option>
                         <option value="y">Y</option>
                         <option value="o">O</option>
                    </select>
                    <label>E</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-9',$('#q8').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-9','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-9">
               <div class="quiz-div">
                    <span>Question 9</span> 
                    <br> 
                    <p>Choose a suitable letter to complete each word:</p>
                    <br>
                    <label>D</label> <label>I</label> 
                    <select id="q9">
                         <option aria-placeholder="Select Option"></option>
                         <option value="q">Q</option>
                         <option value="m">M</option>
                         <option value="w">W</option>
                    </select>
                    <label>E</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-10',$('#q9').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-10','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-10">
               <div class="quiz-div">
                    <span>Question 10</span> 
                    <br> 
                    <p>Choose a suitable letter to complete each word:</p>
                    <br>
                    <select id="q10">
                         <option aria-placeholder="Select Option"></option>
                         <option value="a">A</option>
                         <option value="u">U</option>
                         <option value="p">P</option>
                    </select>
                    <label>T</label>
                    <br>
                    <button class="sub-btn" onclick="fSubmit('.send',$('#q10').val())">Next</button>
                    <div class="skip" onclick="fSubmit('.send','')">Skip</div>
               </div>
          </section>
          <section class="quiz send">
               <form method="post" action="./test-feedback.php" class="final-stage">
                    <div class="quiz-div">
                         <h1>You have completed the Beginner Test 3</h1>
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
                         
                    <button class="start" name="send-b-3">Continue</button>
               </form>
          </section>
     </body>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script type="text/javascript" src="../js/main.js"></script>
</html>