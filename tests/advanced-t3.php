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

     if (isset($_POST['send-a-3'])) {
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
          <title>CRead - Advanced Test 3</title>

          <link rel="stylesheet" href="../css/tests.css">
     </head>
     <body>
          <!-- 
               Are the following contractions correct?
               1. Sammy doesn’t know how to play the piano. (Yes/ No)
               2. Tamara ca’nt go out on the weekend. (Yes/ No)
               3. Im’ having so much fun! (Yes/ No)
               4. Reading isn’t hard. (Yes/ No)
               5. Alyssa and Lisa do’nt live in the same neighbourhood. (Yes/ No)
               What is the full form of the following abbreviations?
               6. Mon. (Monkey, Monday, Money)
               7. ft. (FaceTime, Fright, Feet)
               8. cm. (Cream, Centimetres, Call Me)
               9. Min. (Minute, Minty, Minor)
               10. P.S. (Post Script, Poster, Please Stop)
          -->
          <section>
               <div class="quiz-div">
                    <h1>Advanced - Test 1 (Part 1)</h1>
               </div>
               <div class="starter">
                    <p>For questions 1 - 5, tell if the <span class="highlight">highlighted contraction</span> is done correctly.</p>
                    <div class="start" onclick="nextQ('.ques-1')">Start Test</div>
               </div>
          </section>
          <section class="quiz ques-1">
               <div class="quiz-div">
                    <span>Question 1</span> 
                    <br> 
                    <p>Is the highlighted contraction correct? <br> Sammy <span class="highlight">doesn’t</span> know how to play the piano.</p>
                    <br>
                    <button class="multiple choice" value="yes">Yes</button>
                    <button class="multiple choice" value="no">No</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-2',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-2','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-2">
               <div class="quiz-div">
                    <span>Question 2</span> 
                    <br> 
                    <p>Is the highlighted contraction correct? <br> Tamara <span class="highlight">ca'nt</span> go out on the weekend.</p>
                    <br>
                    <button class="multiple choice" value="yes">Yes</button>
                    <button class="multiple choice" value="no">No</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-3',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-3','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-3">
               <div class="quiz-div">
                    <span>Question 3</span> 
                    <br> 
                    <p>Is the highlighted contraction correct? <br> <span class="highlight">Im'</span> having so much fun!</p>
                    <br>
                    <button class="multiple choice" value="yes">Yes</button>
                    <button class="multiple choice" value="no">No</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-4',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-4','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-4">
               <div class="quiz-div">
                    <span>Question 4</span> 
                    <br> 
                    <p>Is the highlighted contraction correct? <br> Reading <span class="highlight">Isn’t</span> hard.</p>
                    <br>
                    <button class="multiple choice" value="yes">Yes</button>
                    <button class="multiple choice" value="no">No</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-5',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-5','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-5">
               <div class="quiz-div">
                    <span>Question 5</span> 
                    <br> 
                    <p>Is the highlighted contraction correct? <br> Alyssa and Lisa <span class="highlight">do’nt</span> live in the same neighbourhood.</p>
                    <br>
                    <button class="multiple choice" value="yes">Yes</button>
                    <button class="multiple choice" value="no">No</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.mid-point',choice)">Next</button>
                    <div class="skip" onclick="submit('.mid-point','')">Skip</div>
               </div>
          </section>
          <section class="mid-point">
               <div class="quiz-div">
                    <h1>Advanced - Test 3 (Part 2)</h1>
               </div>
               <div class="starter">
                    <p>What is the full form of the following abbreviations?</p>
                    <div class="start" onclick="nextQ('.ques-6')">Continue Test</div>
               </div>
          </section>
          <section class="quiz ques-6">
               <div class="quiz-div">
                    <span>Question 6</span> 
                    <br>
                    <p>What is the full form of the abbreviation: <i>'Mon.'</i>?</p>
                    <br>
                    <button class="multiple choice" value="monkey">Monkey</button>
                    <button class="multiple choice" value="monday">Monday</button>
                    <button class="multiple choice" value="money">Money</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-7',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-7','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-7">
               <div class="quiz-div">
                    <span>Question 7</span> 
                    <br> 
                    <p>What is the full form of the abbreviation: <i>'ft.'</i>?</p>
                    <br>
                    <button class="multiple choice" value="facetime">FaceTime</button>
                    <button class="multiple choice" value="fright">Fright</button>
                    <button class="multiple choice" value="feet">Feet</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-8',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-8','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-8">
               <div class="quiz-div">
                    <span>Question 8</span> 
                    <br> 
                    <p>What is the full form of the abbreviation: <i>'cm.'</i>?</p>
                    <br>
                    <button class="multiple choice" value="cream">Cream</button>
                    <button class="multiple choice" value="centimetres">Centimetres</button>
                    <button class="multiple choice" value="callme">Call Me</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-9',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-9','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-9">
               <div class="quiz-div">
                    <span>Question 9</span> 
                    <br> 
                    <p>What is the full form of the abbreviation: <i>'min.'</i>?</p>
                    <br>
                    <button class="multiple choice" value="minute">Minute</button>
                    <button class="multiple choice" value="minty">Minty</button>
                    <button class="multiple choice" value="minor">Minor</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-10',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-10','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-10">
               <div class="quiz-div">
                    <span>Question 10</span>
                    <br> 
                    <p>What is the full form of the abbreviation: <i>'P.S.'</i>?</p>
                    <br>
                    <button class="multiple choice" value="postscript">Post Script</button>
                    <button class="multiple choice" value="poster">Poster</button>
                    <button class="multiple choice" value="pleasestop">Please Stop</button>
                    <br>
                    <button class="sub-btn" onclick="fSubmit('.send',choice)">Next</button>
                    <div class="skip" onclick="fSubmit('.send','')">Skip</div>
               </div>
          </section>
          <section class="quiz send">
               <form method="post" action="./advanced-t3.php" class="final-stage">
                    <div class="quiz-div">
                         <h1>You have completed the Advanced Test 3</h1>
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
                         
                    <button class="start" name="send-a-3">Continue</button>
               </form>
          </section>
     </body>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script type="text/javascript" src="../js/main.js"></script>
</html>