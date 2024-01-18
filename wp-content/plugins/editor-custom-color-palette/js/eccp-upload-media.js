/*

Ce script JS permet d'ouvrir l'upload media de la médiathèque WordPress au clic d'un bouton, 
et de gérer la sélection d'une image ainsi que la personnalisation de sa taille.

1. La première ligne du script permet de s'assurer que jQuery est prêt à être utilisé.

2. La partie commentée "TÉLÉCHARGEMENT IMAGE AVATAR PERSONNALISÉ" contient le code 
  qui est exécuté lorsque l'utilisateur clique sur le bouton "#upload_image_button". 
  Cette partie utilise l'API wp.media de WordPress pour ouvrir la boîte de dialogue 
  de téléchargement d'images. 
  Si l'utilisateur sélectionne une image, l'URL de l'image est récupérée et affectée 
  à un champ de texte avec l'ID "#upload_image". 
  L'image sélectionnée est également affichée dans une balise image 
  avec l'ID "#upload_image_src".
  Le code est dupliqué dans le cas ou on a un  deuxième bouton de téléchargement dans 
  la même page HTML, ce bouton aura l'id: "#upload_image_button_two"

3. La partie commentée "REGLAGE TAILLE AVATAR PERSONNALISÉ" permet à l'utilisateur 
   de personnaliser la taille de l'image sélectionnée en modifiant la valeur de l'input 
   avec l'ID "#avatar_size". 
   Lorsque la valeur de cet input est modifiée, les attributs "width" et "height" 
   de la balise image avec l'ID "#upload_image_src" sont mis à jour en fonction 
   de la nouvelle taille.

*/



jQuery(document).ready( function($){


	/*----------------------------------------------------------------------------*
	*                    TÉLÉCHARGEMENT IMAGE AVATAR PERSONNALISÉ
	*----------------------------------------------------------------------------*/

	var custom_uploader;
	
	// pour Debug
	//alert('le script JS est bien chargé')

	$('#upload_image_button').click( function(e) {

		
		// évite un rechargement de page
		e.preventDefault();

		//Si l'objet de téléchargement a déjà été créé, rouvrez la boîte de dialogue
		if (custom_uploader) {
			custom_uploader.open();
			return;
		}

		//Instance de l'objet wp.media
		custom_uploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose Image',
			button: {
				text: 'Choose Image'
			},
			/* Pas de sélection multiple image */
			multiple: false
		});

		// Lorsqu'un fichier est sélectionné, on récupère l'URL de l'image
		// et on l'affecte comme valeur du champ de texte
		custom_uploader.on('select', function() {
						
			// on récupère l'URL de la première image sélectionné avec la méthode first()
			// on récupère un objet qui n'est pas trés pratique a utilisé
			// on le converti en Json avec la méthode toJSON()
			var attachment = custom_uploader.state().get('selection').first().toJSON();
			
			// Pour Debug
			//console.log(attachment);
			
			/* Pour une sélection simple */
			
			// l'objet récupéré  attachment a un champ url
			// on affecte l'URL au champ de texte
			$('#upload_image').val(attachment.url);
			
			// on affiche notre image sélectionné dans une balise image
			// et on modifie son attribut src en fonction de l'image sélectionnée
			$('#upload_image_src').attr('src',attachment.url)
			
			/* Fin sélection simple */
			
			/* Pour une sélection multiple
			var attachments = [];
			selection.map( function(attachment){
				attachments.push(attachment.url);
			})
			
			// on utilse la méthode join pour réunir toutes les URL
			// du tableau attachments
			$('#upload_image').val(attachments.join(','));
			
			*/
			
		});

		//Ouvrir la boîte de dialogue de téléchargement
		custom_uploader.open();

	});
	
	
	$('#upload_image_button_two').click( function(e) {

		
		// évite un rechargement de page
		e.preventDefault();

		//Si l'objet de téléchargement a déjà été créé, rouvrez la boîte de dialogue
		if (custom_uploader) {
			custom_uploader.open();
			return;
		}

		//Instance de l'objet wp.media
		custom_uploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose Image',
			button: {
				text: 'Choose Image'
			},
			/* Pas de sélection multiple image */
			multiple: false
		});

		// Lorsqu'un fichier est sélectionné, on récupère l'URL de l'image
		// et on l'affecte comme valeur du champ de texte
		custom_uploader.on('select', function() {
						
			// on récupère l'URL de la première image sélectionné avec la méthode first()
			// on récupère un objet qui n'est pas trés pratique a utilisé
			// on le converti en Json avec la méthode toJSON()
			var attachment = custom_uploader.state().get('selection').first().toJSON();
			
			// Pour Debug
			//console.log(attachment);
			
			/* Pour une sélection simple */
			
			// l'objet récupéré  attachment a un champ url
			// on affecte l'URL au champ de texte
			$('#upload_image_two').val(attachment.url);
			
			// on affiche notre image sélectionné dans une balise image
			// et on modifie son attribut src en fonction de l'image sélectionnée
			$('#upload_image_src_two').attr('src',attachment.url)
			
		});

		//Ouvrir la boîte de dialogue de téléchargement
		custom_uploader.open();

	});
	
	
	/*----------------------------------------------------------------------------*
	*                   REGLAGE TAILLE AVATAR PERSONNALISÉ
	*----------------------------------------------------------------------------*/
	
	var size_avatar;
		     
	// au changement de valeur de l'input pour régler la taille
	// de l'avatar personnalisé
	$('#avatar_size').change(function() {
	  
		// on récupère la valeur de l'input
		size_avatar = $('#avatar_size').val();
		
		// on modifie les attribut width & height de la balise image
		// pour l'avatar personnalisé avec la valeur de la taille 
		// sélectionnée avec l'input
		$('#upload_image_src').attr('width',size_avatar);
		$('#upload_image_src').attr('height',size_avatar);

	});

	// pour Debug
	//console.log(size_avatar);
	//alert('valeur de la taille ' + size_avatar);
	

});
