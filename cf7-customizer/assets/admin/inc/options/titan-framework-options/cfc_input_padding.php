<?php
/**
 * Option: Input Padding
 *
 * Section: Input Fields Styling
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_INPUT_PADDING is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_INPUT_PADDING' ) ? OPT_CFC_INPUT_PADDING : true;

if ( $cfc_state ) {

    $cfc_sec_inputs->createOption( array(

            'id'      => 'cfc_input_padding',
            'type'    => 'number',

            'name'    => 'Padding',
            'desc'    => 'Adds padding in pixels (px) inside input fields',

            // 'default' => 'void',
    		'min'     => '1',
            'max'     => '150',

            'css'     => '#cfc form input, #cfc form textarea{ padding: valuepx; }'

        ) );

}