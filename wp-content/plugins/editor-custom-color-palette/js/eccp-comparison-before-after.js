/*--------------------------------------------------------------------------
	       COMPARAISON IMAGES AVANT/APRÉS AVEC LE BLOC GALERIE
---------------------------------------------------------------------------*/


/* 
Articles ayant servi de support:
		
l'animation clip-path:
https://css-tricks.com/css-grid-and-custom-shapes-part-3/

pour tout le reste:
https://orangeable.com/css/before-and-after-image-slider

Le concept de ce « slider d’image » est très simple: 

• On n'a besoin que de deux composants, le conteneur d'images 
  et un curseur d'images constitué par un bouton.

• Un script eccp-comparison-before-after.js

Le conteneur d'images est un block galerie de deux images auquel on attribue
la classe is-style-eccp-before-after via les paramètres du bloc 

On modifie dynamiquement via le script le balisage du bloc galerie pour 
ajouter le curseur d'images:
<div class = "slider-button"> </div>

l'aspect du curseur d'image est établi par régles CSS
avec des triangles noir ◄ ► avec un fond de couleur 
comportant une bordure.

Les containers d'images sont les balises <figure> du bloc galerie 
on attribue dynamiquement avec le script:
• la classe eccp_before_image pour la balise <figure> qui contient l'image "AVANT"
• la classe eccp_after_image pour la balise <figure> qui contient l'image "APRÉS"

Le balisage du bloc galerie simplifié est donc:

<figure class="wp-block-gallery is-style-eccp-before-after">

	<figure class="wp-block-image size-large before_image" >
		<img  width="1024" height="576" src="http://localhost/wp-chef-ocean/wp-content/uploads/2022/12/rock-that-paris-02-optimise-1024x576.png">
			<figcaption class="wp-element-caption">
				<mark style="color:#e7be49">
					<strong>AVANT</strong>
				</mark>
			</figcaption>
	</figure>



	<figure class="wp-block-image size-large after_image">
		<img width="1024" height="576" src="http://localhost/wp-chef-ocean/wp-content/uploads/2022/12/rock-that-paris-01-optimise-1024x576.png">
			<figcaption class="wp-element-caption">
					<mark style="color:#e7be49">
						<strong>APRÉS</strong>
					</mark>
			</figcaption>
	</figure>

	<div class="slider-button"> </div>

</figure>

Les deux images de même taille se chevauchent grace aux régles CSS. 
On applique la régle: display: grid; au container principal
du bloc galerie ainsi qu'aux balises <figure> qui contiennent les images.
Deux images de même taille sont empilées l'une sur l'autre grâce  
à la régle CSS grid-area: 1/1.

.wp-block-gallery.is-style-eccp-before-after {
	position: relative;
	display: grid!important;
}


.wp-block-gallery.is-style-eccp-before-after figure {
	display: grid!important;
	grid-area: 1/1;
}

L'effet AVANT/APRÉS repose sur l'animation CSS clip-path,nous avons 
deux états différents :
	1) l'état initial,la moitié de chaque image est révélée et le curseur est positionné au centre.
	2) Lorsque l'on survole le block galerie on récupère la position de la souris
		   pour modifier l'animation clip-path et révéler l'image AVANT ou APRÉS

*/



jQuery(document).ready(function ($) {
    
	
	// pour chaque bloc gallerie de classe .is-style-eccp-before-after
	$(".wp-block-gallery.is-style-eccp-before-after").each(function () {

		var container = $(this);
		
		container.find("figure:first").addClass("eccp_before_image");
        container.find("figure:last").addClass("eccp_after_image");

		// on affecte une variable avec l'élément HTML du curseur d'images
		var cursorContainer = $('<div class = "slider-button"> </div>');
	   
		// append permet d'insérer a la fin du bloc galerie
		// notre curseur pour la comparaison des images
		container.append(cursorContainer);
	   
		//état initial,la moitié de chaque image AVANT & APRÉS est révélée 
		container.find("figure.eccp_before_image").css({"clip-path": "polygon(0 0, 50%  0, 50% 100%, 0% 100%)"});
		
		container.find("figure.eccp_after_image").css({"clip-path": "polygon(50% 0, 100% 0, 100% 100%, 50% 100%)"});

		
		/*----- Le jQuery qui fait la fonction Slider ------ */
		$(".wp-block-gallery.is-style-eccp-before-after").on("mousemove touchmove", function(event) {
			
			var element = $(this);
			
			var sliderPos;

			// si c'est un mouvement tactile sur mobile
			if (event.type === "touchmove") {
				sliderPos = (event.originalEvent.touches[0].pageX - element.offset().left) / element.width() * 100;
			// sinon c'est un mouvement de souris sur PC
			} else {
				sliderPos = (event.pageX - element.offset().left) / element.width() * 100;
			}

			// On affecte dynamiquement la position du curseur d'images
			// qui est une valeur comprise entre 0 et 100 
			// Math.max renvoi la valeur max des paramètres passés entre parenthèse
			// et évite ainsi le débordement du curseur en dehors de [0 100]
			sliderPos = Math.max(0, Math.min(100, sliderPos)); 

			// a l'état initial le curseur d'images est positionné au centre
			// on modifie dynamiquement la position du bouton pour la faire
			// correspondre a celle de la souris
			element.find("div.slider-button").css({left: "calc(" + sliderPos + "% - 19px)"});
			
			// Au survol du block galerie et du déplacement horizontal 
			// on récupère la position de la souris pour modifier 
			// l'animation clip-path et révéler l'image AVANT ou APRÉS
			element.find("figure.eccp_before_image").css({"clip-path": "polygon(0 0, " + sliderPos + "%  0, " + sliderPos + "% 100%, 0% 100%)"});
			element.find("figure.eccp_after_image").css({"clip-path": "polygon(" + sliderPos + "% 0, 100% 0, 100% 100%, " + sliderPos + "% 100%)"});
		
		});

	
	});

});