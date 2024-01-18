
jQuery(document).ready(function($) {
	
	// Ajout de la classe wp-block-yoast-faq-block au bloc FAQ Yoast SEO
	$( '.wp-block-yoast-faq-block' ).addClass( 'eccp-yoast-faq-accordion' );
	
	// On masque toutes les réponses aux questions
	$('.eccp-yoast-faq-accordion .schema-faq-question').next('.schema-faq-answer').hide();
	
	// au clic sur une question
	$('.eccp-yoast-faq-accordion .schema-faq-question').click(function(){
		
		// pour l'élément enfant de classe schema-faq-answer du parent sélectionné
		// si cet élément enfant c'est a dire la réponse est masquée
		if ($(this ).next('.schema-faq-answer').is(':hidden')) {
			
			// pour une question ayant une réponse affichée: p:visible
			// (la réponse étant affichée dans une balise p)
			// on supprime la classe faq-q-open
			// alors la fonction slideUp() permet de masquer la réponse 
			// par un glissement vers le haut 
			$('.schema-faq-question').removeClass('eccp-faq-question-open').next("p:visible").slideUp();
			
			// on ajoute la classe eccp-faq-question-open a la question sélectionnée
			$(this).addClass('eccp-faq-question-open');
			
			// pour l'élément enfant de classe schema-faq-answer du parent sélectionné
			// c'est a dire la réponse
			// alors la fonction slideDown() permet d'afficher la réponse
			// par un glisement vers le bas (par défaut le glissement se fait en 400ms)
			$(this ).next('.schema-faq-answer').slideDown(600);
			
		// sinon la réponse est visible pour la question sélectionnée	
		}else {
			
			// on masque la réponse de la question sélectionnée 
			// par un glissement vers le haut
			$( this ).next(".schema-faq-answer").slideUp(600);
			// on supprime la classe eccp-faq-question-open pour la question sélectionnée
			$(this).removeClass('eccp-faq-question-open');
			
		}
			
	})
	
});