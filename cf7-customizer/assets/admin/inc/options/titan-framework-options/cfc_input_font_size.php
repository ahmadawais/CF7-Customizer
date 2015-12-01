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

// if OPT_CFC_INPUT_FONT_SIZE is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_INPUT_FONT_SIZE' ) ? OPT_CFC_INPUT_FONT_SIZE : true;

if ( $cfc_state ) {

    $cfc_sec_inputs->createOption( array(

		'id'      => 'cfc_input_font_size',
		'type'    => 'number',

		'name'    => 'Font Size',
		'desc'    => 'Adds font-size pixels (px) to the inputs',

		'default' => 'inherit',
		'min'     => '14',
		'max'     => '100',

		'css'  => '#cfc form input, #cfc form textarea{ font-size: inherit; font-size: valuepx;}'

    ) );

}