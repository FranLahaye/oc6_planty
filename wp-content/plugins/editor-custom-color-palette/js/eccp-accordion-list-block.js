/*-------------------------------------------------------------
        BLOC FAQ YOAST SEO TRANSFORMÉ EN ACCORDEON
--------------------------------------------------------------*/
	/*
	On utilise conjointement les régles CSS et le script JS ci-dessous
	Script JS: eccp-accordion-list-block.js
	dans les paramètres du bloc liste panneau Style on sélectionne le style accordéon
	pour attribuer la classe is-style-eccp-accordion-bullet-list au bloc liste
    la question est le 1er item de la liste	
	la réponse est le deuxième item de la liste qu'on a identé
	a l'initialisation du script toutes les réponses sont masquées
	A l'événement click sur le container de la question sélectionnée 
	Alors si la réponse sélectionnée est masquée:
	- si une réponse d'une autre question est visible on la masque et on supprime 
	la classe open au container de la question.
	- on attribue la classe:open au container de la question sélectionnée.
	*/

	/*-----------  Balisage du bloc LISTE transformé en accordéon -------------------*/ 
	/*

	<ul class="is-style-eccp-accordion-bullet-list">
	
		<li class="eccp-accordion-question">Question 1  ----> 1er item de la liste
			<ul class="eccp-accordion-answer"> ----> 2ème item de la liste identé
				<li class="">Réponse 1</li>
			</ul>
		</li>
		
		<li class="eccp-accordion-question">Question 2
			<ul class="eccp-accordion-answer">
				<li class="">Réponse 2</li>
			</ul>
		</li>
		
	</ul>

	*/
	
jQuery(document).ready(function($) {	

	// Ajout de la classe eccp-accordion-question aux balises li de la liste
	$( '.is-style-eccp-accordion-bullet-list li' ).addClass( 'eccp-accordion-question' );

	// Ajout de la classe eccp-accordion-answer a la balise ul qu'on a identé
	// par rapport au 1er item de la liste et qui contient la réponse
	$( '.is-style-eccp-accordion-bullet-list li ul' ).addClass( 'eccp-accordion-answer' );

	// on enlève la classe eccp-accordion-question de la balise li qui contient 
	// la réponse et qui est incorporé dans la balise ul de classe eccp-accordion-answer
	$( '.eccp-accordion-answer li' ).removeClass( 'eccp-accordion-question' );

	// on récupère tous les item de la liste qui ont la classe eccp-accordion-question
	const accordion_items = document.querySelectorAll('.eccp-accordion-question');

	// pour tous les items de la liste de classe eccp-accordion-question
	accordion_items.forEach(elem =>

		// pour l'évènement click
		elem.addEventListener('click', () => {
			
			// si l'item de la liste a la classe open on la supprime
			if (elem.classList.contains('open')) {
				elem.classList.remove('open');
			
			//sinon
			} else {
				
				// pour tous les autres item de la liste on supprime la classe open
				accordion_items.forEach(elem2 => elem2.classList.remove('open'));
				
				// on ajoute la classe open a l'item de la liste sur lequel on a cliqué
				elem.classList.add('open');
			}
		})
		
	);
	
});