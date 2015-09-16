<?php
/**
 * Options init file
 *
 * This file includes all the sections of customizer options
 *
 * @since 0.0.1
 * @package CFC
 *
 */


/**
 * Section: Text & Background
 *
 * Options :
 * 				1. Text Color
 * 				2. Background Color
 * 				3. Background Image
 *
 * @since 0.0.1
 *
 */
if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-sections/section-text_bg.php' ) ) {
    require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-sections/section-text_bg.php' );
}


/**
 * Section: Padding & Margin
 *
 * Options :
 * 				1. Padding
 * 				2. Margins
 *
 * @since 0.0.1
 *
 */
if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-sections/section-padding_margin.php' ) ) {
    require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-sections/section-padding_margin.php' );
}


/**
 * Section: Button
 *
 * Options :
 * 				1. Text Color
 * 				2. Background Color
 *
 * @since 0.0.1
 *
 */
if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-sections/section-button.php' ) ) {
    require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-sections/section-button.php' );
}


/**
 * Section: Inputs
 *
 * Options :
 * 				1. Text Color
 * 				2. Background Color
 *
 * @since 0.0.1
 *
 */
if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-sections/section-inputs.php' ) ) {
    require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-sections/section-inputs.php' );
}
