<?php
/**
 * Option: Code
 *
 * Section: Custom CSS.
 *
 * @since 1.0.1
 * @package CFC
 */

// if OPT_CFC_CUSTOM_CSS is defiend, use it's value( true/false )
// else use true and always display this option to the user
$cfc_state = defined( 'OPT_CFC_CUSTOM_CSS' ) ? OPT_CFC_CUSTOM_CSS : true;

if ( $cfc_state ) {

	$cfc_sec_ccss->createOption( array(

		'id'   => 'cfc_code_custom_css',
		'type' => 'code',

		'name' => 'Custom CSS Code',
		'desc' => 'Use #cfc to target the form elements.',

		'theme'=> 'cobalt',

		'lang' => 'css',
		// 'css'     => '#cfc { border: valuepx solid; }'

	) );

}
?>