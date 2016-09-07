/************animation transition : apparition progressive du portofolio**********/

$( document ).ready(function() {

   $("body").css("display", "none");
   $("body").fadeIn(3600);
   $("a.transition").click(function(event){
   event.preventDefault();
   $("body").fadeOut(2000, redirectPage);
    });
 function redirectPage() {
  window.location = linkLocation;
    }

/************function animation de slider sur la barre de navigation******************/
$('a[href^="#"]').click(function(){
	var the_id = $(this).attr("href");

	$('html, body').animate({
		scrollTop:$(the_id).offset().top
	}, 'slow');
	return false;
  });
});
