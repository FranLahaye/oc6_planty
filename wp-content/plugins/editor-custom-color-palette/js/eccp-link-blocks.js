/**
 Liens pour des blocs entiers.
**/

 document.addEventListener( 'DOMContentLoaded', () => {
	 
 	// on récupère les éléments(bloc) ayant une classe is-linkable-block 
	const blocks = document.querySelectorAll( '.is-linkable-block' );

 	if ( ! blocks ) {
 		return;
 	}

	//pour tous les blocs on gère l'évènement clic
 	for ( const block of blocks ) {
 		block.addEventListener( 'click', clickBlock );
 	}

 	/**
 	 * Clic sur un bloc.
 	 * 
 	 * @param	{event}	évènement
 	 */
 	function clickBlock( event ) {
		
 		// on récupère l'attribut data-target du bloc
		const target = event.currentTarget.getAttribute( 'data-target' ) || '';

		// selon la valeur de target
		// tab: on ouvre le lien dans un nouvel onglet
		// sinon on ouvre le lien dans l'onglet courant 
 		switch ( target ) {
 			case 'tab':
 				window.open( event.currentTarget.getAttribute( 'data-link' ), '_blank' );
 				break;
 			default:
 				window.open( event.currentTarget.getAttribute( 'data-link' ), '_self' );
 				break;
 		}
		
 	}
	
 } );