<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="../css/diagnostics.css">
          <title>CRead - Diagnostics</title>
     </head>
     <body>
          <section>
               <div class="dia-div">
                    <h1>Welcome to the CRead Diagnostic Test</h1>
               </div>
               <div class="starter">
                    <div class="start" onclick="nextQ('.ques-1')">Get Started</div>
               </div>
          </section>

          <section class="diag-test ques-1">
               <div class="dia-div">
                    <span>Question 1</span> 
                    <br> 
                    Fill in the blanks in alphabetical order:
                    <br>
                    <label>A</label> <input id="q1" type="text"> <label>C</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-2',$('#q1').val())">Next</button>
               </div>
          </section>

          <section class="diag-test ques-2">
               <div class="dia-div">
                    <span>Question 2</span> 
                    <br> 
                    Fill in the blanks in alphabetical order:
                    <br>
                    <input id="q2" type="text"> <label>M</label> <label>N</label>
                    <br>
                    <!-- <button class="sub-btn" onclick="nextQ('ques-1')">Previous</button> -->
                    <button class="sub-btn" onclick="submit('.ques-3',$('#q2').val())">Next</button>
               </div>
          </section>

          <section class="diag-test ques-3">
               <div class="dia-div">
                    <span>Question 3</span> 
                    <br> 
                    Circle/Pick the vowel from the letter list
                    <br>
                    <button class="multiple choice" value="s">S</button>
                    <button class="multiple choice" value="i">I</button>
                    <button class="multiple choice" value="p">P</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-4',choice)">Next</button>
               </div>
          </section>

          <section class="diag-test ques-4">
               <div class="dia-div">
                    <span>Question 4</span> 
                    <br> 
                    Circle/Pick the vowel from the letter list
                    <br>
                    <button class="multiple choice" value="x">X</button>
                    <button class="multiple choice" value="y">Y</button>
                    <button class="multiple choice" value="z">Z</button>
                    <br>
                    <!-- <button class="sub-btn" onclick="nextQ('ques-1')">Previous</button> -->
                    <button class="sub-btn" onclick="submit('.ques-5',choice)">Next</button>
               </div>
          </section>
          <section class="diag-test ques-5">
               <div class="dia-div">
                    <span>Question 5</span> 
                    <br> 
                    Which letters in the word below are (select all that apply)? 
                    <br>
                    <button class="multiple selects" value="g">G</button>
                    <button class="multiple selects" value="i">I</button>
                    <button class="multiple selects" value="r">R</button>
                    <button class="multiple selects" value="a">A</button>
                    <button class="multiple selects" value="f">F</button>
                    <button class="multiple selects" value="f">F</button>
                    <button class="multiple selects" value="e">E</button>
                    <br>
                    <!-- <button class="sub-btn" onclick="nextQ('ques-1')">Previous</button> -->
                    <button class="sub-btn" onclick="submit('.ques-6',allChoice)">Next</button>
               </div>
          </section>
          <section class="diag-test ques-6">
               <div class="dia-div">
                    <span>Question 6</span> 
                    <br> 
                    Choose a suitable letter to complete the word:
                    <br>
                    <label>H</label> <label>I</label> 
                    <select id="q6">
                         <option aria-placeholder="Select Option"></option>
                         <option value="d">D</option>
                         <option value="y">Y</option>
                         <option value="o">O</option>
                    </select>
                    <label>E</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-7',$('#q6').val())">Next</button>
               </div>
          </section>
          <section class="diag-test ques-7">
               <div class="dia-div">
                    <span>Question 7</span> 
                    <br> 
                    Choose a suitable letter to complete the word:
                    <br>
                    <select id="q7">
                         <option aria-placeholder="Select Option"></option>
                         <option value="r">R</option>
                         <option value="c">C</option>
                         <option value="t">T</option>
                    </select>
                    <label>H</label> <label>I</label> <label>P</label>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-8',$('#q7').val())">Next</button>
               </div>
          </section>
          <section class="diag-test ques-8">
               <div class="dia-div">
                    <span>Question 8</span> 
                    <br> 
                    What part of speech is the highlighted word in the sentence: 
                    They visit the countryside <span style="font-weight:bold;">often</span>.
                    <br>
                    <button class="multiple choice" value="pronoun">Pronoun</button>
                    <button class="multiple choice" value="adverb">Adverb</button>
                    <button class="multiple choice" value="noun">Noun</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-9',choice)">Next</button>
               </div>
          </section>
          <section class="diag-test ques-9">
               <div class="dia-div">
                    <span>Question 9</span> 
                    <br> 
                    <span style="font-weight:bold;">She</span> sleeps all the time.
                    <br>
                    <button class="multiple choice" value="noun">Noun</button>
                    <button class="multiple choice" value="advjective">Adjective</button>
                    <button class="multiple choice" value="pronoun">Pronoun</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-10',choice)">Next</button>
               </div>
          </section>
          <section class="diag-test ques-10">
               <div class="dia-div">
                    <span>Question 10</span>
                    <br> 
                    Which part of this sentence is highlighted? <span style="font-weight:bold;">They</span> ran away.
                    <br>
                    <button class="multiple choice" value="subject">Subject</button>
                    <button class="multiple choice" value="predicate">Predicate</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-11',choice)">Next</button>
               </div>
          </section>
          <section class="diag-test ques-11">
               <div class="dia-div">
                    <span>Question 11</span>
                    <br> 
                    Which part of this sentence is highlighted? Dinah and her cat <span style="font-weight:bold;">left the house</span>.
                    <br>
                    <button class="multiple choice" value="subject">Subject</button>
                    <button class="multiple choice" value="predicate">Predicate</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-12',choice)">Next</button>
               </div>
          </section>
          <section class="diag-test ques-12">
               <div class="dia-div">
                    <span>Question 12</span>
                    <br> 
                    Is this a complete sentence? Running here and there
                    <br>
                    <button class="multiple choice" value="yes">Yes</button>
                    <button class="multiple choice" value="no">No</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-13',choice)">Next</button>
               </div>
          </section>
          <section class="diag-test ques-13">
               <div class="dia-div">
                    <span>Question 13</span>
                    <br> 
                    Is this a complete sentence? They played.
                    <br>
                    <button class="multiple choice" value="yes">Yes</button>
                    <button class="multiple choice" value="no">No</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-14',choice)">Next</button>
               </div>
          </section>
          <section class="diag-test ques-14">
               <div class="dia-div">
                    <span>Question 14</span>
                    <br> 
                    What figure of speech is shown by this sentence? The flowers danced in the wind. 
                    <br>
                    <button class="multiple choice" value="simile">Simile</button>
                    <button class="multiple choice" value="metaphor">Metaphor</button>
                    <button class="multiple choice" value="personification">Personification</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-15',choice)">Next</button>
               </div>
          </section>
          <section class="diag-test ques-15">
               <div class="dia-div">
                    <span>Question 15</span>
                    <br> 
                    The child turned as pale as a white sheet.
                    <br>
                    <button class="multiple choice" value="simile">Simile</button>
                    <button class="multiple choice" value="personification">Personification</button>
                    <button class="multiple choice" value="metaphor">Metaphor</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.ques-16',choice)">Next</button>
               </div>
          </section>
          <section class="diag-test ques-16">
               <div class="dia-div">
                    <span>Question 16</span>
                    <br> 
                    Select the correct word to complete the sentence:
                    <br>
                    <label>They </label> 
                    <select id="q16">
                         <option aria-placeholder="Select Option"></option>
                         <option value="has">has</option>
                         <option value="have">have</option>
                    </select>
                    <label> beautiful dolls.</label>
                    <button class="sub-btn" onclick="submit('.ques-17',$('#q16').val())">Next</button>
               </div>
          </section>
          <section class="diag-test ques-17">
               <div class="dia-div">
                    <span>Question 17</span>
                    <br> 
                    Select the correct word to complete the sentence:
                    <br>
                    <label>None of the boys </label> 
                    <select id="q17">
                         <option aria-placeholder="Select Option"></option>
                         <option value="know">know</option>
                         <option value="knows">knows</option>
                    </select>
                    <label> where the money is.</label>
                    <button class="sub-btn" onclick="submit('.ques-18',$('#q17').val())">Next</button>
               </div>
          </section>
          <section class="diag-test ques-18">
               <div class="dia-div">
                    <span>Question 18</span>
                    <br> 
                    Add the correct punctuation to the end of this sentence:
                    <br>
                    <label>Is Rohan your friend</label> 
                    <select id="q18">
                         <option aria-placeholder="Select Option"></option>
                         <option value=".">.</option>
                         <option value="!">!</option>
                         <option value="?">?</option>
                    </select>
                    <button class="sub-btn" onclick="submit('.ques-19',$('#q18').val())">Next</button>
               </div>
          </section>
          <section class="diag-test ques-19">
               <div class="dia-div">
                    <span>Question 19</span>
                    <br> 
                    Add the correct punctuation to the end of this sentence:
                    <br>
                    <label>Wow</label>
                    <select id="q19">
                         <option aria-placeholder="Select Option"></option>
                         <option value="!">!</option>
                         <option value=".">.</option>
                         <option value="?">?</option>
                    </select>
                    <button class="sub-btn" onclick="submit('.ques-20',$('#q19').val())">Next</button>
               </div>
          </section>
          <section class="diag-test ques-20">
               <div class="dia-div">
                    <span>Question 20</span>
                    <br> 
                    What is the full form of the abbreviation 'Mon.'?
                    <br>
                    <button class="multiple choice" value="monkey">Monkey</button>
                    <button class="multiple choice" value="monday">Monday</button>
                    <button class="multiple choice" value="money">Money</button>
                    <br>
                    <button class="sub-btn" onclick="submit('.send',choice)">Next</button>
               </div>
          </section>
          <section class="diag-test send">
               <div class="dia-div">
                    <h1>You have completed the Diagnostic Test</h1>
                    <p>Click continue to go to the main page</p>
               </div>
               <div class="starter">
                    <a href="../dashboard/Dashboard.php" class="start">Continue</a>
               </div>
          </section>
     </body>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script type="text/javascript" src="../js/main.js"></script>
</html>