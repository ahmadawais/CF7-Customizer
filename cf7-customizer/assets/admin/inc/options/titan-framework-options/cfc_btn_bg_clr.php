<?php
/**
 * Option: Button BG Color
 *
 * Section: Button Styling
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_BTN_BG_CLR is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_BTN_BG_CLR' ) ? OPT_CFC_BTN_BG_CLR : true;

if ( $cfc_state ) {

    $cfc_sec_btn->createOption( array(

        'id'          => 'cfc_btn_bg_clr',
        'type'        => 'color',

        'name'        => 'Button Background Color',

        'default'     => '#000000',

        'livepreview' => '$("#cfc .wpcf7-submit").css("background-color", value )',
        'css'         => '#cfc .wpcf7-submit{ background-color: value; }'

    ) );
}