<?php
/**
 * Option: Button Border.
 *
 * Section: Button Styling
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_HOVER_BTN_BORDER is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_HOVER_BTN_BORDER' ) ? OPT_CFC_HOVER_BTN_BORDER : true;

if ( $cfc_state ) {

    $cfc_sec_btn->createOption( array(

		'id'          => 'cfc_btn_border',
		'type'        => 'number',

		'name'        => 'Border',
		'desc'        => 'Adds border in pixels (px) to the form',

		'default'     => '0',
		'max'         => '30',

		'css'         => '#cfc .wpcf7-submit{ border: valuepx solid; }'

    ) );
}