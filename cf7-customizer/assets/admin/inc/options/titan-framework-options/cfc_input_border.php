<?php
/**
 * Option: Input Border
 *
 * Section: Input Fields Styling.
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_INPUT_BORDER is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_INPUT_BORDER' ) ? OPT_CFC_INPUT_BORDER : true;

if ( $cfc_state ) {

    $cfc_sec_inputs->createOption( array(

		'id'      => 'cfc_input_border',
		'type'    => 'number',

		'name'    => 'Input Fields Border',
		'desc'    => 'Adds border in pixels (px) to the input fields',

		'min'     => '1',
		'max'     => '50',

		'css'  => '#cfc form input, #cfc form textarea{ border: valuepx solid; }'

    ) );

}