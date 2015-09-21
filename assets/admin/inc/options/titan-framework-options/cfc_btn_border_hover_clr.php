<?php
/**
 * Option: Button Border Hover Color
 *
 * Section: Button Styling
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_HOVER_BTN_BORDER_HOVER_CLR is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_HOVER_BTN_BORDER_HOVER_CLR' ) ? OPT_CFC_HOVER_BTN_BORDER_HOVER_CLR : true;

if ( $cfc_state ) {

    $cfc_sec_btn->createOption( array(

		'id'          => 'cfc_btn_border_hover_clr',
		'type'        => 'color',

		'name'        => 'Button Border Hover Color',

		'default'     => '#000000',

		'css'         => '#cfc .wpcf7-submit:hover{ border-color: value; }'

    ) );
}