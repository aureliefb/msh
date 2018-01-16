$(function(){

//light green en touche   
$('.select').on('focus', function(e) {
   $(this).css('background-color', 'lightgreen');
   });

   $('.select').on('blur', function(e) {
      $(this).css('background-color', 'white');
   });
   


// messages d'erreurs   
$('form').on('submit',function(e)
   {
   //e.preventDefault();
   var email = $('input[name=nom_produit]').val();
   console.log(email);
      if (email =="") {
      e.preventDefault();
      $('.select').css('background-color', '#FF6666');
      $('.response').text("*informations manquantes").css("color", 'red');
      }
   });



$('form').on('submit',function(e)
   {
//e.preventDefault();
      var name = $('input[name=nom_boutique]').val();
      console.log(name);
      if (name =="")
      {
      e.preventDefault();
      $('.select').css('background-color', '#FF6666');
      $('.response').text("*informations manquantes").css("color", 'red');
      }
   });




$('form').on('submit',function(e)
   {
//e.preventDefault();
   var text = $('input[name=nom_produit]').val();
   console.log(text);
      if (text =="") {
      e.preventDefault();
      $('.select').css('background-color', '#FF6666');
      $('.response').text("*informations manquantes").css("color", 'red');
      }
   });




$('#inscription').on('submit',function(e)
   {
//password validation test
   var password = $('input[type=password]').val();
   var passwordCheck = $('input[name=passwordcheck]').val();
   if (password != passwordCheck) {
      e.preventDefault();
      $('.select').css('background-color', '#FF6666');
      $('.response').text("*Password pas correct").css("color", 'red');
      }
   });
   
});   


   

