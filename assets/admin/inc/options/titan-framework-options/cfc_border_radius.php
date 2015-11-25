<?php
/**
 * Option: Border Radius
 *
 * Section: Form Padding, Margin & Border.
 *
 * @since 1.0.1
 * @package CFC
 */

// if OPT_CFC_BORDER_RADIUS is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_BORDER_RADIUS' ) ? OPT_CFC_BORDER_RADIUS : true;

if ( $cfc_state ) {

	$cfc_sec_pmb->createOption( array(

		'id'      => 'cfc_border_radius',
		'type'    => 'number',

		'name'    => 'Border Radius',
		'desc'    => 'Adds border radius in pixels (px) to the form\'s border.' ,

		'default' => '0',
		'max'     => '250',

		'css'     => '#cfc { border-radius: valuepx; }'

	) );

}