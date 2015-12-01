<?php
/**
 * Option: Button Text Color
 *
 * Section: Button Styling
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_BTN_TXT_CLR is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_BTN_TXT_CLR' ) ? OPT_CFC_BTN_TXT_CLR : true;

if ( $cfc_state ) {

	$cfc_sec_btn->createOption( array(

	    'id'          => 'cfc_btn_txt_clr',
	    'type'        => 'color',

	    'name'        => 'Button Text Color',

	    'default'     => '#fff',

	    'livepreview' => '$("#cfc .wpcf7-submit").css("color", value )',
	    'css'         => '#cfc .wpcf7-submit{ color: value ; }'

	) );
}