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

// if OPT_CFC_INPUT_BORDER_CLR is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_INPUT_BORDER_CLR' ) ? OPT_CFC_INPUT_BORDER_CLR : true;

if ( $cfc_state ) {

    $cfc_sec_inputs->createOption( array(

		'id'      => 'cfc_input_border_clr',
		'type'        => 'color',

		'name'        => 'Input Field Border Color',

		'default'     => '#ccc',

		'livepreview' => '$( "#cfc form input, #cfc form textarea" ).css( "border-color", value )',
		'css'  => '#cfc form input, #cfc form textarea{ border-color: value; }'

    ) );

}