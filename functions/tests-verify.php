<?php
     // tests database tables:
          // beginner-tests
               // qid (same as question number)
               // test1 (answer(s) that correspond to the test number and its questions)
               // test2 (answer(s) that correspond to the test number and its questions)
               // test3 (answer(s) that correspond to the test number and its questions)
          // intermediate-tests
               // qid (same as question number)
               // test1 (answer(s) that correspond to the test number and its questions)
               // test2 (answer(s) that correspond to the test number and its questions)
               // test3 (answer(s) that correspond to the test number and its questions)
          // advanced-tests
               // qid (same as question number)
               // test1 (answer(s) that correspond to the test number and its questions)
               // test2 (answer(s) that correspond to the test number and its questions)
               // test3 (answer(s) that correspond to the test number and its questions)
     class tests{
          private $servername = "localhost";
          private $username   = "root";
          private $password   = "cenation2";
          private $database   = "cread2";
          public  $con;
          // include some variables here for the userProgress section
          // public $testAccPoints;
          // public $userAccPoints;
          // public $userLevel;
          // public $userLesson;
          // public $userProgress;

          public function __construct()
          {
               // $this->userProgress = array();
               $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
               if (mysqli_connect_error()) {
                    trigger_error("Failed to connect to MySQL: " . mysqli_connect_errno());
               } else {

                    return $this->con;
               }
          }

          public function test(){
               $score=0;
               $testResult = array();

               for ($x = 1; $x <= 10; $x++) {
                    $a = 'q'.$x;
                    $$a = strtolower($_POST[$a]);

                    if(strlen($$a) > 1 && strpos($$a, ',') !== false){
                         $$a = explode(',', $$a);
                    }
                    $query;

                    if(isset($_POST['send-b-1'])){
                         $query = "SELECT test1 FROM beginner_tests WHERE qid ='$x'";

                         $sql = $this->con->query($query);
                         $row = $sql->fetch_assoc();
                         if($$a == $row['test1'] && $$a != NULL){
                              $score+=1;
                              array_push($testResult,1);
                         }
                         else{
                              array_push($testResult,0);
                         }
                         array_push($testResult,$row['test1']);
                         if($x >= 10){
                              $stid = $_SESSION['id'];
                              $userScore = "UPDATE users SET beg1 = '$score' WHERE id = '$stid'";
                              $newsql = $this->con->query($userScore);
                         }
                    }
                    if(isset($_POST['send-b-2'])){
                         $query = "SELECT test2 FROM beginner_tests WHERE qid ='$x'";

                         $sql = $this->con->query($query);
                         $row = $sql->fetch_assoc();
                         if(is_array($$a)){
                              $qArr = explode(' ', $row['test2']);
                              $check=0;
                              foreach($$a as $val){
                                   if(in_array($val,$qArr)) $check++;
                              }
                              if($check == count($qArr)){
                                   $score+=1;
                                   array_push($testResult,1);
                              } 
                              
                         }
                         elseif($$a == $row['test2'] && $$a != NULL){
                              $score+=1;
                              array_push($testResult,1);
                         }
                         else{
                              array_push($testResult,0);
                         }
                         array_push($testResult,$row['test2']);
                         if($x >= 10){
                              $stid = $_SESSION['id'];
                              $userScore = "UPDATE users SET beg2 = '$score' WHERE id = '$stid'";
                              $newsql = $this->con->query($userScore);
                         }
                    }
                    if(isset($_POST['send-b-3'])){
                         $query = "SELECT test3 FROM beginner_tests WHERE qid ='$x'";
                         $sql = $this->con->query($query);
                         $row = $sql->fetch_assoc();
                         if($$a == $row['test3'] && $$a != NULL){
                              $score+=1;
                              array_push($testResult,1);
                         }
                         else{
                              array_push($testResult,0);
                         }
                         array_push($testResult,$row['test3']);
                         if($x >= 10){
                              $stid = $_SESSION['id'];
                              $userScore = "UPDATE users SET beg3 = '$score' WHERE id = '$stid'";
                              $newsql = $this->con->query($userScore);
                         }
                    }

                    if(isset($_POST['send-i-1'])){
                         $query = "SELECT test1 FROM interm_tests WHERE qid ='$x'";
                         $sql = $this->con->query($query);
                         $row = $sql->fetch_assoc();
                         if($$a == $row['test1'] && $$a != NULL){
                              $score+=1;
                              array_push($testResult,1);
                         }
                         else{
                              array_push($testResult,0);
                         }
                         array_push($testResult,$row['test1']);
                         if($x >= 10){
                              $stid = $_SESSION['id'];
                              $userScore = "UPDATE users SET interm1 = '$score' WHERE id = '$stid'";
                              $newsql = $this->con->query($userScore);
                         }
                    }
                    if(isset($_POST['send-i-2'])){
                         $query = "SELECT test2 FROM interm_tests WHERE qid ='$x'";
                         $sql = $this->con->query($query);
                         $row = $sql->fetch_assoc();
                         if($$a == $row['test2'] && $$a != NULL){
                              $score+=1;
                              array_push($testResult,1);
                         }
                         else{
                              array_push($testResult,0);
                         }
                         array_push($testResult,$row['test2']);
                         if($x >= 10){
                              $stid = $_SESSION['id'];
                              $userScore = "UPDATE users SET interm2 = '$score' WHERE id = '$stid'";
                              $newsql = $this->con->query($userScore);
                         }
                    }
                    if(isset($_POST['send-i-3'])){
                         $query = "SELECT test3 FROM interm_tests WHERE qid ='$x'";
                         $sql = $this->con->query($query);
                         $row = $sql->fetch_assoc();
                         if($$a == $row['test3'] && $$a != NULL){
                              $score+=1;
                              array_push($testResult,1);
                         }
                         else{
                              array_push($testResult,0);
                         }
                         array_push($testResult,$row['test3']);
                         if($x >= 10){
                              $stid = $_SESSION['id'];
                              $userScore = "UPDATE users SET interm3 = '$score' WHERE id = '$stid'";
                              $newsql = $this->con->query($userScore);
                         }
                    }

                    if(isset($_POST['send-a-1'])){
                         $query = "SELECT test1 FROM adv_tests WHERE qid ='$x'";
                         $sql = $this->con->query($query);
                         $row = $sql->fetch_assoc();
                         if($$a == $row['test1'] && $$a != NULL){
                              $score+=1;
                              array_push($testResult,1);
                         }
                         else{
                              array_push($testResult,0);
                         }
                         array_push($testResult,$row['test1']);
                         if($x >= 10){
                              $stid = $_SESSION['id'];
                              $userScore = "UPDATE users SET adv1 = '$score' WHERE id = '$stid'";
                              $newsql = $this->con->query($userScore);
                         }
                    }
                    if(isset($_POST['send-a-2'])){
                         $query = "SELECT test2 FROM adv_tests WHERE qid ='$x'";
                         $sql = $this->con->query($query);
                         $row = $sql->fetch_assoc();
                         if($$a == $row['test2'] && $$a != NULL){
                              $score+=1;
                              array_push($testResult,1);
                         }
                         else{
                              array_push($testResult,0);
                         }
                         array_push($testResult,$row['test2']);
                         if($x >= 10){
                              $stid = $_SESSION['id'];
                              $userScore = "UPDATE users SET adv2 = '$score' WHERE id = '$stid'";
                              $newsql = $this->con->query($userScore);
                         }
                    }
                    if(isset($_POST['send-a-3'])){
                         $query = "SELECT test3 FROM adv_tests WHERE qid ='$x'";
                         $sql = $this->con->query($query);
                         $row = $sql->fetch_assoc();
                         if($$a == $row['test3'] && $$a != NULL){
                              $score+=1;
                              array_push($testResult,1);
                         }
                         else{
                              array_push($testResult,0);
                         }
                         array_push($testResult,$row['test3']);
                         if($x >= 10){
                              $stid = $_SESSION['id'];
                              $userScore = "UPDATE users SET adv3 = '$score' WHERE id = '$stid'";
                              $newsql = $this->con->query($userScore);
                         }
                    }
               }
               // echo "Score = ".$score;
               array_push($testResult,$score);
               return $testResult;
          }

          // public function userProgress($request){
          public function userProgress(){
               // Select * from user of current session
               $stid = $_SESSION['id'];
               $query = "SELECT * FROM users WHERE id = '$stid'";
               $sql = $this->con->query($query);
               $row = $sql->fetch_assoc();

               // Determine the level and lesson the person should be at. Give a link to the lesson
               // Determine the number of points accumulated (and the success percentage thus far)
               // Determine the progression of the person throughout the entire course

               $testAccPoints=0;
               $userAccPoints=0;
               if(!$row['beg1'] && !$row['interm1'] && !$row['adv1']){
                    $userLevel='Beginner';
                    $userLesson='Your Current Lesson is <span class="highlight">1</span> <br><br><a class="go-to-class" href="../dashboard/beginnerlessons.php">Go To Lesson</a>';
                    $testAccPoints+=10;
                    $userAccPoints+=$row['beg1'];
               }
               if($row['beg1']){
                    $userLevel='Beginner';
                    $userLesson='Your Current Lesson is <span class="highlight">2</span> <br><br><a class="go-to-class" href="../dashboard/beginnerlessons2.php">Go To Lesson</a>';
                    $testAccPoints+=10;
                    $userAccPoints+=$row['beg1'];
               }
               if($row['beg2']){
                    $userLevel='Beginner ';
                    $userLesson='Your Current Lesson is <span class="highlight">3</span> <br><br><a class="go-to-class" href="../dashboard/beginnerlessons3.php">Go To Lesson</a>';
                    $testAccPoints+=10;
                    $userAccPoints+=$row['beg2'];
               }
               if($row['beg3']){
                    $userLevel='Intermediate ';
                    $userLesson='Your Current Lesson is <span class="highlight">1</span> <br><br><a class="go-to-class" href="../dashboard/intermediatelessons.php">Go To Lesson</a>';
                    $testAccPoints+=10;
                    $userAccPoints+=$row['beg3'];
               }
               if($row['interm1']){
                    $userLevel='Intermediate ';
                    $userLesson='Your Current Lesson is <span class="highlight">2</span> <br><br><a class="go-to-class" href="../dashboard/intermediatelessons2.php">Go To Lesson</a>';
                    $testAccPoints+=10;
                    $userAccPoints+=$row['interm1'];
               }
               if($row['interm2']){
                    $userLevel='Intermediate ';
                    $userLesson='Your Current Lesson is <span class="highlight">3</span> <br><br><a class="go-to-class" href="../dashboard/intermediatelessons3.php">Go To Lesson</a>';
                    $testAccPoints+=10;
                    $userAccPoints+=$row['interm2'];
               }
               if($row['interm3']){
                    $userLevel='Advanced ';
                    $userLesson='Your Current Lesson is <span class="highlight">1</span> <br><br><a class="go-to-class" href="../dashboard/advancedlessons.php">Go To Lesson</a>';
                    $testAccPoints+=10;
                    $userAccPoints+=$row['interm3'];
               }
               if($row['adv1']){
                    $userLevel='Advanced ';
                    $userLesson='Your Current Lesson is <span class="highlight">2</span> <br><br><a class="go-to-class" href="../dashboard/advancedlessons2.php">Go To Lesson</a>';
                    $testAccPoints+=10;
                    $userAccPoints+=$row['adv1'];
               }
               if($row['adv2']){
                    $userLevel='Advanced ';
                    $userLesson='Your Current Lesson is <span class="highlight">3</span> <br><br><a class="go-to-class" href="../dashboard/advancedlessons3.php">Go To Lesson</a>';
                    $testAccPoints+=10;
                    $userAccPoints+=$row['adv2'];
               }
               if($row['adv3']){
                    $userLevel='Advanced ';
                    $userLesson='You have completed the Course!'; // <br><a class="go-to-class" href="../dashboard/advancedlessons.php">Collect Certficate</a>
                    $testAccPoints+=10;
                    $userAccPoints+=$row['adv3'];
               }
               // echo $testAccPoints.' '.$userAccPoints;
               
               $userProgress = array();
               array_push($userProgress, $userLevel);
               array_push($userProgress, $userLesson);
               array_push($userProgress, $userAccPoints);
               array_push($userProgress, $testAccPoints);
               $percentage = round(($userProgress[2]/$userProgress[3])*100);
               array_push($userProgress, $percentage);
               array_push($userProgress, $row['beg1']);
               array_push($userProgress, $row['beg2']);
               array_push($userProgress, $row['beg3']);
               array_push($userProgress, $row['interm1']);
               array_push($userProgress, $row['interm2']);
               array_push($userProgress, $row['interm3']);
               array_push($userProgress, $row['adv1']);
               array_push($userProgress, $row['adv2']);
               array_push($userProgress, $row['adv3']);
               
               return $userProgress;
          }
     }