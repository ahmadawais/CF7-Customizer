<?php
/**
 * CFC Main File
 *
 * This is the main file of CFC which controls everything in this plugin
 *
 * @package CFC
 * @since 	0.0.1
 *
 */


/**
 * Welcome Page
 *
 * @since 0.0.1
 *
 */
if ( file_exists( CFC_DIR . '/assets/admin/inc/welcome/welcome.php' ) ) {
    require_once( CFC_DIR . '/assets/admin/inc/welcome/welcome.php' );
}



/**
 * Titan Framework
 *
 * Adds TF for creating options
 *
 * @source https://github.com/gambitph/Titan-Framework
 * @since 0.0.1
 *
 */
if ( file_exists( CFC_DIR . '/assets/admin/inc/tgm/cfc_tgm-init.php' ) ) {
    require_once( CFC_DIR . '/assets/admin/inc/tgm/cfc_tgm-init.php' );
}

/**
 * Titan Framework
 *
 * Adds TF for creating options
 *
 * @source https://github.com/gambitph/Titan-Framework
 * @since 0.0.1
 *
 */
if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework/titan-framework-embedder.php' ) ) {
    require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework/titan-framework-embedder.php' );
}


/**
 * CFC Options
 *
 * Customizer sections, panel and option registrations are done inside this file
 *
 * @since 0.0.1
 *
 */
if ( file_exists( CFC_DIR . '/assets/admin/inc/options/cfc_options-init.php' ) ) {
    require_once( CFC_DIR . '/assets/admin/inc/options/cfc_options-init.php' );
}


/**
 * Scripts and Styles
 *
 * @since 0.0.1
 *
 */
if ( file_exists( CFC_DIR . '/assets/inc/cfc_scripts_styles.php' ) ) {
    require_once( CFC_DIR . '/assets/inc/cfc_scripts_styles.php' );
}
