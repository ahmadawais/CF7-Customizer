<?php
/**
 * Option: Border Color
 *
 * Section: Form Padding, Margin & Border
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_BORDER_CLR is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_BORDER_CLR' ) ? OPT_CFC_BORDER_CLR : true;

if ( $cfc_state ) {

	$cfc_sec_pmb->createOption( array(

		'id'          => 'cfc_border_clr',
		'type'        => 'color',

		'name'        => 'Border Color',

		'default'     => '#000000',

		'livepreview' => '$( "#cfc" ).css( "border-color", value )',
		'css'         => '#cfc { border-color: value; }'

	) );

}