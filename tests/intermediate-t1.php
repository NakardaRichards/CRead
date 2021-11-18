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

     if (isset($_POST['send-i-1'])) {
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
          <title>CRead - Intermediate Test 1</title>

          <link rel="stylesheet" href="../css/tests.css">
     </head>
     <body>
          <!-- 
               Select the part of speech of the highlighted word in each of the following sentences.
               1. Johnny eats red apples. (Noun, Adjective, Verb)
               2. Samantha plays with her dog. (Noun, Preposition, Verb)
               3. They visit the countryside often. (Pronoun, Noun, Adverb)
               4. We enjoy dancing to music. (Verb, Adjective, Adverb)
               5. The boy types quickly on his computer. (Noun, Adverb, Preposition)
               6. She sleeps all the time. (Noun, Pronoun, Adjective)
               7. The glass fell and broke. (Noun, Verb, Preposition)
               8. The fire is hot. (Noun, Adjective, Adverb)
               9. Jimmy stared angrily at Allie. (Noun, Adverb, Preposition)
               10. Timmy and Bobby went to the market. (Pronoun, Adjective, Noun)
          -->
          <section>
               <div class="quiz-div">
                    <h1>Intermediate - Test 1</h1>
               </div>
               <div class="starter">
                    <p>Select the part of speech of the <span class="highlight">highlighted word</span> in each of the following sentences</p>
                    <div class="start" onclick="nextQ('.ques-1')">Start Test</div>
               </div>
          </section>
          <section class="quiz ques-1">
               <div class="quiz-div">
                    <span>Question 1</span> 
                    <br> 
                    <p>What part of speech is the highlighted word? - Johnny eats <span class="highlight">red</span> apples.</p>
                    <br>
                    <button class="multiple choice" value="noun">Noun</button>
                    <button class="multiple choice" value="adjective">Adjective</button>
                    <button class="multiple choice" value="verb">Verb</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-2',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-2','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-2">
               <div class="quiz-div">
                    <span>Question 2</span> 
                    <br> 
                    <p>What part of speech is the highlighted word? - Samantha <span class="highlight">plays</span> with her dog.</p>
                    <br>
                    <button class="multiple choice" value="noun">Noun</button>
                    <button class="multiple choice" value="preposition">Preposition</button>
                    <button class="multiple choice" value="verb">Verb</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-3',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-3','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-3">
               <div class="quiz-div">
                    <span>Question 3</span> 
                    <br> 
                    <p>What part of speech is the highlighted word? - They visit the countryside <span class="highlight">often</span>.</p>
                    <br>
                    <button class="multiple choice" value="pronoun">Pronoun</button>
                    <button class="multiple choice" value="noun">Noun</button>
                    <button class="multiple choice" value="adverb">Adverb</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-4',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-4','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-4">
               <div class="quiz-div">
                    <span>Question 4</span> 
                    <br> 
                    <p>What part of speech is the highlighted word? - We enjoy <span class="highlight">dancing</span> to music.</p>
                    <br>
                    <button class="multiple choice" value="verb">Verb</button>
                    <button class="multiple choice" value="adjective">Adjective</button>
                    <button class="multiple choice" value="adverb">Adverb</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-5',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-5','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-5">
               <div class="quiz-div">
                    <span>Question 5</span> 
                    <br> 
                    <p>What part of speech is the highlighted word? - The boy types quicky <span class="highlight">on</span> his computer.</p>
                    <br>
                    <button class="multiple choice" value="noun">Noun</button>
                    <button class="multiple choice" value="adverb">Adverb</button>
                    <button class="multiple choice" value="preposition">Preposition</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-6',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-6','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-6">
               <div class="quiz-div">
                    <span>Question 6</span> 
                    <br> 
                    <p>What part of speech is the highlighted word? - <span class="highlight">She</span> sleeps all the time.</p>
                    <br>
                    <button class="multiple choice" value="noun">Noun</button>
                    <button class="multiple choice" value="pronoun">Pronoun</button>
                    <button class="multiple choice" value="adjective">Adjective</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-7',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-7','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-7">
               <div class="quiz-div">
                    <span>Question 7</span> 
                    <br> 
                    <p>What part of speech is the highlighted word? - The <span class="highlight">glass</span> fell and broke.</p>
                    <br>
                    <button class="multiple choice" value="noun">Noun</button>
                    <button class="multiple choice" value="verb">Verb</button>
                    <button class="multiple choice" value="preposition">Preposition</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-8',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-8','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-8">
               <div class="quiz-div">
                    <span>Question 8</span> 
                    <br> 
                    <p>What part of speech is the highlighted word? - The fire is <span class="highlight">hot</span>.</p>
                    <br>
                    <button class="multiple choice" value="noun">Noun</button>
                    <button class="multiple choice" value="adjective">Adjective</button>
                    <button class="multiple choice" value="adverb">Adverb</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-9',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-9','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-9">
               <div class="quiz-div">
                    <span>Question 9</span> 
                    <br> 
                    <p>What part of speech is the highlighted word? - Jimmy stared <span class="highlight">angrily</span> at Allie.</p>
                    <br>
                    <button class="multiple choice" value="noun">Noun</button>
                    <button class="multiple choice" value="adverb">Adverb</button>
                    <button class="multiple choice" value="preposition">Preposition</button> 
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-10',choice)">Next</button>
                    <div class="skip" onclick="submit('.ques-10','')">Skip</div>
               </div>
          </section>
          <section class="quiz ques-10">
               <div class="quiz-div">
                    <span>Question 10</span>
                    <br> 
                    <p>What part of speech is the highlighted word? - <span class="highlight">Timmy</span> and Bobby went to the market.</p>
                    <br>
                    <button class="multiple choice" value="pronoun">Pronoun</button>
                    <button class="multiple choice" value="adjective">Adjective</button>
                    <button class="multiple choice" value="noun">Noun</button>
                    <br>
                    <button class="sub-btn" onclick="fSubmit('.send',choice)">Next</button>
                    <div class="skip" onclick="fSubmit('.send','')">Skip</div>
               </div>
          </section>
          <section class="quiz send">
               <form method="post" action="./intermediate-t1.php" class="final-stage">
                    <div class="quiz-div">
                         <h1>You have completed the Intermediate Test 1</h1>
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
                         
                    <button class="start" name="send-i-1">Continue</button>
               </form>
          </section>
     </body>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script type="text/javascript" src="../js/main.js"></script>
</html>