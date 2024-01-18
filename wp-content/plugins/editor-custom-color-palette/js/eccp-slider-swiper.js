
/*--------------------------------------------------------------------------
				CONFIGURATION DU SLIDER POUR LE BLOC GALERIE
---------------------------------------------------------------------------*/
/*
Ce script est dépendant de la librairie Swiper dont on charge 
les fichiers js & css via un CDN ainsi que de la fonction
eccp_render_slideshow() déclenché par le Hook render_block
qui permet de modifier le balisage HTML du bloc galerie
pour correspondre au balisage HTML requis par Swiper

Ce script affecte dynamiquement une classe a chaque slider qui varie selon
l'index du slider dans la collection des éléments Jquery.
Ces classes permettent de créer une instance du Swiper différente
pour chaque slider afin de pouvoir configurer les paramètres
de la librairie Swiper tels que la direction, 
la pagination, la navigation, les effets de transition,
la lecture automatique etc...

On récupère les valeurs d'attributs renseignées lors du balisage HTML
qui vont permettre d'appliquer des régles CSS pour:
• La largeur du slider
• Alignement a gauche (le slider étant centré par défaut)
• Activer une lecture automatique ou pas du slider selon un délai

Il réside deux problèmes: 

• Le clic d'une flêche de navigation pour un 
simple slider bloque la lecture automatique d'un autre slider, ensuite
le clic d'une flêche de navigation provoque la transition d'un nouveau
slide sur le slider en lecture automatique.
Le fait d'affficher les flêches de navigation sur le slider
a lecture automatique permet de palier au problème,
alors on les masquera ensuite par régles CSS.

• Pour un slider avec lecture automatique, la gestion de la scrollbar n'est pas 
activé dans les paramètres des modules de la librairie Swiper,
car le défilement automatique de la scrollbar est alors aussi actif 
pour un simple slider présent sur la même page.

*/

