<?php

/************************************************************
*
*  Editor Custom Color Palette [REV:3.2.1]  
*
* 
************************************************************/


/* Empêche l'utilisateur public d'accéder directement aux fichiers .php via l'URL
et garantit que les fichiers du plugin seront exécutés uniquement dans l'environnement WordPress.*/
defined( 'ABSPATH' ) || die();


/******************************
 * Setting up the admin pages
 ******************************/

/*  plugins_url( 'editor-custom-color-palette-1.0/img/icon.png' )*/

// On utilise le hook admin menu pour ajouter nos menus 
// pour les pages de réglages du plugin
add_action( 'admin_menu', 'eccp_menu_items' );


 /* On définit  nos éléments de menu*/
 function eccp_menu_items() {
	 
    // On crée un élément de menu de niveau supérieur: ECCP Settings
    add_menu_page(
        __( 'Editor Custom Color Palette General Settings', 'editor-custom-color-palette' ),  // Page title , Text Domain(pour la traduction)
        __( 'ECCP Settings', 'editor-custom-color-palette' ),  // Menu title, Text Domain(pour la traduction)
        'manage_options',                     // Capabilities (Capacités)
        'eccp_settings_page',              // Slug
        'eccp_settings_page_markup',       // Display callback (fonction permettant l'affichage du contenu de la page de réglages)
        EDITOR_CUSTOM_COLOR_PALETTE_URL.'img/admin/eccp-icon-admin.svg',          // Icon
        66                                 // Priority/position. Just after 'Plugins'
    );
	
	

}


