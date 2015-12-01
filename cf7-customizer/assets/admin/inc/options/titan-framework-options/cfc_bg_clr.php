<?php
/**
 * Option: Background Color
 *
 * Section: Form Text & BG Colors
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_BG_CLR is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_BG_CLR' ) ? OPT_CFC_BG_CLR : true;

if ( $cfc_state ) {

	$cfc_sec_form_txt_bg->createOption( array(

	    'id'          => 'cfc_bg_clr',
	    'type'        => 'color',

	    'name'        => 'Background Color',

	    'default'     => '#ffffff',

	    'livepreview' => '$("#cfc").css("background-color", value)',
	    'css'         => '#cfc { background-color: value; }'

	) );

}