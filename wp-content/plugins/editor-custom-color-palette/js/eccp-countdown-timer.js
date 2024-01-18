
/*--------------------------------------------------------------------------
				VARIATION DU BLOC GROUPE COUNTDOWN TIMER
---------------------------------------------------------------------------*/
/*
Une post meta:countdown_timer_date_events a été déclaré par la fonction
PHP eccp_register_post_meta().
Le fichier sidebarControlsCountDown.js établi en ReactJS ajoute dans les
paramètres du bloc un panneau ECCP Countdown Timer qui comporte un DatePicker.
La date sélectionnée est affectée a un attribut dateEvents qui met a jour
la post meta:countdown_timer_date_events pour la publication en cours
réciproquement la post meta:countdown_timer_date_events est récupéré
en ReactJS pour initialiser le DatePicker.  
Le hook render_block est utilisé pour modifier en Front End le balisage de 
fin du block groupe de classe is-style-eccp-countdown pour incorporer 
le code HTML de notre compte a rebours contitué par une liste a puce non ordonnée.
la date de l'évènement pour le compte à rebours a été affiché dans une div caché 
par la fonction php: eccp_get_countdown_timer_date_events().
le script JS: eccp-countdown-timer.js va récupérer la date d'èvènement dans cette
balise <div> caché et actualiser l'affichage du compte a rebours toutes les secondes.
*/


jQuery(document).ready(function($){
	
	
	// la date de l'évènement pour le compte à rebours a été affiché dans une div caché 
	// par la fonction php: eccp_get_countdown_timer_date_events().
	// cette div a pour id: data-date-events
	// c'est pourquoi on vérifie la présence de l'ID: data-date-events
	// avant d'affecter la variable: futured_image_url
	if (document.getElementById("data-date-events")) {
		date_events = document.getElementById("data-date-events").textContent;
	}
	
	// Définir la date de fin du compte à rebours
	var countDownDate = new Date(date_events).getTime();

	// Met à jour le compte à rebours toutes les 1 secondes
	var x = setInterval(function() {

		// Récupérer la date et l'heure actuelles
		var date_today = new Date().getTime();
		
		// Ecart en milliseconde
		var time_remaining = (countDownDate - date_today);

		/* pour debug 
		console.log("Temps restant en milliseconde: " + time_remaining);
		*/
		
		if (time_remaining < 0) {
			time_remaining = 0;
		}
		
		// Calculer le nombre de jours, d'heures, de minutes et de secondes restantes
		// floor arrondi a l'entier inférieur
		// exemple pour le nbr de jour: on divise par 1000 pour convertir l'ecart de temps en seconde
		// puis on divise par 60 pour avoir le nbr de minute , a nouveau par 60 pour le nbr d'heure
		// et enfin par 24 pour avoir le nbr de jour.
		var days = Math.floor(time_remaining / (1000 * 60 * 60 * 24));
		var hours = Math.floor((time_remaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((time_remaining % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((time_remaining % (1000 * 60)) / 1000);

		/* pour debug
		console.log("compte a rebours:" + days + "j " + hours + "h "
		+ minutes + "m " + seconds + "s ");
		*/

		// Si la date de fin du compte a rebours n'a pas été atteinte
		// on l'actualise en se basant sur les classes des balises <span> 
		// qui l'affiche
		if ( time_remaining >= 0 ) {
			$('.days').text(caractere(days));
			$('.hours').text(caractere(hours));
			$('.minutes').text(caractere(minutes));
			$('.seconds').text(caractere(seconds));
		}
		
		// mise au format sur deux chiffres pour un temps < 10' ou 10s etc..
		function caractere(nb)
        {
            return (nb < 10) ? '0'+nb : nb;
        }

	}, 1000);
		
});
