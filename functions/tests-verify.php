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
          private $password   = "";
          private $database   = "cread";
          public  $con;


          public function __construct()
          {
               $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
               if (mysqli_connect_error()) {
                    trigger_error("Failed to connect to MySQL: " . mysqli_connect_errno());
               } else {

                    return $this->con;
               }
          }

          public function test(){
               $score=0;

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
                         }
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
                              if($check == count($qArr)) $score+=1;
                         }
                         elseif($$a == $row['test2'] && $$a != NULL){
                              $score+=1;
                         }
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
                         }
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
                         }
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
                         }
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
                         }
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
                         }
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
                         }
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
                         }
                         if($x >= 10){
                              $stid = $_SESSION['id'];
                              $userScore = "UPDATE users SET adv3 = '$score' WHERE id = '$stid'";
                              $newsql = $this->con->query($userScore);
                         }
                    }
               }
               echo "Score = ".$score;
               return $score;
          }
     }