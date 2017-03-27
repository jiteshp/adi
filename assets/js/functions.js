( function( $ ) {

	/**
	 * Wait for the document to load.
	 */
	$( document ).ready( function() {

		/**
		 * Handle primary menu toggle.
		 */
		$( '#primary-menu-toggle' ).on( 'click', function( e ) {
			$( '#primary-menu .menu' ).slideToggle();
			e.preventDefault();
		} );

	} );

} )( jQuery );
