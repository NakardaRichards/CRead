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

     if (isset($_POST['send-i-3'])) {
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
          <title>CRead - Intermediate Test 3</title>

          <link rel="stylesheet" href="../css/tests.css">
     </head>
     <body>
          <!-- 
               What figure of speech is shown by the following sentences?
               1. Candace and Carson are as proud as peacocks. (simile, metaphor, personification)
               2. The flowers danced in the wind. (simile, metaphor, personification)
               3. He is a lion. (simile, metaphor, personification)
               4. Necessity is the mother of invention. (simile, metaphor, personification)
               5. I’m so hungry, I could eat a horse! (simile, metaphor, personification)
               6. The sun peeked out from behind the dark clouds. (simile, metaphor, personification)
               7. The child turned as pale as a white sheet. (simile, metaphor, personification)
               8. The old door groaned as it was gently pushed open. (simile, metaphor, 
               personification)
               9. He is as brave as a lion. (simile, metaphor, personification)
               10. Lily was as quiet as a mouse. (simile, metaphor, personification)
          -->
          <section>
               <div class="quiz-div">
                    <h1>Intermediate - Test 3</h1>
               </div>
               <div class="starter">
                    <p>Tell which <span class="underline">figure of speech</span> is used in each of the following questions.</p>
                    <div class="start" onclick="nextQ('.ques-1')">Start Test</div>
               </div>
          </section>
          <section class="quiz ques-1">
               <div class="quiz-div">
                    <span>Question 1</span> 
                    <br> 
                    <p>What figure of speech is shown by the following? <br> Candace and Carson are as proud as peacocks.</p>
                    <br>
                    <button class="multiple choice" value="simile">Simile</button>
                    <button class="multiple choice" value="metaphor">Metaphor</button>
                    <button class="multiple choice" value="personification">Personification</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-2',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-2','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-2">
               <div class="quiz-div">
                    <span>Question 2</span> 
                    <br> 
                    <p>What figure of speech is shown by the following? <br> The flowers danced in the wind.</p>
                    <br>
                    <button class="multiple choice" value="simile">Simile</button>
                    <button class="multiple choice" value="metaphor">Metaphor</button>
                    <button class="multiple choice" value="personification">Personification</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-3',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-3','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-3">
               <div class="quiz-div">
                    <span>Question 3</span> 
                    <br> 
                    <p>What figure of speech is shown by the following? <br> He is a lion.</p>
                    <br>
                    <button class="multiple choice" value="simile">Simile</button>
                    <button class="multiple choice" value="metaphor">Metaphor</button>
                    <button class="multiple choice" value="personification">Personification</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-4',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-4','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-4">
               <div class="quiz-div">
                    <span>Question 4</span> 
                    <br> 
                    <p>What figure of speech is shown by the following? <br> Necessity is the mother of invention.</p>
                    <br>
                    <button class="multiple choice" value="simile">Simile</button>
                    <button class="multiple choice" value="metaphor">Metaphor</button>
                    <button class="multiple choice" value="personification">Personification</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-5',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-5','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-5">
               <div class="quiz-div">
                    <span>Question 5</span> 
                    <br> 
                    <p>What figure of speech is shown by the following? <br> I’m so hungry, I could eat a horse!</p>
                    <br>
                    <button class="multiple choice" value="simile">Simile</button>
                    <button class="multiple choice" value="metaphor">Metaphor</button>
                    <button class="multiple choice" value="personification">Personification</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-6',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-6','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-6">
               <div class="quiz-div">
                    <span>Question 6</span> 
                    <br> 
                    <p>What figure of speech is shown by the following? <br> The sun peeked out from behind the dark clouds.</p>
                    <br>
                    <button class="multiple choice" value="simile">Simile</button>
                    <button class="multiple choice" value="metaphor">Metaphor</button>
                    <button class="multiple choice" value="personification">Personification</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-7',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-7','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-7">
               <div class="quiz-div">
                    <span>Question 7</span> 
                    <br> 
                    <p>What figure of speech is shown by the following? <br> The child turned as pale as a white sheet.</p>
                    <br>
                    <button class="multiple choice" value="simile">Simile</button>
                    <button class="multiple choice" value="metaphor">Metaphor</button>
                    <button class="multiple choice" value="personification">Personification</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-8',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-8','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-8">
               <div class="quiz-div">
                    <span>Question 8</span> 
                    <br> 
                    <p>What figure of speech is shown by the following? <br> The old door groaned as it was gently pushed open.</p>
                    <br>
                    <button class="multiple choice" value="simile">Simile</button>
                    <button class="multiple choice" value="metaphor">Metaphor</button>
                    <button class="multiple choice" value="personification">Personification</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-9',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-9','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-9">
               <div class="quiz-div">
                    <span>Question 9</span> 
                    <br> 
                    <p>What figure of speech is shown by the following? <br> He is as brave as a lion.</p>
                    <br>
                    <button class="multiple choice" value="simile">Simile</button>
                    <button class="multiple choice" value="metaphor">Metaphor</button>
                    <button class="multiple choice" value="personification">Personification</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-10',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-10','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-10">
               <div class="quiz-div">
                    <span>Question 10</span>
                    <br> 
                    <p>What figure of speech is shown by the following? <br> Lily was as quiet as a mouse.</p>
                    <br>
                    <button class="multiple choice" value="simile">Simile</button>
                    <button class="multiple choice" value="metaphor">Metaphor</button>
                    <button class="multiple choice" value="personification">Personification</button>
                    <br>
                    <button class="sub-btn" onclick="fSubmit('.send',choice)">Next</button>
                    <div class="skip" onclick="fSubmit('.send','')">Skip</div>
               </div>
          </section>
          <section class="quiz send">
               <form method="post" action="./intermediate-t3.php" class="final-stage">
                    <div class="quiz-div">
                         <h1>You have completed the Intermediate Test 3</h1>
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
                         
                    <button class="start" name="send-i-3">Continue</button>
               </form>
          </section>
     </body>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script type="text/javascript" src="../js/main.js"></script>
</html>