<?php
/**
 * Option: Border
 *
 * Section: Form Padding, Margin & Border
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_BORDER is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_BORDER' ) ? OPT_CFC_BORDER : true;

if ( $cfc_state ) {

	$cfc_sec_pmb->createOption( array(

		'id'      => 'cfc_border',
		'type'    => 'number',

		'name'    => 'Border',
		'desc'    => 'Adds border in pixels (px) to the form',

		'default' => '0',
		'max'     => '50',

		'css'     => '#cfc { border: valuepx solid; }'

	) );

}