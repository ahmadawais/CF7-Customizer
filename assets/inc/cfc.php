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
 * Freemius SDK.
 *
 * Adds freemius SDK.
 * Create a helper function for easy SDK access.
 *
 * @since 1.0.1
 */
if ( file_exists( CFC_DIR . '/assets/admin/inc/freemius/start.php' ) ) {

	function cfc_fs() {
	    global $cfc_fs;
	    if ( ! isset( $cfc_fs ) ) {
	        // Include Freemius SDK.
		    require_once( CFC_DIR . '/assets/admin/inc/freemius/start.php' );
		    $cfc_fs = fs_dynamic_init( array(
				'id'              => '91',
				'slug'            => 'cf7-customizer',
				'public_key'      => 'pk_0b419183244d583e3b33a7736921c',
				'is_live'         => true,
				'WP_FS__DEV_MODE' => true,
				'is_premium'      => false,
				'has_addons'      => false,
				'has_paid_plans'  => false,
			    'menu'           => array(
				    'slug'    => 'cfc_welcome_page',
				    'account' => false,
				    'contact' => false,
				    'support' => false,
				    'parent'  => array(
					    'slug' => 'wpcf7',
				    )
			    ),
		    ) );
	    }
	    return $cfc_fs;
	}
	// Init Freemius.
	cfc_fs();

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
