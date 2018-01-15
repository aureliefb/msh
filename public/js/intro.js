
$(document).ready(function(){

   // var delay=0;
   // $('.row').children('img').each(function () {
   //    $(this).css("display","none");
   //    $(this).delay(delay).show(800).fadeIn(450);
   //     delay += 450;
   // });

    // $('#animation').show(1000, function () {
    //      setTimeout(function () {
    //          $('#animation').html(function () {
    //              setTimeout(function () {
    //                  $('#animation').fadeOut(1500);        
    //              }, 1000);
    //          });
    //        }, 2500);
    // });

});



//if (window.location.pathname === '' || window.location.pathname === '/') {
    $.when( $.ready ).then(function() {
      $('#content').css("display", "none");
      // console.log("echo echo");
      setTimeout(function() {
        // $('#content').html("");
        $('#animation').fadeOut(800);
        $('#content').fadeIn(4000);
        // $("footer").show();
      }, 2500 /* milliseconds */)
    })
//}

