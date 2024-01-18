/*----------------------------------------------------------------------------------------
  SUPPRIMER L'INSERTION DE BLOCS RÉUTILSABLE AVANT ET/OU APRÉS LE CONTENU DE PUBLICATIONS
-----------------------------------------------------------------------------------------*/
/*
	script pour mettre a jour les champs checkbox de l'edition rapide
	en fonction de la valeur des métas de publication:
	remove_blocks_before_content & remove_blocks_after_content
	affiché dans les lignes de publications
*/


jQuery(document).ready(function($){

	// si on  est sur l'écran d'édition rapide alors inlineEditPost est définie 
	if (typeof inlineEditPost !== 'undefined') { // Vérifie si la variable inlineEditPost est définie
	
		const wp_inline_edit_function = inlineEditPost.edit;

		// On utilise le hook  inlineEditPost.edit
		//pour mettre a jour les champs checkbox de l'edition rapide
		inlineEditPost.edit = function( post_id ) {

			// On fusionne les arguments de la fonction d'origine
			wp_inline_edit_function.apply( this, arguments );

			// obtenir l'ID de publication 
			if ( typeof( post_id ) == 'object' ) { // s'il s'agit d'un objet, obtenez l'ID
				post_id = parseInt( this.getId( post_id ) );
			}

			// définir la ligne pour la variable edit_row qui met a jour le champ checkbox de l'edition rapide
			// définir la ligne de publication pour la variable post_row qui permet de récupérer la valeur
			// de la méta de publication remove_blocks_before_content & remove_blocks_after_content 
			// chaque ligne de publication ayant un id établi par WordPress en fonction de l'id de publication
			// selon le format suivant: #edit-post_id soit par exemple id="post-7973"
			const edit_row = $( '#edit-' + post_id )
			const post_row = $( '#post-' + post_id )

			// on récupère les données dans les colonnes
			// ayant pour id : remove_blocks_before_content & remove_blocks_after_content	
			// a partir duquel WordPress ajoute les classes suivantes aux en-têtes de colonne:
			// column-remove_blocks_before_content & column-remove_blocks_after_content
			// si le contenu de la colonne = 'oui' ou 'yes'	alors on initialise la variable a true sinon false
			const removeBlocksBeforeContent = 'oui'  == $( '.column-remove_blocks_before_content', post_row ).text() ? true : false;
			const removeBlocksAfterContent = 'oui'   == $( '.column-remove_blocks_after_content', post_row ).text() ? true : false;

			// mise a jour des champs checkbox de l'edition rapide avec les données des colonnes
			// en fonction de l'attribut name du champ
			$( ':input[name="remove-blocks-before-content"]', edit_row ).prop( 'checked', removeBlocksBeforeContent );
			$( ':input[name="remove-blocks-after-content"]', edit_row ).prop( 'checked', removeBlocksAfterContent );
			
		}
		
	}// fin si on  est sur l'écran d'édition rapide
	
});