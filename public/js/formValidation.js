$(function(){


//light green en touche   
$('.select').on('focus', function(e) {
   $(this).css('background-color', 'lightgreen');
   });

   $('.select').on('blur', function(e) {
      $(this).css('background-color', 'white');
   });




   



// messages d'erreurs   
$('form').on('submit',function(e) {
   e.preventDefault();
   var email = $('input[name=nom_produit]').val();
   console.log(email);
      if (email =="") {
         $('.select').css('background-color', '#FF6666');
         $('.response').text("*informations manquantes").css("color", 'red');
      }
   });





$('form').on('submit',function(e) {
      e.preventDefault();
      var name = $('input[name=nom_boutique]').val();
      var adresse = $('textarea[name=adresse]').val();
      var horaires = $('textarea[name=horaires]').val();
      var telephone = $('input[name=telephone]').val();
      if ((name == "") && (adresse == "") && (horaires == "") && (telephone == "")) {
         $('.select').css('background-color', '#FF6666');
         $('.response').text("Informations manquantes").css("color", 'red');
      } else {
         $('.response').text("Bien ajouté").css("color", "green");
      }
   });





$('form').on('submit',function(e) {
   e.preventDefault();
   var text = $('input[name=nom_produit]').val();
   var categorie = $('select[name=categorie]').val();
   var description = $('textarea[name=description]').val();
   var allergenes = $('input[name=allergene[]]').val();
   var photo = $('input[name=photo]').val();
   
   if ((text == "") && (categorie == "") && (description == "") && (allergenes == "") && (photo == "")) {
         $('.select').css('background-color', '#FF6666');
         $('.response').text("*informations manquantes").css("color", 'red');
      } else {
         $('.response').text("Nouveau produit bien ajouté").css("color", "green");
      }
   });





$('#inscription').on('submit',function(e) {
//password validation test
   e.preventDefault();
   var password = $('input[type=password]').val();
   var passwordCheck = $('input[name=passwordcheck]').val();
   if (password != passwordCheck) {
      $('.select').css('background-color', '#FF6666');
      $('.response').text("*Password pas correct").css("color", 'red');
      }
   });






});   
