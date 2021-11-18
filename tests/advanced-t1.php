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

     if (isset($_POST['send-a-1'])) {
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
          <title>CRead - Advanced Test 1</title>

          <link rel="stylesheet" href="../css/tests.css">
     </head>
     <body>
          <!-- 
               
          -->
          <section>
               <div class="quiz-div">
                    <h1>Advanced - Test 1</h1>
               </div>
               <div class="starter">
                    <p>Select the most appropriate word to complete the sentences for the following questions.</p>
                    <div class="start" onclick="nextQ('.ques-1')">Start Test</div>
               </div>
          </section>
          <section class="quiz ques-1">
               <div class="quiz-div">
                    <span>Question 1</span> 
                    <br>
                    <p>Select the correct word to complete the sentence:</p>
                    <br>
                    <label>Janet and Pam </label> 
                    <select id="q1" style="width: 3rem; height: 1.3rem">
                         <option aria-placeholder="Select Option"></option>
                         <option value="play">play</option>
                         <option value="plays">plays</option>
                    </select>
                    <label> nicely with each other.</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-2',$('#q1').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-2','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-2">
               <div class="quiz-div">
                    <span>Question 2</span>
                    <br>
                    <p>Select the correct word to complete the sentence:</p>
                    <br>
                    <label>The big, red dog </label> 
                    <select id="q2" style="width: 2rem; height: 1.3rem">
                         <option aria-placeholder="Select Option"></option>
                         <option value="is">is</option>
                         <option value="are">are</option>
                    </select>
                    <label> called Clifford.</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-3',$('#q2').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-3','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-3">
               <div class="quiz-div">
                    <span>Question 3</span> 
                    <br>
                    <p>Select the correct word to complete the sentence:</p>
                    <br>
                    <label>They </label> 
                    <select id="q3" style="width: 2.5rem; height: 1.3rem">
                         <option aria-placeholder="Select Option"></option>
                         <option value="has">has</option>
                         <option value="have">have</option>
                    </select>
                    <label> beautiful dolls.</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-4',$('#q3').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-4','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-4">
               <div class="quiz-div">
                    <span>Question 4</span> 
                    <br>
                    <p>Select the correct word to complete the sentence:</p>
                    <br> 
                    <label>Every one of the shirts </label> 
                    <select id="q4" style="width: 2rem; height: 1.3rem">
                         <option aria-placeholder="Select Option"></option>
                         <option value="is">is</option>
                         <option value="are">are</option>
                    </select>
                    <label> plaid.</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-5',$('#q4').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-5','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-5">
               <div class="quiz-div">
                    <span>Question 5</span> 
                    <br>
                    <p>Select the correct word to complete the sentence:</p>
                    <br>
                    <label>All of the children </label> 
                    <select id="q5" style="width: 3rem; height: 1.3rem">
                         <option aria-placeholder="Select Option"></option>
                         <option value="drink">drink</option>
                         <option value="drinks">drinks</option>
                    </select>
                    <label> lots of water.</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-6',$('#q5').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-6','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-6">
               <div class="quiz-div">
                    <span>Question 6</span> 
                    <br>
                    <p>Select the correct word to complete the sentence:</p>
                    <br>
                    <label>None of the boys </label> 
                    <select id="q6" style="width: 3rem; height: 1.3rem">
                         <option aria-placeholder="Select Option"></option>
                         <option value="know">know</option>
                         <option value="knows">knows</option>
                    </select>
                    <label> where the money is.</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-7',$('#q6').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-7','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-7">
               <div class="quiz-div">
                    <span>Question 7</span> 
                    <br>
                    <p>Select the correct word to complete the sentence:</p>
                    <br>
                    <label>I </label> 
                    <select id="q7" style="width: 2rem; height: 1.3rem">
                         <option aria-placeholder="Select Option"></option>
                         <option value="eat">eat</option>
                         <option value="eats">eats</option>
                    </select>
                    <label> a large breakfast every day.</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-8',$('#q7').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-8','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-8">
               <div class="quiz-div">
                    <span>Question 8</span> 
                    <br>
                    <p>Select the correct word to complete the sentence:</p>
                    <br>
                    <label>My friends </label> 
                    <select id="q8" style="width: 3rem; height: 1.3rem">
                         <option aria-placeholder="Select Option"></option>
                         <option value="travel">travel</option>
                         <option value="travels">travels</option>
                    </select>
                    <label> often.</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-9',$('#q8').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-9','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-9">
               <div class="quiz-div">
                    <span>Question 9</span> 
                    <br>
                    <p>Select the correct word to complete the sentence:</p>
                    <br>
                    <label>The three cats </label> 
                    <select id="q9" style="width: 2rem; height: 1.3rem">
                         <option aria-placeholder="Select Option"></option>
                         <option value="put">put</option>
                         <option value="puts">puts</option>
                    </select>
                    <label> on their mittens.</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-10',$('#q9').val())">Next</button>
                    <div class="skip" onclick="submit('.ques-10','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-10">
               <div class="quiz-div">
                    <span>Question 10</span>
                    <br>
                    <p>Select the correct word to complete the sentence:</p>
                    <br>
                    <label>Sally and Andy </label> 
                    <select id="q10" style="width: 3rem; height: 1.3rem">
                         <option aria-placeholder="Select Option"></option>
                         <option value="wear">wear</option>
                         <option value="wears">wears</option>
                    </select>
                    <label> nice clothes.</label>
                    <br>
                    <button class="sub-btn" onclick="fSubmit('.send',$('#q10').val())">Next</button>
                    <div class="skip" onclick="fSubmit('.send','')">Skip</div>
               </div>
          </section>
          <section class="quiz send">
               <form method="post" action="./advanced-t1.php" class="final-stage">
                    <div class="quiz-div">
                         <h1>You have completed the Advanced Test 1</h1>
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
                         
                    <button class="start" name="send-a-1">Continue</button>
               </form>
          </section>
     </body>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script type="text/javascript" src="../js/main.js"></script>
</html>