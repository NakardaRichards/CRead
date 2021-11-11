<?php
     // 1. Fill in the blanks: A __ C
     // 2. Fill in the blanks: ___ M N
     // 3. Circle the vowel: S I P
     // 4. Circle the vowel: X Y Z
     // 5. Which vowels are in this word? Giraffe
     // 6. Choose a letter to complete the word: Hi__e (o, y, d)
     // 7. Choose a letter to complete the word: __hip (T, R, C)
     // 8. What part of speech is the highlighted word in the sentence: They visit the 
     // countryside often. (Pronoun, Noun, Adverb)
     // 9. She sleeps all the time. (Noun, Pronoun, Adjective)
     // 10. Which part of this sentence is highlighted? They ran away (Subject/ Predicate)
     // 11. Which part of this sentence is highlighted? Dinah and her cat left the house. (Subject/ 
     // Predicate)
     // 12. Is this a complete sentence? Running here and there (Yes/ No)
     // 13. Is this a complete sentence? They played. (Yes/ No)
     // 14. What figure of speech is shown by this sentence? The flowers danced in the wind. 
     // (simile, metaphor, personification)
     // 15. The child turned as pale as a white sheet. (simile, metaphor, personification)
     // 16. Select the correct word to complete the sentence: They (has, have) beautiful dolls.
     // 17. Select the correct word to complete the sentence: None of the boys (know, knows) 
     // where the money is.
     // 18. Add the correct punctuation to the end of this sentence: Is Rohan your friend (./!/?)
     // 19. Wow (./!/?)
     // 20. What is the full form of the abbreviation Mon.? (Monkey, Monday, Money


     // Answers
     // 1. b
     // 2. l
     // 3. i
     // 4. y
     // 5. i,a,e (array)
     // 6. d
     // 7. c
     // 8. adverb
     // 9. pronoun
     // 10. subject
     // 11. predicate
     // 12. no
     // 13. yes
     // 14. metaphor
     // 15. simile
     // 16. have
     // 17. know
     // 18. ?
     // 19. !
     // 20. monday

     // diagnostics database fields:
     // questionid (same as question number)
     // correctanswer (answer(s) for the question)
     // ?givenanswer (answer(s) given by the user)
     class diagnostic{

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

          public function diagnosis(){
               $score=0;
               for ($x = 1; $x <= 20; $x++) {
                    $a = 'q'.$x;
                    // $$a = strtolower($_POST['q'.$x]);
                    $$a = strtolower($_POST[$a]);
                    $query = "SELECT ans FROM diagnostics WHERE qid ='$x'";
                    $sql = $this->con->query($query);
                    $row = $sql->fetch_assoc();
                    if($$a == $row['ans'] && $$a != NULL && $x != 5){
                         $score+=1;
                    }
                    elseif($$a != NULL && $x == 5){
                         $qArr = explode(' ', $row['ans']);
                         if($$a[0]==$qArr[0] && $$a[2]==$qArr[1] && $$a[4]==$qArr[2]){
                              $score+=1;
                         }
                    }
               }
               
               echo "Score = ".$score;
          }
     }
