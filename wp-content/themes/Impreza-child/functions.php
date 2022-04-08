<?php
/* Custom functions code goes here. */

/**
* change currency symbol to AED
*/

add_filter( 'woocommerce_currency_symbol', 'wc_change_uae_currency_symbol', 10, 2 );

function wc_change_uae_currency_symbol( $currency_symbol, $currency ) {
switch ( $currency ) {
case 'AED':
$currency_symbol = 'AED';
break;
}

return $currency_symbol;
}