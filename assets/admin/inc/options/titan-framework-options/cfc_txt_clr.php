<?php
/**
 * Option: Text Color
 *
 * Section: Form Text & BG Colors
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_TXT_CLR is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_TXT_CLR' ) ? OPT_CFC_TXT_CLR : true;

if ( $cfc_state ) {

	$cfc_sec_form_txt_bg->createOption( array(

	    'id'          => 'cfc_txt_clr',
	    'type'        => 'color',
	    'name'        => 'Text Color',
	    'default'     => '#000000',
	    'livepreview' => '$("#cfc, #cfc .wpcf7-quiz-label, #cfc p, #cfc label").css("color", value)',
	    'css'         => '#cfc, #cfc .wpcf7-quiz-label, #cfc p, #cfc label { color: value; }'

	) );

}
