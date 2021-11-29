<?php
     session_id();

     include '../functions/diagnostic-verify.php';
     include '../functions/users.php';

     $usersObj = new Users();

     if (!isset($_SESSION['id']) || $_SESSION['id'] != true) {
          header("location: ../Pages/Homepage.html");
          exit;
     }
     $tests = new diagnostic();

     
     $testResult = $tests->diagnosis();
     // $usersObj->diagTestStatus($score);
     // $diagnose -> chooseLesson($score);
     $nextLesson;
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- <link rel="stylesheet" href="../css/tests.css"> -->
     <link rel="stylesheet" href="../css/feedback.css">
     <title>CRead - Diagnostic Test Feedback</title>
</head>
<body>
     <section>
          <h1>Test Feedback - Diagnostic Test</h1>
     </section>
     <section class="<?php
                         if($testResult[0] == 1){
                              echo "success";
                         } 
                         elseif($testResult[0] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 1</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q1']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[1];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         
                         if($testResult[2] == 1){
                              echo "success";
                         } 
                         elseif($testResult[2] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 2</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q2']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[3];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         
                         if($testResult[4] == 1){
                              echo "success";
                         } 
                         elseif($testResult[4] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 3</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q3']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[5];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         
                         if($testResult[6] == 1){
                              echo "success";
                         } 
                         elseif($testResult[6] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 4</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q4']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[7];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         
                         if($testResult[8] == 1){
                              echo "success";
                         } 
                         elseif($testResult[8] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 5</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q5']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[9];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         
                         if($testResult[10] == 1){
                              echo "success";
                         } 
                         elseif($testResult[10] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 6</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q6']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[11];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         
                         if($testResult[12] == 1){
                              echo "success";
                         } 
                         elseif($testResult[12] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 7</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q7']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[13];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         
                         if($testResult[14] == 1){
                              echo "success";
                         } 
                         elseif($testResult[14] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 8</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q8']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[15];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         
                         if($testResult[16] == 1){
                              echo "success";
                         } 
                         elseif($testResult[16] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 9</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q9']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[17];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         if($testResult[18] == 1){
                              echo "success";
                         } 
                         elseif($testResult[18] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 10</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q10']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[19];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         if($testResult[20] == 1){
                              echo "success";
                         } 
                         elseif($testResult[20] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 11</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q11']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[21];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         
                         if($testResult[22] == 1){
                              echo "success";
                         } 
                         elseif($testResult[22] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 12</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q12']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[23];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         
                         if($testResult[24] == 1){
                              echo "success";
                         } 
                         elseif($testResult[24] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 13</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q13']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[25];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         
                         if($testResult[26] == 1){
                              echo "success";
                         } 
                         elseif($testResult[26] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 14</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q14']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[27];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         
                         if($testResult[28] == 1){
                              echo "success";
                         } 
                         elseif($testResult[28] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 15</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q15']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[29];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         
                         if($testResult[30] == 1){
                              echo "success";
                         } 
                         elseif($testResult[30] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 16</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q16']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[31];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         
                         if($testResult[32] == 1){
                              echo "success";
                         } 
                         elseif($testResult[32] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 17</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q17']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[33];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         
                         if($testResult[34] == 1){
                              echo "success";
                         } 
                         elseif($testResult[34] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 18</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q18']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[35];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         
                         if($testResult[36] == 1){
                              echo "success";
                         } 
                         elseif($testResult[36] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 19</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q19']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[37];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <section class="<?php
                         if($testResult[38] == 1){
                              echo "success";
                         } 
                         elseif($testResult[38] == 0){
                              echo "failure";
                         } 
                    ?>">
          <h3>Question 20</h3>
          <div class="answer-cont">
               <div>
                    <p>Answer Given</p>
                    <div><?php echo $_POST['q20']; ?></div>
               </div>
               <div>
                    <p>Correct Answer</p>
                    <div><?php 
                              echo $testResult[39];
                         ?>
                    </div>
               </div>
          </div>
     </section>
     <hr>
     <!-- Feedback -->
     <section>
          <h3>Test Score</h3>
          <div>
               <p>You received a score of <span class="highlight"><?php echo $testResult[40]; ?></span> out of <span class="highlight">10</span></p>
          </div>
     </section>
     <section>
          <h3>Comments</h3>
          <div>
          <?php 
                    if($testResult[40] >= 15){
                         echo 'Well done <span class="highlight">'.$_SESSION['username'].'</span>!<br>You seem to be advanced in your english literacy. You will therefore be assigned to take our advanced lessons. You can select the "Go to Lesson" button to go straight to your assigned lesson, or select the "Go to Dashboard" button if you wish to start at a later time.';
                         $nextLesson = '<a class="go-to-class" href="../dashboard/advancedlessons.php">Go to Lesson</a>';
                    }
                    elseif($testResult[40] >= 10 && $testResult[20] < 15){
                         echo 'Good job <span class="highlight">'.$_SESSION['username'].'</span>.<br>You are at a fairly mature stage of english literacy, however there are some topics that you struggle with. You will therefore be assigned to intermediate lessons. You can select the "Go to Lesson" button to go straight to your assigned lesson, or select the "Go to Dashboard" button if you wish to start at a later time.';
                         $nextLesson='<a class="go-to-class" href="../dashboard/intermediatelessons.php">Go to Lesson</a>';
                    }
                    elseif($testResult[40] < 10){
                         echo 'Nice try <span class="highlight">'.$_SESSION['username'].'</span>.<br>Your english literacy is not at a mature level as yet. Therefore to help you develop your english literacy, you will be placed set for beginner lessons. You can select the "Go to Lesson" button to go straight to your assigned lesson, or select the "Go to Dashboard" button if you wish to start at a later time.';
                         $nextLesson='<a class="go-to-class" href="../dashboard/beginnerlessons.php">Go to Lesson</a>';
                    }
               ?>
          </div>
     </section>
     <!-- Route to Pages -->
     <section class="user-route">
          <div>
               <?php
                    echo $nextLesson.'<a class="go-to-class" href="../dashboard/dashboard.php">Go to Dashboard</a>';
               ?>
          </div>
     </section>
</body>
</html>