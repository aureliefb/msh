 $('form').on('submit',function(e)
   {
      //e.preventDefault();
      var email = $('input[name=email]').val();
      console.log(email);
      if (email =="")
      {
         e.preventDefault();
         $('.select').css('background-color', '#FF6666');
        $('.response').text("*missing field").css("color", 'red');
      }
   });
     $('form').on('submit',function(e)
   {
      //e.preventDefault();
      var name = $('input[name=name]').val();
      console.log(name);
      if (name =="")
      {
         e.preventDefault();
         $('.select').css('background-color', '#FF6666');
         $('.response').text("*missing field").css("color", 'red');
      }
   });
     $('form').on('submit',function(e)
   {
      //e.preventDefault();
      var text = $('input[name=text]').val();
      console.log(text);
      if (text =="")
      {
         e.preventDefault();
         $('.select').css('background-color', '#FF6666');
         $('.response').text("*missing field").css("color", 'red');
      }
   });

   $('#inscription').on('submit',function(e)
   {
      //password validation test
      var password = $('input[name=password]').val();
      var passwordCheck = $('input[name=passwordcheck]').val();
      
         if (password != passwordCheck)
               {
                  e.preventDefault();
                  $('.select').css('background-color', '#FF6666');
                  $('.response').text("*Password Not Identical").css("color", 'red');
               }
                     
});
   
   

