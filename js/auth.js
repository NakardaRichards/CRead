// function login(){
//      $('.sign-up-form').css('display','none');
//      $('.log-in-form').css('display','block');
// }
// function signup(){
//      $('.log-in-form').css('display','none');
//      $('.sign-up-form').css('display','block');
// }

// alert('Helloworld');
$(".lname-next").click(function(){
     // Check if input is valid

     $( "label[name = 'lname']" ).css('display','block');
     $( "input[name = 'lname']" ).css('display','inline');
     $( ".email-next" ).css('display','inline');
});

$(".email-next").click(function(){
     // Check if input is valid

     $( "label[name = 'email']" ).css('display','block');
     $( "input[name = 'email']" ).css('display','inline');
     $( ".pwd-next" ).css('display','inline');
});

$(".pwd-next").click(function(){
     // Check if input is valid

     $( "label[name = 'pwd']" ).css('display','block');
     $( "input[name = 'pwd']" ).css('display','inline');
     $( ".cpwd-next" ).css('display','inline');
});

$(".cpwd-next").click(function(){
     // Check if input is valid

     $( "label[name *= 'cpwd']" ).css('display','block');
     $( "input[name *= 'cpwd']" ).css('display','inline');

     $( ".signup-next" ).css('display','inline');
     $( ".login-next" ).css('display','inline');
});

$( ".signup-next" ).click(function(){
     $( ".sub-btn" ).css('display','flex');
});
$( ".login-next" ).click(function(){
     $( ".sub-btn" ).css('display','flex');
});