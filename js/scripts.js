$(function(){

  $(".icon-angle-double-up").click(function() {
       $("#top-bar").slideToggle(1000);

       setTimeout(function(){$(".icon-angle-double-up").toggleClass('icon-angle-double-down');},1000);
       });

   $(".icon-angle-double-down").click(function() {
        $("#top-bar").slideToggle(1000);
        setTimeout(function(){$(".icon-angle-double-down").toggleClass('icon-angle-double-up icon');},1000);
   });

   $.scrollTo(0);

   $('#link1').click(function() {
     $.scrollTo($('#delivery_company'),700);
   });

   $('#link2').click(function() {
     $.scrollTo($('#food_warehouse'),700);
   });
});
