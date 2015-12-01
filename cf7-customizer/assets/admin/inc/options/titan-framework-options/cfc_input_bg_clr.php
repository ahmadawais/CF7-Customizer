<?php
/**
 * Option: Input BG Color
 *
 * Section: Input Fields Styling
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_INPUT_BG_CLR is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_INPUT_BG_CLR' ) ? OPT_CFC_INPUT_BG_CLR : true;

if ( $cfc_state ) {

    $cfc_sec_inputs->createOption( array(

        'id'          => 'cfc_input_bg_clr',
        'type'        => 'color',

        'name'        => 'Input Background Color',

        'default'     => '#ffffff',

        'livepreview' => '$("#cfc input, #cfc textarea").css("background-color", value)',
        'css'         => '#cfc input, #cfc textarea{ background-color: value; }'

    ) );
}