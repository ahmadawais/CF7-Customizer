<?php
/**
 * Option: Border
 *
 * Section: Form Text & BG Colors
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_FONT_SIZE is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_FONT_SIZE' ) ? OPT_CFC_FONT_SIZE : true;

if ( $cfc_state ) {

	$cfc_sec_form_txt_bg->createOption( array(

		'id'      => 'cfc_font_sizess',
		'type'    => 'number',

		'name'    => 'Font Size',
		'desc'    => 'Adds font-size pixels (px) to the form',

		'default' => 'inherit',
		'min'     => '14',
		'max'     => '100',

		'css'     => '#cfc, #cfc p { font-size: inherit; font-size: valuepx; }'

	) );

}