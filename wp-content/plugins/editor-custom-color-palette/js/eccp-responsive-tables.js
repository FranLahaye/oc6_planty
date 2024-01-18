/*--------------------------------------------------------------------------
				   RENDRE LE BLOC TABLE REPONSIVE
---------------------------------------------------------------------------*/

/*

Script établi a partir de  ce lien:
https://zurb.com/playground/responsive-tables

Avec démo:
https://zurb.com/playground/projects/responsive-tables/

Ce script établi une colonne de gauche fixe pour une résolution écran < 767px  
et le reste des colonnes peuvent défiler.

Le JS va créer un balisage supplémentaire sur les mobiles,
sans affecter le balisage du bloc table. 
ce balisage supplémentaire constituée de <div> est affectée 
des classes: .table-wrapper , .scrollable , .pinned
Des régles CSS applique les styles de positionnement et de 
débordement requis pour faire fonctionner ce balisage supplémentaire.

Pour que notre JS et CSS fonctionne on ajoute  en js la classe 
.eccp-responsive à la balise <table>

<figure class="wp-block-table" >

	<div class="table-wrapper">
	
		<div class="scrollable">
		
		    ---- balisage du bloc table ----
			//Pour cette table d'origine du bloc table
			// on masque par régle CSS la 1ère colonne
			<table class="eccp-responsive">
				<thead>
					<tr>
						<th class="has-text-align-center">
							<strong>HORAIRES</strong>
						</th>
						etc...
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="has-text-align-center">
							<strong>19H30 – 20H30</strong>
						</td>
						etc..
					</tr>
					<tr>
						<td class="has-text-align-center" data-align="center" style="">
							<strong>19H – 20H</strong>
						</td>
						etc...
					</tr>
					etc..
				</tbody>
			</table>
			----  fin balisage du bloc table ----
			
		</div>
		
		<div class="pinned">
			copie de la balise <table> mais seule la 1ère colonne est affichée
			les colonnes suivantes sont masquées en JS par la règle css display:none
		</div>
		
	</div>
	
</figure>

*/

jQuery(document).ready(function($){
	
	var switched = false;
  
	var updateTables = function() {
    
		// pour les mobiles
		// on ajoute notre balisage supplémentaire
		if (($(window).width() < 767) && !switched ){
			
		  // Ajout de la classe eccp-responsive a la balise <table> du bloc table
		  $( '.wp-block-table table' ).addClass( 'eccp-responsive' );
		  
		  switched = true;
		  
		  // ajout du balisage supplémentaire
		  $(".wp-block-table table.eccp-responsive").each(function(i, element) {
			splitTable($(element));
		  });
		  
		  return true;
		}
		// sinon on détruit le balisage supplémentaire
		// pour revenir au balisage original du bloc Table
		else if (switched && ($(window).width() > 767)) {
			
		  switched = false;
		  
		  // on détruit le balisage supplémentaire
		  $(".wp-block-table table.eccp-responsive").each(function(i, element) {
			unsplitTable($(element));
		  });
		  
		}
	
	};
   
	$(window).load(updateTables);
	$(window).on("redraw",function(){switched=false;updateTables();}); // Un événement à écouter
	$(window).on("resize", updateTables);
   
	// Fonction qui construit le balisage supplémentaire
	function splitTable(original) {
		
		original.wrap("<div class='table-wrapper' />");
		
		// copie de la balise <table> et son contenu, mais on
		// affiche que la 1ère colonne, et on masque les colonnes 
		// suivantes par la régle css display:none;
		// On supprime la classe eccp-responsive de cette copie de la table.
		// Pour la table d'origine la 1ère colonne sera masquée par régle
		// css dans le fichier editor-custom-color-palette.php
		var copy = original.clone();
		copy.find("td:not(:first-child), th:not(:first-child)").css("display", "none");
		copy.removeClass("eccp-responsive");
		
		original.closest(".table-wrapper").append(copy);
		copy.wrap("<div class='pinned' />");
		original.wrap("<div class='scrollable' />");

		setCellHeights(original, copy);
	}
	
	// Fonction qui détruit le balisage supplémentaire
	// pou revenir au balisage original du bloc table
	function unsplitTable(original) {
		original.closest(".table-wrapper").find(".pinned").remove();
		original.unwrap();
		original.unwrap();
	}

	function setCellHeights(original, copy) {
		
		var tr = original.find('tr'),
			tr_copy = copy.find('tr'),
			heights = [];

		tr.each(function (index) {
			
			var self = $(this),
			tx = self.find('th, td');

			tx.each(function () {
				var height = $(this).outerHeight(true);
				heights[index] = heights[index] || 0;
				if (height > heights[index]) heights[index] = height;
			});

		});

		tr_copy.each(function (index) {
			$(this).height(heights[index]);
		});
		
	}

});
