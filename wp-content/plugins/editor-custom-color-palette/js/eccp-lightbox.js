
/*--------------------------------------------------------------------------
				LIGHTBOX POUR LES ARTICLES ET LES PAGES
---------------------------------------------------------------------------*/
/* 
Ce script utilise la librairie FancyBox dont on charge les fichiers
js & css via un CDN
Il permet d'afficher une lightbox avec vignettes pour les images et galeries
de WordPress pour les thèmes qui ont pour container des articles
ou pages une des classes suivante:
• site-content
• entry-content 

Pour une image simple on ajoute dynamiquement
au lien de l'image l'attribut vide: data-fancybox
pour que l'image s'ouvre dans une lightbox.
On le fait uniquement si le lien href de l'image pointe
vers une image avec une extension valide (jpg, jpeg, png, gif, webp, svg) 
plutôt que vers une page d'un site web.

Pour les images d'une gallerie il faut ajouter dynamiquement
pour chaque lien des différentes images la valeur 
de L'attribut:data-fancybox
data-fancybox="1-gallery" pour la 1ère gallerie
data-fancybox="2-gallery" pour la 2ème gallerie etc...

Pour ajouter une légende avec la librairie Fancybox il faut ajouter
pour tous les liens des images l'attribut data-caption avec pour valeur
la légende de l'image

// structure HTML du bloc image
<figure class="wp-block-image">
	<a href="http://localhost/wp-chef-ocean/wp-content/uploads/2022/12/rock-that-paris-08-optimise.png" data-fancybox="1-gallery" data-caption="Concours Rock 4 You">
		<img  width="1024" height="576" data-id="10446" src="http://localhost/wp-chef-ocean/wp-content/uploads/2022/12/rock-that-paris-08-optimise-1024x576.png">
	</a>
	<figcaption class="wp-element-caption">
		<strong>Concours Rock 4 You</strong> 
	</figcaption>
</figure>
*/


		
jQuery(document).ready(function($){
	
	/*----------------- LES IMAGES --------------------*/
			
	// ancien code
	//$(".site-content,.entry-content").find("figure:not(.fiche,.eccp-not-lightbox) a:has(img)").attr('data-fancybox','');
	
	
	// On cible pour la classe container des articles ou pages
	// • Toutes les images avec un lien
	// Si l'attribut "href" du lien de l'image pointe 
	// vers une image avec une extension valide (jpg, jpeg, png, gif, webp, svg) 
	// plutôt que vers une page d'un site web alors:
	// • on ajoute aux liens des images:
	// l'attribut: data-fancybox vide
	// Pour les thèmes OceanWP, Astra, GeneratePress la classe du container
	// pour les articles et les pages est .site-content
	// Pour le thème DIVI & Blocksy la classe du container 
	// pour les articles et les pages est .entry-content

	$(".site-content,.entry-content").find("figure a:has(img)").each(function() {
		
		// $(this) renvoi le lien de l'image en cours
		// on affecte la variable href avec le lien href de l'image
		var href = $(this).attr('href');
		// Tableau pour les extensions valide des images
		var validExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];
		// on récupère l'extension du lien href
		// split renvoi un tableau de sous-chaine
		// pop() renvoi le dernier élément du tableau
		var extension = href.split('.').pop().toLowerCase();
		
		// Si l'extension du lien "href" de l'image pointe vers une image
		if (validExtensions.includes(extension)) {
		  
			// on ajoute l'attribut data-fancybox vide
			// au lien des images
			$(this).attr('data-fancybox','');
		  
			
			/* Configurations des options de la Fancybox */
			// bind ajoute un gestionnaire d'évènement click
			// a chaque image dont l'attribut: data-fancybox est vide
			// au click on lance Fancybox 
			Fancybox.bind('[data-fancybox=""]', {
				
				// Options Personnalisés de la lightbox
				
				// Barre d'outils(Zoom,play,bouton fermeture etc...)
				// on peut personnaliser en inversant des éléments 
				// entre left et Right
				Toolbar: {
				  display:{
							  // info image 1/16
							  left: [
								"infobar",
							  ],
							  
							  middle: [],
							  
							  // 
							  right: [
								"iterateZoom",
								"slideshow",
								"fullscreen",
								"thumbs",
								"close",
							  ],
							},
				},	

				// initialisation a l'ouverture taille des images
				// "fit" | "cover" | "full" | "max"
				// "adapter" | "couvrir" | "Complet" | "max"
				// protection des images contre téléchargement avec clic droit
				// échelle de zoom: nombre décimal ou entier
				Images: {
					initialSize: "fit",
					protected: true,
					Panzoom: {
					  maxScale: 1.1,
					},
				},
				
				// vignettes
				// option "modern" | "classic" | "false"
				Thumbs: {type: "classic"},
				
				// plein écran a l'ouverture
				Fullscreen:{autoStart: true},

			});// fin configurations des options de la Fancybox
			
			
			/* pour toutes les images, s'il y a une légende
			   Ajout de la légende à l'attribut data-caption du lien de l'image
			*/
			
			// closest retourne le 1er élément figure en remontant l'arborescence
			// depuis le lien de l'image donné par $(this)
			var $figure = $(this).closest('figure');
			// on récupère la légende du bloc image
			var caption = $figure.find('figcaption').text();
			// s'il ya une légende on l'affecte au lien de l'image
			// via l'attribut: data-caption 
			if (caption.length) {
				$(this).attr('data-caption', caption);
			}	
			  
		  
		}// fin si le lien href de l'image pointe vers une image
			
	
	});
	
	/*----------------- LES GALERIES --------------------*/
	
	// on récupère tous les élements qui ont la classe wp-block-gallery
	const gallery_elements = document.querySelectorAll('.wp-block-gallery');
	
	// On récupère le nombre de gallerie
	var gallery_elements_number = gallery_elements.length;

	// pour debug
	//console.log('nombre gallerie: ',gallery_elements_number); 

	// s'il y a des galleries 
	if(gallery_elements_number) {

		for (var index = 0; index < gallery_elements_number; index++) {
			
			// Ancien code qui ne fonctionne pas a partir de trois gallerie
			// on cible toute les images avec un lien du bloc gallerie 
			// 1er enfant du parent a savoir le container des articles ou pages
			// donné par la classe .site-content
			// ceci en commençant à partir de la fin parmi tous les enfants
			// images auxquelles on ajoute l'attribut: data-fancybox="1-gallery" 
			//$('.site-content').find('.wp-block-gallery:nth-last-of-type(1) a:has(img)').attr('data-fancybox','1-gallery');
			// OK thème OceanWP, Astra, GeneratePress 
			//$('.site-content').find('.wp-block-gallery:nth-last-of-type('+ index + ') a:has(img)').attr('data-fancybox',index.toString() + '-gallery'); 
		
			// find permet de cibler toutes les images avec un lien des blocs galeries 
			// qui descendent du container des articles ou page donné par la 						
			// classe .site-content 
			// On utilise la méthode eq() pour sélectionner les galeries en utilisant 
			// l'index de la boucle for. 
			// La méthode eq() sélectionne l'élément d'indice spécifié 
			// dans la collection jQuery.
			// on ajoute aux liens des images de la gallerie l'attribut: 
			// data-fancybox="1-gallery" pour la 1ère gallerie
			// data-fancybox="2-gallery" pour la 2ème gallerie etc...
			// Pour les thèmes OceanWP, Astra, GeneratePress la classe du container
			// pour les articles et les pages est .site-content
			// Pour le thème DIVI & Blocksy la classe du container 
			// pour les articles et les pages est .entry-content
			$('.site-content,.entry-content').find('.wp-block-gallery').eq(index).find('a:has(img)').attr('data-fancybox', (index + 1) + '-gallery'); 
		
			// bind ajoute un gestionnaire d'évènement click aux images
			// on lance Fancybox pour la index gallerie 
			// dont les images ont l'attribut: data-fancybox="index-gallery"
			// soit dans notre exemple:
			// Fancybox.bind('[data-fancybox="1-gallery"]', {						
			Fancybox.bind('[data-fancybox="' + (index + 1).toString() + '-gallery' + '"]', {
				
				// Options Personnalisés 
				
				// Barre d'outils(Zoom,play,bouton fermeture etc...)
				// on peut personnaliser en inversant des éléments 
				// entre left et Right
				Toolbar: {
				  display:{
							  // info image 1/16
							  left: [
								"infobar",
							  ],
							  
							  middle: [],
							  
							  // 
							  right: [
								"iterateZoom",
								"slideshow",
								"fullscreen",
								"thumbs",
								"close",
							  ],
							},
				},	

				// initialisation a l'ouverture taille des images
				// "fit" | "cover" | "full" | "max"
				// "adapter" | "couvrir" | "Complet" | "max"
				// protection des images contre téléchargement avec clic droit
				// échelle de zoom: nombre décimal ou entier
				Images: {
					initialSize: "fit",
					protected: true,
					Panzoom: {
					  maxScale: 1.1,
					},
				},
				
				// vignettes
				// option "modern" | "classic" | "false"
				Thumbs: {type: "classic"},
				
				// plein écran a l'ouverture
				Fullscreen:{autoStart: true},

			});
			
		}// fin boucle for

	}// fin s'il y a des galleries	
			
	
});
		
	    
		
	