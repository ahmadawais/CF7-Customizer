<?php
/**
 * Option: Input Border Radius
 *
 * Section: Input Fields Styling.
 *
 * @since 1.0.1
 * @package CFC
 *
 */

// if OPT_CFC_INPUT_BORDER_RADIUS is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_INPUT_BORDER_RADIUS' ) ? OPT_CFC_INPUT_BORDER_RADIUS : true;

if ( $cfc_state ) {

    $cfc_sec_inputs->createOption( array(

		'id'      => 'cfc_input_border_radius',
		'type'    => 'number',

		'name'    => 'Input Fields Border Radius',
		'desc'    => 'Adds border radius in pixels (px) to the input fields',

		'min'     => '0',
		'max'     => '250',

		'css'  => '#cfc form input, #cfc form textarea{ border-radius: valuepx; }'

    ) );

}