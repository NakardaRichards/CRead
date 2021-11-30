<?php
     // diagnostics database fields:
     // questionid (same as question number)
     // correctanswer (answer(s) for the question)
     class diagnostic{

          private $servername = "localhost";
          private $username   = "root";
          private $password   = "cenation2";
          private $database   = "cread2";
          public  $con;

          public function
          __construct()
          {
      
      
              $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
              if (mysqli_connect_error()) {
                  trigger_error("Failed to connect to MySQL: " . mysqli_connect_errno());
              } else {
      
                  return $this->con;
              }
          }
      

          public function diagnosis(){
               $score=0;
               for ($x = 1; $x <= 20; $x++) {
                    $a = 'q'.$x;
                    $$a = strtolower($_POST[$a]);
                    // if(strlen($$a) > 1 && str_contains($$a,',')){
                    if(strlen($$a) > 1 && strpos($$a, ',') !== false){
                         $$a = explode(',', $$a);
                    }

                    $query = "SELECT ans FROM diagnostics WHERE qid ='$x'";
                    $sql = $this->con->query($query);
                    $row = $sql->fetch_assoc();

                    if(is_array($$a)){
                         $qArr = explode(' ', $row['ans']);
                         $check=0;
                         foreach($$a as $val){
                              if(in_array($val,$qArr)) $check++;
                         }
                         if($check == count($qArr)) $score+=1;
                    }
                    elseif($$a == $row['ans'] && $$a != NULL){
                         $score+=1;
                    }
               }
               
               // echo "Score = ".$score;
               $stid = $_SESSION['id'];
               $status = "UPDATE users SET diagDone = true, diagTest = '$score' WHERE id = '$stid'";
               $sql = $this->con->query($status);

               return $score;
          }

          public function chooseLesson($score){
               if($score < 10){
                    header("Location:../dashboard/dashboard.php?lesson=beginner");
               }
               elseif($score > 10 && $score < 15 ){
                    header("Location:../dashboard/dashboard.php?lesson=intermediate");
               }
               elseif($score > 15){
                    header("Location:../dashboard/dashboard.php?lesson=advanced");
               }
               // echo 'Final score is '.$score;
          }
     }
