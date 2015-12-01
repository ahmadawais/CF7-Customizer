<?php
/**
 * Option: Button Hover BG Color
 *
 * Section: Button Styling
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_HOVER_BTN_HOVER_BG_CLR is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_HOVER_BTN_HOVER_BG_CLR' ) ? OPT_CFC_HOVER_BTN_HOVER_BG_CLR : true;

if ( $cfc_state ) {

    $cfc_sec_btn->createOption( array(

        'id'          => 'cfc_btn_hover_bg_clr',
        'type'        => 'color',

        'name'        => 'Button Hover Background Color',

        'default'     => '#000000',

        'css'         => '#cfc .wpcf7-submit:hover{ background-color: value; }'

    ) );
}