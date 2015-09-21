<?php
/**
 * Option: Input Text Color
 *
 * Section: Input Fields Styling
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_INPUT_TXT_CLR is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_INPUT_TXT_CLR' ) ? OPT_CFC_INPUT_TXT_CLR : true;

if ( $cfc_state ) {

    $cfc_sec_inputs->createOption( array(

        'id'          => 'cfc_input_txt_clr',
        'type'        => 'color',

        'name'        => 'Input Text Color',

        'default'     => '#5b5b5b',

        'livepreview' => '$("#cfc input, #cfc textarea").css("color", value)',
        'css'         => '#cfc input, #cfc textarea{ color: value; }'

    ) );
}