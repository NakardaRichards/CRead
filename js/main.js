let ansArr = [];
var choice;
var allChoice = [];

function nextQ(x){
     $("section").css('display','none');
     $(x).css('display','flex');
}

function saveAns(x){
     ansArr.push(x);
}

function submit(x,y){
     nextQ(x);
     saveAns(y);
     console.log(ansArr);
}

$('.choice').click(function(e){
     choice = e.target.value;
     console.log(choice);
});

$('.selects').click(function(e){
     // create a deselect option
     allChoice.push(e.target.value) ;
     console.log(allChoice);
});

function fSubmit(){
     for(let i = 0; i < ansArr.length; i++){
          $('input[name="q'+(i+1)+'"]').val(ansArr[i]);
          console.log($('input[name="q'+(i+1)+'"]').val());
     }

     $('button[name="finish"]').css('display','none');
     $('button[name="send"]').css('display','flex');
}





console.log(ansArr);



// $(".lname-next").click(function(){
//      // Check if input is valid

//      $( "label[name = 'lname']" ).css('display','block');
//      $( "input[name = 'lname']" ).css('display','inline');
//      $( ".email-next" ).css('display','inline');
// });

// $(".email-next").click(function(){
//      // Check if input is valid

//      $( "label[name = 'email']" ).css('display','block');
//      $( "input[name = 'email']" ).css('display','inline');
//      $( ".pwd-next" ).css('display','inline');
// });

// $(".pwd-next").click(function(){
//      // Check if input is valid

//      $( "label[name = 'pwd']" ).css('display','block');
//      $( "input[name = 'pwd']" ).css('display','inline');
//      $( ".cpwd-next" ).css('display','inline');
// });

// $(".cpwd-next").click(function(){
//      // Check if input is valid

//      $( "label[name *= 'cpwd']" ).css('display','block');
//      $( "input[name *= 'cpwd']" ).css('display','inline');

//      $( ".signup-next" ).css('display','inline');
//      $( ".login-next" ).css('display','inline');
// });

// $( ".signup-next" ).click(function(){
//      $( ".sub-btn" ).css('display','flex');
// });
// $( ".login-next" ).click(function(){
//      $( ".sub-btn" ).css('display','flex');
// });
