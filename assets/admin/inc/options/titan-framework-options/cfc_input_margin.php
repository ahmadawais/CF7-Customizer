<?php
/**
 * Option: Input Margin
 *
 * Section: Input Fields Styling
 *
 * @since 0.0.1
 * @package CFC
 *
 */

// if OPT_CFC_INPUT_MARGIN is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_INPUT_MARGIN' ) ? OPT_CFC_INPUT_MARGIN : true;

if ( $cfc_state ) {

    $cfc_sec_inputs->createOption( array(

		'id'      => 'cfc_input_margin',
		'type'    => 'number',

		'name'    => 'Margin Between Input Fields',
		'desc'    => 'Adds bottom margin in pixels (px) to input fields',

		// 'default' => 'void',
		'min'     => '1',
		'max'     => '250',

		'css'     => '#cfc form input, #cfc form textarea { margin-bottom: valuepx; }'

    ) );

}