jQuery(document).ready(function($){
	
	
	// on récupère tous les élements qui ont la classe .swiper
	const slider_elements = document.querySelectorAll('.swiper');
	
	// On récupère le nombre de galerie transformé en slider
	var slider_elements_number = slider_elements.length;

	// pour debug
	//console.log('nombre gallerie transformé en slider: ',slider_elements_number); 

	// s'il y a des slider 
	if(slider_elements_number) {
		
		for (var index = 0; index < slider_elements_number; index++) {
			
			// une classe est attribué dynamiquement a chaque slider
			// selon son index dans la collection des éléments
			// ayant pour classe .swiper
			// find permet de cibler toutes les slider ayant pour classe .swiper
			// On utilise la méthode eq() pour sélectionner les sliders en utilisant 
			// l'index de la boucle for. 
			// La méthode eq() sélectionne l'élément d'indice spécifié 
			// dans la collection jQuery.
			$('body.page,body.single').find('.swiper').eq(index).addClass( 'eccp-swiper-slider-' + (index + 1)  ); 
			
			// on affecte des variables avec la valeur des attributs du slider
			// qui ont été renseignés lors du balisage HTML	
			// et vont permettre d'appliquer des régles CSS	ou la lecture automatique		
			var slider_width = $('.eccp-swiper-slider-' + (index + 1)).attr('slider-width');
			var slider_align_center = $('.eccp-swiper-slider-' + (index + 1)).attr('slider-align-center');
			var slider_autoplay_delay = $('.eccp-swiper-slider-' + (index + 1)).attr('slider-autoplay-delay');
			var slider_width_scrollbar = $('.eccp-swiper-slider-' + (index + 1)).attr('slider-width-scrollbar');
			var slider_width_arrows = $('.eccp-swiper-slider-' + (index + 1)).attr('slider-with-arrows');
			
			// régle CSS pour la largeur du container du slider
			$('.eccp-swiper-slider-' + (index + 1)).css({'width':slider_width});
			
			// si le slider n'est pas centré
			// le container du slider est centré par défaut avec les régles:
			// margin-left:auto margin-right:auto que l'on inhibe
			if (!slider_align_center){
				$('.eccp-swiper-slider-' + (index + 1)).css({'margin-left':'inherit'});
				$('.eccp-swiper-slider-' + (index + 1)).css({'margin-right':'inherit'});
			}
			
			// si on n'a pas activé la lecture automatique
			if (!slider_autoplay_delay){
			
				// si on a activé la scrollbar
				if (slider_width_scrollbar) {
				
					// Code JavaScript pour initialiser une instance du Swiper 
					// selon la classe attribué dynamiquement a chaque slider
					const swiper = new Swiper('.eccp-swiper-slider-' + (index + 1), {
						
						
						/*----- Paramètres optionnel ------*/
						
						direction: 'horizontal',
						
						// boucler les slides
						loop: true,
						
						// adapte la hauteur du container à la hauteur 
						// du slide actif
						autoHeight: true,
						
						// nombre de slide visible en même temps
						slidesPerView : "1", // ou "auto" non compatible avec l'effet fondu
						
						// durée de transition entre les diapositives en millisecondes
						speed: 900,
						
						// curseur en forme de main
						grabCursor: true,
						
						
						/*------- Les Modules ----------*/
						
						// pagination par bullets
						pagination: {
							el: '.swiper-pagination',
							// type: bullets , fraction(affiche 1/4),
							type: 'bullets',
							clickable: true,
							// s'il y a beaucoup de slide
							// permet de ne garder que quelques bullets visible 
							dynamicBullets: true,
							// nombre de bullet visible en même temps 
							// lorsque dynamicBullets: true 
							dynamicMainBullets: 8,
						},
						
						// Flêches de Navigation 
						navigation: {
							nextEl: '.swiper-button-next',
							prevEl: '.swiper-button-prev',
						},
						
						// Scrollbar 
						scrollbar: {
							el: '.swiper-scrollbar',
							draggable: true,
						},
						
						// navigation au clavier
						keyboard: {
							enabled: true,
							onlyInViewport: false,
						},
						
						/* navigation avec molette souris
						mousewheel: {
							// navigation aussi en sens inverse de la molette
							invert: true,
							//Delta de défilement minimal de la molette de la souris 
							// pour déclencher le changement de slide
							thresholdDelta: 15,
						},*/
						
						/* lecture automatique en millisecondes  
						autoplay: {
						   delay: 3500 ,
						   // pause lorsque la souris survole le container
						   pauseOnMouseEnter: true,
						},*/
						
						
						/*----- effet de transition ---- */
						
						/* effet de fondu */
						effect: 'fade',
						fadeEffect: {
							// active le fondu enchainé
							crossFade: true
						},
						
						/* effet retournement
						effect: 'flip',
						flipEffect: {
							slideShadows: false,
						}, */
						
						/* effet coverflow 
						effect: 'coverflow',
						coverflowEffect: {
							rotate: 50,// rotation en degrés
							stretch: 0,// Étirer l'espace entre les diapositives (en px)
							depth: 100, // Décalage de profondeur en px
							modifier: 1,// Multiplicateur d'effet
							slideShadows: true,// Active les ombres des diapositives
						},*/
						
						/* effet cubique 
						effect: 'cube',
						cubeEffect: {
							//Active l'ombre du curseur principal
							shadow: true,
							shadowOffset: 20,
							shadowScale: 0.94,
							// Active les ombres des diapositives
							slideShadows: true,
						},*/
						
						
						/* effet de carte 
						effect: 'cards',
						cardsEffect: {
							perSlideOffset: 8,// Distance de décalage par slide (en px)
							perSlideRotate: 2, // Angle de rotation par diapositive (en degrés)
							rotate: true,// Permet la rotation des cartes
							slideShadows: true,// Active les ombres des diapositives
							// ...
						},*/
						
					});
				
				// sinon on n'a pas activé la scrollbar
				}else{
					
					// Code JavaScript pour initialiser une instance du Swiper 
					// selon la classe attribué dynamiquement a chaque slider
					const swiper = new Swiper('.eccp-swiper-slider-' + (index + 1), {
						
						
						/*----- Paramètres optionnel ------*/
						
						direction: 'horizontal',
						
						// boucler les slides
						loop: true,
						
						// adapte la hauteur du container à la hauteur 
						// du slide actif
						autoHeight: true,
						
						// nombre de slide visible en même temps
						slidesPerView : "1", // ou "auto" non compatible avec l'effet fondu
						
						// durée de transition entre les diapositives en millisecondes
						speed: 900,
						
						// curseur en forme de main
						grabCursor: true,
						
						
						/*------- Les Modules ----------*/
						
						// pagination par bullets
						pagination: {
							el: '.swiper-pagination',
							// type: bullets , fraction(affiche 1/4),
							type: 'bullets',
							clickable: true,
							// s'il y a beaucoup de slide
							// permet de ne garder que quelques bullets visible 
							dynamicBullets: true,
							// nombre de bullet visible en même temps 
							// lorsque dynamicBullets: true 
							dynamicMainBullets: 8,
						},
						
						// Flêches de Navigation 
						navigation: {
							nextEl: '.swiper-button-next',
							prevEl: '.swiper-button-prev',
						},
						
						// navigation au clavier
						keyboard: {
							enabled: true,
							onlyInViewport: false,
						},
						
						/*----- effet de transition ---- */
						
						/* effet de fondu */
						effect: 'fade',
						fadeEffect: {
							// active le fondu enchainé
							crossFade: true
						},
						
					});
					
				}// fin si scrollbar est activé
			
			// sinon on a activé la lecture automatique
			}else{
				
				// si on n'a pas activé la navigation par flêches
				// on masque les flêches de navigation affichées par défaut
				// pour palier a l'arrêt de la lecture automatique du slider
				// lorsqu'on a cliqué sur une flêche de navigation
				// d'un autre slider présent sur la même page
				if(!slider_width_arrows){
					$('.eccp-swiper-slider-' + (index + 1) + ' .swiper-button-prev').css({'display':'none'});
					$('.eccp-swiper-slider-' + (index + 1) + ' .swiper-button-next').css({'display':'none'});
				}
				
				// Code JavaScript pour initialiser une instance du Swiper
				// en lecture automatique 
				// selon la classe attribué dynamiquement a chaque slider
				const swiper = new Swiper('.eccp-swiper-slider-' + (index + 1), {
					
					
					/*----- Paramètres optionnel ------*/
					
					direction: 'horizontal',
					
					// boucler les slides
					loop: true,
					
					// adapte la hauteur du container à la hauteur 
					// du slide actif
					autoHeight: true,
					
					// nombre de slide visible en même temps
					slidesPerView : "1", // ou "auto" non compatible avec l'effet fondu
					
					// durée de transition entre les diapositives en millisecondes
					speed: 900,
					
					// curseur en forme de main
					//grabCursor: true,
					
					
					/*------- Les Modules ----------*/
					
					// pagination par bullets
					pagination: {
						el: '.swiper-pagination',
						// type: bullets , fraction(affiche 1/4),
						type: 'bullets',
						//clickable: true,
						// s'il y a beaucoup de slide
						// permet de ne garder que quelques bullets visible 
						dynamicBullets: true,
						// nombre de bullet visible en même temps 
						// lorsque dynamicBullets: true 
						dynamicMainBullets: 8,
					},
					
					// Flêches de Navigation 
					navigation: {
						nextEl: '.swiper-button-next',
						prevEl: '.swiper-button-prev',
					},
					
					/* Scrollbar 
					on ne l'active pas car le défilement automatique
					de la scrollbar est aussi activé pour un simple slider
					scrollbar: {
						el: '.swiper-scrollbar',
						draggable: true,
					},*/
					
					
					/* lecture automatique en millisecondes */ 
					autoplay: {
					   delay: slider_autoplay_delay ,
					   pauseOnMouseEnter: true,// pause lorsque la souris survole le container
					},
					
					
					/*----- effet de transition ---- */
					
					/* effet de fondu */
					effect: 'fade',
					fadeEffect: {
						// active le fondu enchainé
						crossFade: true
					},
					
				});
				
				
			}// fin si on n'a pas activé la lecture automatique
			
		}// fin boucle for

	}// fin s'il y a des slider 
	

});