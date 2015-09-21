<?php
/**
 * Option: Button BG Width
 *
 * Section: Button Styling
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_BTN_WIDTH is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_BTN_WIDTH' ) ? OPT_CFC_BTN_WIDTH : true;

if ( $cfc_state ) {

    $cfc_sec_btn->createOption( array(

        'id'      => 'cfc_btn_width',
        'type'    => 'radio',

        'options' => array(
                '100%' => 'YES',
                'auto' => 'NO'
            ),

        'name'    => 'Full Width Button',
        // 'desc'    => 'Adds width in percentage (px) to the submit button',

        'css'         => '#cfc .wpcf7-submit{ width: value; }'

    ) );
}