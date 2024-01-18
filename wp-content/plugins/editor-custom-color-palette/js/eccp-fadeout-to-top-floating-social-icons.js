// script pour le bloc Icônes sociales de classe is-style-eccp-social-icons-floating-right
// ou de classe is-style-eccp-social-icons-floating-left
// cache le bloc pour une position haute < 1000
// apparition du bloc avec un fading pour une position haute > 1000

jQuery(document).ready(function($){
	
	$(window).scroll(function(){
        if ($(this).scrollTop() < 1000) {
			$('.is-style-eccp-social-icons-floating-right') .fadeOut();
			$('.is-style-eccp-social-icons-floating-right').css('opacity','0');
        } else {
			// au chargement de la page on a masqué le bloc icônes sociales
			// par la règle CSS opacity:0 
			// on rétabli pour un  scroll > 1000 l'opacité a 1
			$('.is-style-eccp-social-icons-floating-right').css('opacity','1');
            $('.is-style-eccp-social-icons-floating-right') .fadeIn();
        }
    });
	
	$(window).scroll(function(){
        if ($(this).scrollTop() < 1000) {
            $('.is-style-eccp-social-icons-floating-left') .fadeOut();
			$('.is-style-eccp-social-icons-floating-left').css('opacity','0');
        } else {
			$('.is-style-eccp-social-icons-floating-left').css('opacity','1');
            $('.is-style-eccp-social-icons-floating-left') .fadeIn();
        }
    });
	
});