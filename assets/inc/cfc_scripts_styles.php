<?php
/**
 * Scripts and Styles
 *
 * Enqueue all the scripts and styles through this file
 *
 * @package CFC
 * @since   0.0.1
 */

// Abort if called directly.
if ( ! defined( 'WPINC' ) ) {
	die;
}


add_action( 'wp_enqueue_scripts', 'cfc_scripts_stlyes' );

/**
 * Add CFC Scripts and Styles.
 *
 * @since 1.0.0
 */
function cfc_scripts_stlyes() {

		// jQuery.
		wp_enqueue_script( 'jquery' ); // Enqueue it!

		/**
		 * Scripts
		 *
		 * Minified and concatenated scripts
		 *
		 *     Order is important
		 *
		 *     @vendors     vendors.min,js
		 *     @custom      custom.min.js
		 *
		 * @since 0.0.1
		 */
		// wp_register_script( 'cfc_vendorsJs', CFC_URL . '/assets/js/vendors.min.js' ); // Custom scripts
		// wp_enqueue_script( 'cfc_vendorsJs' ); // Enqueue it!
		wp_register_script( 'cfc_customJs', CFC_URL . '/assets/js/custom.min.js' ); // Custom scripts
		wp_enqueue_script( 'cfc_customJs' ); // Enqueue it!

		/**
		 * Style
		 *
		 *  style.min.css contains all the minified CSS from vendors and partials
		 *
		 * @since 0.0.1
		 */

		// CSS.
		wp_register_style( 'cfc_style', CFC_URL . '/assets/css/style.min.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'cfc_style' ); // Enqueue it!

}
