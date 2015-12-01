<?php
/**
 * Option: Input Width
 *
 * Section: Input Fields Styling
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_INPUT_WIDTH is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_INPUT_WIDTH' ) ? OPT_CFC_INPUT_WIDTH : true;

if ( $cfc_state ) {

    $cfc_sec_inputs->createOption( array(

		'id'      => 'cfc_input_width',
		'type'    => 'radio',

		'options' => array(
                '100%' => 'YES',
                'n' => 'NO'
            ),

		'name' => 'Make input fields full width?',

		'css'  => '#cfc form input, #cfc form textarea{ width: value; }'

    ) );

}