/* Fonction de rappel qui va contenir le balisage de la page et donc nos réglages généraux du plugin
   on utilise la classe CSS de wrap, qui est utilisée un peu partout dans l’administration de WordPress 
   - On Affiche le Titre de la page de réglages
   - On place un élément <form> qui va pointer vers options.php , et qui va envoyer ses données en POST.
   - La fonction settings_fields() prend un unique paramètre correspondant au nom d’un groupe de réglages 
     (définit dans setting.php fonction: ecet_multiple_setting() )
     settings_fields() va afficher les champs cachés nécessaires pour traiter notre formulaire:
	 les champs nonce, referer, action, et option_page  
   - La fonction do_settings_sections() permet boucler sur nos sections et afficher les champs de réglages correspondants.
     elle prend en argument le slug de la page de réglages définit dans la fonction: ecet_menu_items() 
   - Le bouton de soumission du formulaire
*/
function eccp_settings_page_markup(){
	
    ?>
	    
        <div class="wrap">
		
            <h1><?php echo esc_html_e( get_admin_page_title(),'editor-custom-color-palette' ); ?></h1> <!-- On Affiche le Titre de la page de réglages avec le text domain donné en référence pour la traduction -->
			
			<?php 
			
			// bouton Démo du plugin
			echo'<div class="demo-button-container">';
				echo '<a class="demo-button" href="https://rouerguecreation.fr/demo-editor-custom-color-palette/" target="_blank">'
						.esc_html__( 'Plugin Demo','editor-custom-color-palette' ).
					 '</a>';
			echo'</div>';
			
			// Bouton de retour en haut de page
			echo'<a href="#top" class="scroll-top"></a>';
			
			/* Table des matières pour la page de réglages Généraux du plugin
			echo '<div class="table-of-content">';
			
				echo '<h2>'.esc_html__( 'Table of content','editor-custom-color-palette' ).'</h2>';
			
				echo'<div id="block-left">';
			
				echo '<a href="#section_default_settings">'. esc_html__( 'Default settings', 'editor-custom-color-palette' ).'</a>';
				echo'<br><br>';	
				
				echo '<a href="#section_editor_color_palette">'. esc_html__( 'EDITOR COLOR PALETTE GUTENBERG', 'editor-custom-color-palette' ).'</a>';
				echo'<br>';
				echo '<a href="#sub-title-editor-color-palette-one" class="sub-title">'. esc_html__( 'customizing color palette', 'editor-custom-color-palette' ).'</a>';
				echo'<br>';
				echo '<a href="#sub-title-editor-color-palette-two" class="sub-title">'. esc_html__( 'Disabling custom colors & gradients', 'editor-custom-color-palette' ).'</a>';
				echo'<br><br>';
				
				echo '<a href="#section_editor_text_size">'. esc_html__( 'EDITOR TEXT SIZES', 'editor-custom-color-palette' ).'</a>';
				echo'<br>';
				echo '<a href="#sub-title-editor-text-size-one" class="sub-title">'. esc_html__( 'Customize the text sizes', 'editor-custom-color-palette' ).'</a>';
				echo'<br>';
				echo '<a href="#sub-title-editor-text-size-two" class="sub-title">'. esc_html__( 'Disable the custom font size', 'editor-custom-color-palette' ).'</a>';
				echo'<br><br>';
				
				echo '<a href="#section_custom_gutenberg_editor">'. esc_html__( 'CUSTOMIZING GUTENBERG EDITOR', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-custom-gutenberg-editor-one" class="sub-title">'. esc_html__( 'disable fullscreen mode of Gutenberg editor', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-custom-gutenberg-editor-two" class="sub-title">'. esc_html__( 'activate the default style sheet of Gutenberg blocks on Front End', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-custom-gutenberg-editor-three" class="sub-title">'. esc_html__( 'align wide option for the block editor', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-custom-gutenberg-editor-four" class="sub-title">'. esc_html__( 'responsive embeds(for example integration vidéos YouTube)', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-custom-gutenberg-editor-five" class="sub-title">'. esc_html__( 'Editor max widths, match the editor width to your sites width.', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-custom-gutenberg-editor-six" class="sub-title">'. esc_html__( 'Paragraph Block', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-custom-gutenberg-editor-seven" class="sub-title">'. esc_html__( 'List Block', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-custom-gutenberg-editor-eight" class="sub-title">'. esc_html__( 'Image Block', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-custom-gutenberg-editor-nine" class="sub-title">'. esc_html__( 'Page Title', 'editor-custom-color-palette' ).'</a>';
				echo'<br><br>';

				echo'</div>';


				echo'<div id="block-right">';
				
				echo '<a href="#section_addons_reusable_blocks">'. esc_html__( 'ADDONS REUSABLE BLOCKS', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-addons-reusable-blocks-one" class="sub-title">'. esc_html__( 'Introduction', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-addons-reusable-blocks-two" class="sub-title">'. esc_html__( 'Manage reusable blocks', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-addons-reusable-blocks-three" class="sub-title">'. esc_html__( 'Principles of reusable blocks', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-addons-reusable-blocks-four" class="sub-title">'. esc_html__( 'Activate reusable blocks menu', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-addons-reusable-blocks-five" class="sub-title">'. esc_html__( 'Blockquote download & settings', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-addons-reusable-blocks-six" class="sub-title">'. esc_html__( 'Download & settings Custom Paragraph Block', 'editor-custom-color-palette' ).'</a>';
				echo'<br>';
				echo '<a href="#sub-title-addons-reusable-blocks-seven" class="sub-title">'. esc_html__( 'Download advice block', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-addons-reusable-blocks-eight" class="sub-title">'. esc_html__( 'Download information block', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-addons-reusable-blocks-nine" class="sub-title">'. esc_html__( 'Download warning block', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-addons-reusable-blocks-ten" class="sub-title">'. esc_html__( 'Download alert block', 'editor-custom-color-palette' ).'</a>';
				echo '<br><br>';
				
				echo '<a href="#section_elementor_color_palette">'. esc_html__( 'ELEMENTOR PAGE BUIDER', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-elementor-color-palette-one" class="sub-title">'. esc_html__( 'customizing color palette', 'editor-custom-color-palette' ).'</a>';
				echo '<br><br>';
				
				echo '<a href="#section_divi_color_palette">'. esc_html__( 'DIVI THEME', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				echo '<a href="#sub-title-divi-color-palette-one" class="sub-title">'. esc_html__( 'customizing color palette', 'editor-custom-color-palette' ).'</a>';
				echo '<br>';
				
				
				echo'</div>';
				
			
			echo'</div>'; /Fin Table des matières
			
			*/
			
			/*************************** INTERFACE A ONGLETS ********************************************/
			
			// Obtenir l'onglet actif à partir de la variable $_GET
			// lorsqu'un utilisateur accède à la page des paramètres pour la première fois, 
			// il n'y a aucune valeur pour tab dans la chaîne de requête. 
			// on définit donc une valeur par défaut
			 $default_tab = 'color_palette';
			 $active_tab = isset($_GET['tab']) ? $_GET['tab'] : $default_tab;
			 
			
			
			// On utilise les classes native de WordPress nav-tab-wrapper et ses classes enfant nav-tab
			// dans le lien href on a en paramètres la valeur de la page et la valeur de l'onglet.
			// la valeur de l'onglet est arbitraire et est utilisée pour signaler sur quel onglet nous nous trouvons
			// WordPress fournit une classe nommée nav-tab-active que l'on va appliquer à nos onglets
			// on a  écrit du PHP en ligne dans l'attribut class de chaque ancre. 
			// Essentiellement, le code dit "Si la valeur de la variable pour l'onglet actif est 'color_palette', 
			// alors renvoyez le mot-clé nav-tab-active sinon,ne renvoyez rien 
			?>
			<nav class="nav-tab-wrapper">
			  <a href="?page=eccp_settings_page&tab=default_settings" class="nav-tab <?php echo $active_tab == 'default_settings' ? 'nav-tab-active' : ''; ?>"><?php echo esc_html__( 'Default settings','editor-custom-color-palette' );?></a>
			  <a href="?page=eccp_settings_page&tab=color_palette" class="nav-tab <?php echo $active_tab == 'color_palette' ? 'nav-tab-active' : ''; ?>"><?php echo esc_html__( 'Color palette','editor-custom-color-palette' );?></a>
			  <a href="?page=eccp_settings_page&tab=editor_text_size" class="nav-tab <?php echo $active_tab == 'editor_text_size' ? 'nav-tab-active' : ''; ?>"><?php echo esc_html__( 'Editor text size','editor-custom-color-palette' );?></a>
			  <a href="?page=eccp_settings_page&tab=customizing_gutenberg_editor" class="nav-tab <?php echo $active_tab == 'customizing_gutenberg_editor' ? 'nav-tab-active' : ''; ?>"><?php echo esc_html__( 'Customizing editor','editor-custom-color-palette' );?></a>
			  <a href="?page=eccp_settings_page&tab=customizing_gutenberg_blocks" class="nav-tab <?php echo $active_tab == 'customizing_gutenberg_blocks' ? 'nav-tab-active' : ''; ?>"><?php echo esc_html__( 'Customizing Gutenberg blocks','editor-custom-color-palette' );?></a>
			  <a href="?page=eccp_settings_page&tab=addons_reusable_blocks" class="nav-tab <?php echo $active_tab == 'addons_reusable_blocks' ? 'nav-tab-active' : ''; ?>"><?php echo esc_html__( 'Reusable blocks','editor-custom-color-palette' );?></a>
			  <a href="?page=eccp_settings_page&tab=page_builder_elementor" class="nav-tab <?php echo $active_tab == 'page_builder_elementor' ? 'nav-tab-active' : ''; ?>"><?php echo esc_html__( 'Elementor','editor-custom-color-palette' );?></a>
			  <a href="?page=eccp_settings_page&tab=divi_theme" class="nav-tab <?php echo $active_tab == 'divi_theme' ? 'nav-tab-active' : ''; ?>"><?php echo esc_html__( 'Divi','editor-custom-color-palette' );?></a>
			  <a href="?page=eccp_settings_page&tab=customizing_back_office" class="nav-tab <?php echo $active_tab == 'customizing_back_office' ? 'nav-tab-active' : ''; ?>"><?php echo esc_html__( 'Customize Back Office','editor-custom-color-palette' );?></a>
			  <a href="?page=eccp_settings_page&tab=customizing_front_end" class="nav-tab <?php echo $active_tab == 'customizing_front_end' ? 'nav-tab-active' : ''; ?>"><?php echo esc_html__( 'Customize Front End','editor-custom-color-palette' );?></a>
			</nav>
			
			
			
			<form action="options.php" method="POST">
			
				<div class="eccp-tab-content"> 
				
					<?php
				
						switch ($active_tab) {
							
							case 'default_settings':
								// afficher les champs nonce, referer, action, et option_page
								// ( en paramètre le settings group de réglage définit dans le fichier ecpp-multiple-setting.php) 
								settings_fields( 'eccp_default_settings' );
								// permet de boucler sur nos sections et afficher les champs de réglages correspondants 
								// ( en paramètre le slug de la page de réglages)
								do_settings_sections( 'eccp_settings_page' );
								break;
						
							case 'color_palette':
								settings_fields( 'settings_eccp' );
								do_settings_sections( 'eccp_settings_page_color_palette' );
								break;
							
							case 'editor_text_size':
								settings_fields( 'eccp_editor_text_size' );
								do_settings_sections( 'eccp_settings_page_editor_text_size' );
								break;
							
							case 'customizing_gutenberg_editor':
								settings_fields( 'eccp_custom_gutenberg_editor' );
								do_settings_sections( 'eccp_settings_page_custom_gutenberg_editor' );
								break;
								
							case 'customizing_gutenberg_blocks':
								settings_fields( 'eccp_custom_gutenberg_blocks' );
								do_settings_sections( 'eccp_settings_page_customizing_gutenberg_blocks' );
								break;
								
							case 'addons_reusable_blocks':
								settings_fields( 'eccp_reusable_blocks' );
								do_settings_sections( 'eccp_settings_page_addons_reusable_blocks' );
								break;
								
							case 'page_builder_elementor':
								settings_fields( 'eccp_elementor_page_builder' );
								do_settings_sections( 'eccp_settings_page_elementor' );
								break;
								
							case 'divi_theme':
								settings_fields( 'eccp_divi_theme' );
								do_settings_sections( 'eccp_settings_page_divi_theme' );
								break;
						 
							case 'customizing_back_office':
								settings_fields( 'eccp_custom_back_office' );
								do_settings_sections( 'eccp_settings_page_customizing_back_office' );
								break;
								
							case 'customizing_front_end':
								settings_fields( 'eccp_custom_front_end' );
								do_settings_sections( 'eccp_settings_page_customizing_front_end' );
								break;
							
							default:
								settings_fields( 'settings_eccp' );
								do_settings_sections( 'eccp_settings_page_color_palette' );
								break;
							
						}
						
						submit_button( __( 'Save Settings', 'editor-custom-color-palette' ));// le bouton de soumission du formulaire( Enregister les paramètres) 
						
					?>
				
				</div>
				
			</form>
			
        </div>
		
    <?php
	
}