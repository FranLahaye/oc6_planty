/*
Script Jquery pour Editer L'Image Mise En Avant pour les champs d'édition rapide

On utilise le composant Media upload de WordPress pour la sélection d'image

Lorsqu'on ajoute des champs personnalisés à la modification rapide, 
on doit mettre à jour les valeurs de champ avec le hook save_post, 

add_action( 'save_post', 'quick_edit_save' );
function quick_edit_save( $post_id ){

	// update id vignette image en avant
	$id_thumbnail = ! empty( $_POST[ '_thumbnail_id' ] ) ? absint( $_POST[ '_thumbnail_id' ] ) : 0;
 	update_post_meta( $post_id, '_thumbnail_id', $id_thumbnail );
}

Comme on utilise pour l'attribut name du champ input de l'image mise en avant,
un champ natif de WordPress c'est a dire : _thumbnail_id (id de la vignette pour l'image en avant)
alors ce sera inutile, il sera automatiquement sauvegardé par WordPress.

Lorsqu'on transmet un numéro pour l'ID, la pièce jointe avec l'ID spécifique sera définie comme image en vedette
quand on passe -1 pour l'id, l'image sélectionnée sera supprimée.
*/



jQuery(document).ready( function($){
	
	// pour Debug
	//alert('le script JS est bien chargé')

	/*---------- Ajout d'image --------*/
	
	// lorsqu'on clique sur le bouton Supprimer Image
	$('body').on( 'click', '.upload-img', function( event ) {
		
		// évite le rechargement de la page
		event.preventDefault();

		const button = $(this);
		
		// pour Debug
	    //alert('le script JS est bien chargé')
		
		// on déclare la variable représentant une instance du composant Media Upload
		const customUploader = wp.media({
			title: 'Sélectionner Image En Avant',
			library : { type : 'image' },
			button: { text: 'Sélectionner Image' },
		}).on( 'select', () => {
			// on récupère l'URL de la première image sélectionné avec la méthode first()
			// on récupère un objet qui n'est pas trés pratique a utilisé
			// on le converti en Json avec la méthode toJSON()
			const attachment = customUploader.state().get('selection').first().toJSON();
			// Lorsqu'un fichier est sélectionné, on récupère l'URL de l'image
			// on supprime la classe button du champ input 
			// on affecte comme valeur du champ de texte l'id de l'image et on affiche l'image mise en avant via son url
			button.removeClass('button').html( '<img src="' + attachment.url + '" />').next().val(attachment.id).parent().next().show();
		}).open();

	});


	/*------------- Suppression image-----------*/
	
	// lorsqu'on clique sur le lien Supprimer Image
	$('body').on('click', '.remove-img', function( event ) {
		// pour Debug
	    // alert('le script JS est bien chargé')
		event.preventDefault();
		// on affecte la valeur -1  au champ input de l'image soit son id
		// on ajoute la classe button
		$(this).hide().prev().find( '[name="_thumbnail_id"]').val('-1').prev().html('Select Image').addClass('button' );
	});

	// si on  est sur l'écran d'édition rapide alors inlineEditPost est définie 
	if (typeof inlineEditPost !== 'undefined') { // Vérifie si la variable inlineEditPost est définie
	
		// inlineEditPost gère la fenêtre d'édition rapide
		const $wp_inline_edit = inlineEditPost.edit;

		inlineEditPost.edit = function( id ) {
			$wp_inline_edit.apply( this, arguments );
			let postId = 0;
			if( typeof( id ) == 'object' ) {
				postId = parseInt( this.getId( id ) );
			}

			if ( postId > 0 ) {
				const editRow = $( '#edit-' + postId )
				const postRow = $( '#post-' + postId )
				const featuredImage = $( '.column-featured_image', postRow ).html()
				const featuredImageId = $( '.column-featured_image', postRow ).find('img').data('id')

				// si l'id est différent de -1
				// on affiche l'image avec en dessous son lien supprimer
				if( featuredImageId != -1 ) {

					$( ':input[name="_thumbnail_id"]', editRow ).val( featuredImageId ); // ID
					$( '.upload-img', editRow ).html( featuredImage ).removeClass( 'button' ); // image HTML
					$( '.remove-img', editRow ).show(); // affichage du lien

				}
			}
		}
		
	}// fin si on  est sur l'écran d'édition rapide
	
});