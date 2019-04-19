jQuery( document ).ready( function ( $ ) {

	var page_subsection_map = {
		featuredarea: "cyberchimps_featuredarea_section",
		socialmedia: "cyberchimps_socialmedia_section",
		widgets_section: "cyberchimps_widget_section"
				//profile				: "cyberchimps_profile_section"
	};

	jQuery( ".blog-section-order-tracker" ).change( function () {
		var array = jQuery( this ).val().split( "," );
		jQuery.each( page_subsection_map, function ( key, value ) {
			if ( jQuery.inArray( key, array ) != - 1 ) {
				jQuery( "#" + value ).show();
				jQuery( "#" + value + "-tab" ).parent( 'li' ).show();
			} else {
				jQuery( "#" + value ).hide();
				jQuery( "#" + value + "-tab" ).parent( 'li' ).hide();
			}
		} );
	} ).change();

} )