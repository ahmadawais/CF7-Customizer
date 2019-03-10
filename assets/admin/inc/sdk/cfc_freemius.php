<?php
/**
 * Freemius configuration file
 *
 * File to add the SDK for freemius.
 *
 * @package CFC
 * @since   1.0.1
 */

if ( file_exists( CFC_DIR . '/assets/admin/inc/sdk/freemius/start.php' ) ) {

	/**
	 * Freemius SDK.
	 *
	 * Create a helper function for easy SDK access.
	 *
	 * @since 1.0.1
	 */
	function cfc_fs() {
		global $cfc_fs;
		if ( ! isset( $cfc_fs ) ) {
			// Include Freemius SDK.
			require_once CFC_DIR . '/assets/admin/inc/sdk/freemius/start.php';
			$cfc_fs = fs_dynamic_init(
				array(
					'id'             => '91',
					'slug'           => 'cf7-customizer',
					'public_key'     => 'pk_0b419183244d583e3b33a7736921c',
					'is_live'        => true,
					'is_premium'     => false,
					'has_addons'     => false,
					'has_paid_plans' => false,
					'menu'           => array(
						'slug'    => 'cfc_welcome_page',
						'account' => false,
						'contact' => false,
						// 'support' => false,
						'pricing' => false,
						'parent'  => array(
							'slug' => 'wpcf7',
						),
					),
					'permissions'    => array(
						'newsletter' => true,
					),
				)
			);
		}
		return $cfc_fs;
	}
	// Init Freemius.
	cfc_fs();
}
