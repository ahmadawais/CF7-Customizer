<?php
/**
 * Option: Button Border Color
 *
 * Section: Button Styling
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_HOVER_BTN_BORDER_CLR is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_HOVER_BTN_BORDER_CLR' ) ? OPT_CFC_HOVER_BTN_BORDER_CLR : true;

if ( $cfc_state ) {

    $cfc_sec_btn->createOption( array(

		'id'          => 'cfc_btn_border_clr',
		'type'        => 'color',

		'name'        => 'Button Border Color',

		'default'     => '#000000',

		'livepreview' => '$( "#cfc .wpcf7-submit" ).css( "border-color", value )',
		'css'         => '#cfc .wpcf7-submit{ border-color: value; }'

    ) );
}