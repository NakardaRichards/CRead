<?php
     session_id();

     include '../functions/tests-verify.php';
     include '../functions/users.php';

     $tests = new tests();
     $usersObj = new Users();

     if (!isset($_SESSION['id']) || $_SESSION['id'] != true) {
          header("location: ../Pages/Homepage.html");
          exit;
     }

     if (isset($_POST['send-a-2'])) {
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
          <title>CRead - Advanced Test 2</title>

          <link rel="stylesheet" href="../css/tests.css">
     </head>
     <body>
          <!-- 
               Add the correct punctuation to the end of each of the following sentences:
               1. I fell down (./!/?)
               2. We play the violin (./!/?)
               3. Does Nicholas know where the house is (./!/?)
               4. Katrina stole the cookie (./!/?)
               5. Who is your sister (./!/?)
               6. Sandra petted the cat (./!/?)
               7. Is Rohan your friend (./!/?)
               8. He does well in school (./!/?)
               9. The children are very smart (./!/?)
               10. Wow (./!/?)
          -->
          <section>
               <div class="quiz-div">
                    <h1>Advanced - Test 2</h1>
               </div>
               <div class="starter">
                    <p>Add the correct punctuation to the end of each of the following sentences.</p>
                    <div class="start" onclick="nextQ('.ques-1')">Start Test</div>
               </div>
          </section>
          <section class="quiz ques-1">
               <div class="quiz-div">
                    <span>Question 1</span> 
                    <br> 
                    <p>Add the correct punctuation to the end of the following question:</p>
                    <br>
                    <label>I fell down</label>
                    <select id="q1" style="height: 1.2rem">
                         <option aria-placeholder="Select Option"></option>
                         <option value=".">.</option>
                         <option value="!">!</option>
                         <option value="?">?</option>
                    </select>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-2',$('#q1').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-2','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-2">
               <div class="quiz-div">
                    <span>Question 2</span> 
                    <br> 
                    <p>Add the correct punctuation to the end of the following question:</p>
                    <br>
                    <label>We play the violin</label>
                    <select id="q2">
                         <option aria-placeholder="Select Option"></option>
                         <option value=".">.</option>
                         <option value="!">!</option>
                         <option value="?">?</option>
                    </select>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-3',$('#q2').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-3','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-3">
               <div class="quiz-div">
                    <span>Question 3</span> 
                    <br> 
                    <p>Add the correct punctuation to the end of the following question:</p>
                    <br>
                    <label>Does Nicholas know where the house is</label>
                    <select id="q3">
                         <option aria-placeholder="Select Option"></option>
                         <option value=".">.</option>
                         <option value="!">!</option>
                         <option value="?">?</option>
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
                    <p>Add the correct punctuation to the end of the following question:</p>
                    <br>
                    <label>Katrina stole the cookie</label>
                    <select id="q4">
                         <option aria-placeholder="Select Option"></option>
                         <option value=".">.</option>
                         <option value="!">!</option>
                         <option value="?">?</option>
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
                    <p>Add the correct punctuation to the end of the following question:</p>
                    <br>
                    <label>Who is your sister</label>
                    <select id="q5">
                         <option aria-placeholder="Select Option"></option>
                         <option value=".">.</option>
                         <option value="!">!</option>
                         <option value="?">?</option>
                    </select>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-6',$('#q5').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-6','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-6">
               <div class="quiz-div">
                    <span>Question 6</span> 
                    <br> 
                    <p>Add the correct punctuation to the end of the following question:</p>
                    <br>
                    <label>Sandra petted the cat</label>
                    <select id="q6">
                         <option aria-placeholder="Select Option"></option>
                         <option value=".">.</option>
                         <option value="!">!</option>
                         <option value="?">?</option>
                    </select>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-7',$('#q6').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-7','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-7">
               <div class="quiz-div">
                    <span>Question 7</span> 
                    <br>
                    <p>Add the correct punctuation to the end of the following question:</p>
                    <br>
                    <label>Is Rohan your friend</label> 
                    <select id="q7">
                         <option aria-placeholder="Select Option"></option>
                         <option value=".">.</option>
                         <option value="!">!</option>
                         <option value="?">?</option>
                    </select>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-8',$('#q7').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-8','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-8">
               <div class="quiz-div">
                    <span>Question 8</span> 
                    <br> 
                    <p>Add the correct punctuation to the end of the following question:</p>
                    <br>
                    <label>He does well in school</label>
                    <select id="q8">
                         <option aria-placeholder="Select Option"></option>
                         <option value=".">.</option>
                         <option value="!">!</option>
                         <option value="?">?</option>
                    </select>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-9',$('#q8').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-9','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-9">
               <div class="quiz-div">
                    <span>Question 9</span> 
                    <br> 
                    <p>Add the correct punctuation to the end of the following question:</p>
                    <br>
                    <label>The children are very smart</label> 
                    <select id="q9">
                         <option aria-placeholder="Select Option"></option>
                         <option value=".">.</option>
                         <option value="!">!</option>
                         <option value="?">?</option>
                    </select>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-10',$('#q9').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-10','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-10">
               <div class="quiz-div">
                    <span>Question 10</span>
                    <br> 
                    <p>Add the correct punctuation to the end of the following question:</p>
                    <br>
                    <label>Wow</label>
                    <select id="q10">
                         <option aria-placeholder="Select Option"></option>
                         <option value=".">.</option>
                         <option value="!">!</option>
                         <option value="?">?</option>
                    </select>
                    <br>
                    <button class="sub-btn" onclick="fSubmit('.send',$('#q10').val())">Next</button>
                    <div class="skip" onclick="fSubmit('.send','')">Skip</div>
               </div>
          </section>
          <section class="quiz send">
               <form method="post" action="./test-feedback.php" class="final-stage">
                    <div class="quiz-div">
                         <h1>You have completed the Advanced Test 2</h1>
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
                         
                    <button class="start" name="send-a-2">Continue</button>
               </form>
          </section>
     </body>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script type="text/javascript" src="../js/main.js"></script>
</html>