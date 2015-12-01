<?php
/**
 * Option: Button Hover Text Color
 *
 * Section: Button Styling
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_BTN_HOVER_TXT_CLR is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_BTN_HOVER_TXT_CLR' ) ? OPT_CFC_BTN_HOVER_TXT_CLR : true;

if ( $cfc_state ) {

	$cfc_sec_btn->createOption( array(

	    'id'          => 'cfc_btn_hover_txt_clr',
	    'type'        => 'color',

	    'name'        => 'Button Hover Text Color',

	    'default'     => '#fff',

	    'css'         => '#cfc .wpcf7-submit:hover{ color: value; }'

	) );
}