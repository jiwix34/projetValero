/*scroll vers le bas sur la section concernée quand on clique sur les éléments de la barre de nav*/

$(document).ready(function() {

		$('.js-scrollTo').on('click', function() { // Au clic sur un élément

			var page = $(this).attr('href'); // Page cible
			var speed = 1000; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top-70}, speed ); // Go + ecart entre barre de nav & titre de chaque section au scroll

			return false;
		});
	});

/*fonction pour fixer la barre de nav des qu'on sort de la section accueil*/
$(window).scroll(function() {
 var hauteurHeader = $(".opaque").height();
  if ($(this).scrollTop() > hauteurHeader){
		$('.containernav').addClass('navfix');
    	$('.toutessections').css({'margin-top': "80px"});
	} else {
		$('.containernav').removeClass('navfix');
	}
});
