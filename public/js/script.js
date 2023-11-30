$(document).ready(function() {
    // executes when HTML-Document is loaded and DOM is ready
   console.log("document is ready");
     
   
     $( ".card" ).hover(
     function() {
       $(this).addClass('shadow-lg').css('cursor', 'pointer'); 
     }, function() {
       $(this).removeClass('shadow-lg');
     }
   );


   $( ".plus-icon" ).hover(
    function() {
      $(this).addClass('bi bi-plus-circle').css('cursor', 'pointer'); 
    }, function() {
      $(this).removeClass('bi bi-plus-circle');
    }
  );
     
  $( ".back-icon" ).hover(
    function() {
      $(this).addClass('bi bi-arrow-left-circle').css('cursor', 'pointer'); 
    }, function() {
      $(this).removeClass('bi bi-arrow-left-circle');
    }
  );
  
 

 

   });