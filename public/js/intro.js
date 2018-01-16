
$(document).ready(function(){

if ($("#animation").length > 0) {

    var delay=0;
    $('#content').css("display", "none");
    $("footer").css("display", "none");
    $('.row').children('img').each(function ()
    {
          $(this).css("display","none");
          $(this).delay(delay).show(1050).fadeIn(550);
          delay += 1000;
    });
    $("#animation").delay(8000).fadeOut();
    $("#content").delay(8000).fadeIn();
    $("footer").delay(8000).fadeIn();

}
    
/*
$('#animation').show(1000, function () {
     setTimeout(function () {
        $('#animation').html(function () {
           setTimeout(function () {
               $('#animation').html("#content");        
              }, 1000);
         });
       }, 10000);
 });



*/
});



// if (window.location.path === '' || window.location.path === '/') {
//     $.when( $.ready ).then(function() {
//       $('#content').css("display", "none");
//       // console.log("echo echo");
//       setTimeout(function() {
//         // $('#content').html("");
//         $('#animation').fadeOut(800);
//         $('#content').fadeIn(4000);
//         // $("footer").show();
//       }, 2500 /* milliseconds */)
//     })
//}

