$( function() {
	$.ajaxSetup( {
		headers: {
			'X-CSRF-Token': $( 'meta[name="_token"]' ).attr( 'content' )
		}
	} );
} );

$( document ).ready( function() {
	// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	$( '.modal-trigger' ).leanModal();
	$('.scrollspy').scrollSpy();

	$( document )

		.on( 'change', '.hoverable tbody input:checkbox', function() {
			var parent = $( this ).parents( '.hoverable' );
			if( parent.find( "tbody input:checkbox:checked" ).length >= 1 ) {
				$( '#delete-item' ).css( 'display', 'inline-block' );
			}
			else {
				$( '#delete-item' ).hide();
			}
		} )

		.on( 'change', '.check-all', function() {
			var parent = $( this ).parents( '.hoverable' );
			if( $( this ).is( ':checked' ) ) {
				parent.find( "tbody input:checkbox" ).prop( 'checked', true );
				$( '#delete-item' ).css( 'display', 'inline-block' );
			}
			else {
				parent.find( "tbody input:checkbox" ).prop( "checked", false );
				$( '#delete-item' ).hide();
			}
		} )

		.on( 'click', '#delete-item', function() {
			$( '#modal2' ).openModal();
		} )


		.on( 'click', '.delete-post .confirm-action', function() {
			$.each( $( '.hoverable tbody tr td input:checkbox:checked' ), function( key, value ) {
				$.ajax(
					{
						"url": window.location.href.toString() + $( this ).data( 'post-id' ),
						"type": "DELETE"
					} ).done( function( result ) {
						location.reload();
					} ).error( function( result ) {
						location.reload();
						console.log( result );
					} );
			} );

			$( '#modal2' ).closeModal();
		} )


		.on( 'click', '.uploads .row .col a', function() {

			if( confirm( "Continue to delete this image?" ) ) {
				$.ajax(
					{
						"url": window.location.href.toString() + '/upload/' + $( this ).data( 'image-id' ),
						"type": "DELETE"
					} ).done( function( result ) {
						location.reload();
					} ).error( function( result ) {
						location.reload();
						console.log( result );
					} );
			}

		} );

} );