<?php
/**
 * Option: Background Image
 *
 * Section: Form Text & BG Colors
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_BG_IMG is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_BG_IMG' ) ? OPT_CFC_BG_IMG : true;

if ( $cfc_state ) {

	$cfc_sec_form_txt_bg->createOption( array(

	    'id'          => 'cfc_bg_img',
	    'type'        => 'upload',

	    'name'        => 'Background Image',
	    'desc'        => 'Upload background image',

	    // 'livepreview' => '$("#cfc").css( "background-image", "url( value )" )',
	    'css'         => '#cfc { background-image: value; }'

	) );

}