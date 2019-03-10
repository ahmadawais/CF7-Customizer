<?php
/**
 * CFC Main File
 *
 * This is the main file of CFC which controls everything in this plugin.
 *
 * @since   0.0.1
 * @package CFC
 */

/**
 * Welcome Page
 *
 * @since 0.0.1
 */
require_once CFC_DIR . '/assets/admin/inc/welcome/welcome.php';


/**
 * Freemius SDK.
 *
 * Adds freemius SDK for premium stuff.
 *
 * @since 1.0.1
 */
require_once CFC_DIR . '/assets/admin/inc/sdk/cfc_freemius.php';


/**
 * TGMPA.
 *
 * Adds TGMPA for adding required plugins.
 *
 * @source https://github.com/gambitph/Titan-Framework
 * @since 0.0.1
 */
require_once CFC_DIR . '/assets/admin/inc/tgm/cfc_tgm-init.php';

/**
 * TODO: Titan Framework (remove unused classes and embed again).
 *
 * Adds TF for creating options
 *
 * @source https://github.com/gambitph/Titan-Framework
 * @since 0.0.1
 */
require_once CFC_DIR . '/assets/admin/inc/options/titan-framework/titan-framework-embedder.php';

/**
 * Titan Framework.
 *
 * Checks if TF is present if not, asks the user to Adds TF plugin for creating options.
 *
 * @source https://github.com/gambitph/Titan-Framework
 * @since 1.0.2
 */
// if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-checker.php' ) ) {
	// require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-checker.php' );
// }
/**
 * CFC Options
 *
 * Customizer sections, panel and option registrations are done inside this file
 *
 * @since 0.0.1
 */
require_once CFC_DIR . '/assets/admin/inc/options/cfc_options-init.php';


/**
 * Scripts and Styles
 *
 * @since 0.0.1
 */
require_once CFC_DIR . '/assets/inc/cfc_scripts_styles.php';
