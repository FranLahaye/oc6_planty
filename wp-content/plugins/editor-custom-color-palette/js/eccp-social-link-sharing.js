/*--------------------------------------------------------------------------
  BLOC SOCIAL ICÔNE AVEC MODIFICATION DU LIEN DE PROFIL EN LIEN DE PARTAGE
---------------------------------------------------------------------------*/
/*
	On utilise la  classe is-style-eccp-social-sharing-link attribué au bloc d'icônes sociales
	par l'option du panneau ECCP Styles des paramètres du bloc.
	le script JS: eccp-social-link-sharing.js
    va modifier l'attribut href de la balise a de chaque icônes sociales
	afin de remplacer les liens de profil par des liens de partage
	l'URL de l'image en avant a été stocké dans une div caché pour les articles & CPT 
	par une fonction php: eccp_get_featured_image_url().
	cette URL est récupéré pour être transmise dans le lien de partage pour Pinterest
	*/
	
	// Construction des URL de partage 
	/*
		URL Twiter : https://twitter.com/intent/tweet/?url={url}&text={text}&via={via}
		• url : URL à partager
		• text : message par défaut du tweet
		• via : compte Twitter pour ajouter un « via @Rock4Temps » par exemple à la fin (optionnel)
		
		URL Facebook: https://www.facebook.com/sharer/sharer.php?u={u}
		• u : URL à partager
		
		URL Pinterest : https://pinterest.com/pin/create/button/?url={url}&media={media}&description={description}
		• url : URL à partager
		• media : URL de l’image à partager
		• description : description par défaut
		
		URL Pinterest : https://www.linkedin.com/shareArticle?mini=true&url={url}&title={title}
		
		URL Whatsapp : https:whatsapp://send?text={title}&url={url}
	*/

jQuery(document).ready(function($){

	var futured_image_url = "";

	// l'url de l'image en avant a été stocké pour les articles & CPT dans une div caché 
	// par la fonction php: eccp_get_featured_image_url().
	// cette div a pour id:  data-featured-image-url
	// c'est pourquoi on vérifie la présence de l'ID: data-featured-image-url
	// avant d'affecter la variable: futured_image_url
	if (document.getElementById("data-featured-image-url")) {
		futured_image_url = document.getElementById("data-featured-image-url").textContent;
	}
	
	/* pour debug 
	console.log('Futured Image:');
	console.log(futured_image_url);
	*/
	
	// Facebook
	var Facebook_Share_Link = "https://www.facebook.com/sharer/sharer.php?u="+encodeURIComponent(document.URL);
	
	// on remplace le lien de profil de l'icône sociale Facebook par un lien de partage
	$('ul.is-style-eccp-social-sharing-link li.wp-social-link-facebook a').attr('href',Facebook_Share_Link);
	
	// Twitter 
	var Twitter_Share_Link = "https://twitter.com/intent/tweet?url="+encodeURIComponent(document.URL)+"&text="+encodeURIComponent(document.title);
	$('ul.is-style-eccp-social-sharing-link li.wp-social-link-twitter a').attr('href',Twitter_Share_Link);
	
	//Pinterest
	var Pinterest_Share_Link = "https://pinterest.com/pin/create/button/?url="+encodeURIComponent(document.URL)+"&media="+encodeURI(futured_image_url)+"&description="+encodeURIComponent(document.title);
	$('ul.is-style-eccp-social-sharing-link li.wp-social-link-pinterest a').attr('href',Pinterest_Share_Link);
	
	//Linkedin
	var Linkedin_Share_Link = "https://www.linkedin.com/shareArticle?mini=true&url="+encodeURIComponent(document.URL)+"&title="+encodeURIComponent(document.title);
	$('ul.is-style-eccp-social-sharing-link li.wp-social-link-linkedin a').attr('href',Linkedin_Share_Link);
	
	//Whatsapp
	var Whatsapp_Share_Link = "whatsapp://send?text="+encodeURIComponent(document.title)+"&body="+encodeURIComponent(document.URL);
	$('ul.is-style-eccp-social-sharing-link li.wp-social-link-whatsapp a').attr('href',Whatsapp_Share_Link);
	
	//E-mail
	var Email_Share_Link = "mailto:?subject="+encodeURIComponent(document.title)+"&body="+encodeURIComponent(document.URL);
	$('ul.is-style-eccp-social-sharing-link li.wp-social-link-mail a').attr('href',Email_Share_Link);

});

