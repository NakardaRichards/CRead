<?php
     session_id();

     include '../functions/tests-verify.php';
     include '../functions/users.php';

     $usersObj = new Users();

     if (!isset($_SESSION['id']) || $_SESSION['id'] != true) {
          header("location: ../Pages/Homepage.html");
          exit;
     }
     $tests = new tests();

     
     $testResult = $tests->test();
     $nextLesson;
     $sameLesson;
     $thisTest;
     if(isset($_POST['send-b-1'])){
          $sameLesson='<a class="go-to-class" href="../dashboard/beginnerlessons.php">Repeat Lesson</a>';
          $nextLesson='<a class="go-to-class" href="../dashboard/beginnerlessons2.php">Next Lesson</a>';
          $thisTest='Beginner 1';
     }
     if(isset($_POST['send-b-2'])){
          $sameLesson='<a class="go-to-class" href="../dashboard/beginnerlessons2.php">Repeat Lesson</a>';
          $nextLesson='<a class="go-to-class" href="../dashboard/beginnerlessons3.php">Next Lesson</a>';
          $thisTest='Beginner 2';
     }
     if(isset($_POST['send-b-3'])){
          $sameLesson='<a class="go-to-class" href="../dashboard/beginnerlessons3.php">Repeat Lesson</a>';
          $nextLesson='<a class="go-to-class" href="../dashboard/intermediatelessons.php">Next Lesson</a>';
          $thisTest='Beginner 3';
     }

     if(isset($_POST['send-i-1'])){
          $sameLesson='<a class="go-to-class" href="../dashboard/intermediatelessons.php">Repeat Lesson</a>';
          $nextLesson='<a class="go-to-class" href="../dashboard/intermediatelessons2.php">Next Lesson</a>';
          $thisTest='Intermediate 1';
     }
     if(isset($_POST['send-i-2'])){
          $sameLesson='<a class="go-to-class" href="../dashboard/intermediatelessons2.php">Repeat Lesson</a>';
          $nextLesson='<a class="go-to-class" href="../dashboard/intermediatelessons3.php">Next Lesson</a>';
          $thisTest='Intermediate 2';
     }
     if(isset($_POST['send-i-3'])){
          $sameLesson='<a class="go-to-class" href="../dashboard/intermediatelessons3.php">Repeat Lesson</a>';
          $nextLesson='<a class="go-to-class" href="../dashboard/advancedlessons.php">Next Lesson</a>';
          $thisTest='Intermediate 3';
     }

     if(isset($_POST['send-a-1'])){
          $sameLesson='<a class="go-to-class" href="../dashboard/advancedlessons.php">Repeat Lesson</a>';
          $nextLesson='<a class="go-to-class" href="../dashboard/advancedlessons2.php">Next Lesson</a>';
          $thisTest='Advanced 1';
     }
     if(isset($_POST['send-a-2'])){
          $sameLesson='<a class="go-to-class" href="../dashboard/advancedlessons2.php">Repeat Lesson</a>';
          $nextLesson='<a class="go-to-class" href="../dashboard/advancedlessons3.php">Next Lesson</a>';
          $thisTest='Advanced 2';
     }
     if(isset($_POST['send-a-3'])){
          $sameLesson='<a class="go-to-class" href="../dashboard/advancedlessons3.php">Repeat Lesson</a>';
          $nextLesson='<a class="go-to-class" href="../Pages/certificate.php">Finish Course</a>';
          $thisTest='Advanced 3';
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="../css/feedback.css">
     <title>CRead - Test Feedback</title>
</head>
<body>
     <section>
          <h1>Test Feedback - <?php echo $thisTest;?></h1>
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
     <hr>
     <!-- Feedback -->
     <section>
          <h3>Test Score</h3>
          <div>
               <p>You received a score of <span class="highlight"><?php echo $testResult[20]; ?></span> out of <span class="highlight">10</span></p>
          </div>
     </section>
     <section>
          <h3>Comments</h3>
          <div>
          <?php 
                    $nextPage;
                    if($testResult[20] >= 8){
                         echo 'Well done <span class="highlight">'.$_SESSION['username'].'</span>!<br>You seem to have grasped the concepts taught in this section. You may proceed to the next lesson below:';
                         $nextPage = $nextLesson;
                    }
                    elseif($testResult[20] >= 5 && $testResult[20] < 8){
                         echo 'Good job <span class="highlight">'.$_SESSION['username'].'</span>.<br>You have not mastered the topics taught in this lesson but have managed to pass the test. You may choose to retry the lesson or proceed to the next lesson below:';
                         $nextPage = $sameLesson.$nextLesson;
                    }
                    elseif($testResult[20] < 5){
                         echo 'Nice try <span class="highlight">'.$_SESSION['username'].'</span>.<br>Sadly you were unable to pass the test for this lesson. Please return to this lesson and try this test once more.';
                         $nextPage = $sameLesson;
                    }
               ?>
          </div>
     </section>
     <!-- Route to Pages -->
     <section class="user-route">
          <div>
               <?php
                    echo $nextPage;
               ?>
          </div>
     </section>
</body>
</html>