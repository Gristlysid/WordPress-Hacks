/* Swap woocomerce cart page fields*/
add_filter( 'woocommerce_checkout_fields', 'misha_email_first' );

function email_first( $checkout_fields ) {
	$checkout_fields[ 'billing' ][ 'billing_email' ][ 'priority' ] = 1;
	return $checkout_fields;
}

