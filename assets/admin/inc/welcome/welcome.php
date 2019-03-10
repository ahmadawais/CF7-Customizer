<?php
/**
 * Welcome Page Class.
 *
 * @since 0.0.1
 * @package CFC
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit; }


/**
 * cfc_welcome_screen_do_activation_redirect.
 *
 * Check if we need to redirect or not.
 *
 * @since 0.0.1
 */
add_action( 'admin_init', 'cfc_welcome_screen_do_activation_redirect' );
function cfc_welcome_screen_do_activation_redirect() {
	// Bail if no activation redirect
	if ( ! get_transient( '_welcome_redirect_cfc' ) ) {
		return;
	}

	// Delete the redirect transient
	delete_transient( '_welcome_redirect_cfc' );

	// Bail if activating from network, or bulk
	if ( is_network_admin() || isset( $_GET['activate-multi'] ) ) {
		return;
	}

	// Redirect to Welcome page
	wp_safe_redirect( add_query_arg( array( 'page' => 'cfc_welcome_page' ), admin_url( 'admin.php' ) ) );

}


/**
 * cfc_welcome_screen_page
 *
 * Add the welcome page inside wpcf7 menu
 *
 * @since 0.0.1
 */
add_action( 'admin_menu', 'cfc_welcome_screen_page' );
function cfc_welcome_screen_page() {
	add_submenu_page(
		'wpcf7',
		__( 'CF7Customizer', 'CFC' ),
		__( 'CF7Customizer', 'CFC' ),
		'read',
		'cfc_welcome_page',
		'cfc_welcome_screen_content'
	);
}


/**
 * cfc_welcome_screen_content
 *
 * Welcome page content
 *
 * @since 0.0.1
 */
function cfc_welcome_screen_content() {

	// Welcome Page
	if ( file_exists( CFC_DIR . '/assets/admin/inc/welcome/welcome_page.php' ) ) {
		require_once CFC_DIR . '/assets/admin/inc/welcome/welcome_page.php';
	}
}


/**
 * Admin CSS for Welcome Page
 *
 * @since 0.0.1
 * @package CFC
 */

/**
 *
 * Admin Dynamic CSS
 */
function cfc_welcome_admin_css() {
	$aa_fb_img  = plugins_url( '/img/fb.png', __FILE__ );
	$aa_twt_img = plugins_url( '/img/twt.png', __FILE__ );
	$aa_ggl_img = plugins_url( '/img/ggl.png', __FILE__ );
	$aa_pin_img = plugins_url( '/img/pin.png', __FILE__ );
	$aa_yt_img  = plugins_url( '/img/yt.png', __FILE__ );
	$aa_li_img  = plugins_url( '/img/li.png', __FILE__ );

	echo '
      <style>
            /* Welcome Page */
            .cfc_logo{
              background-image: url(' . CFC_URL . '/assets/admin/inc/welcome/assets/img/logo.png);
              background-repeat: no-repeat;
              background-size: contain;
                font-size: 14px;
                text-align: center;
                font-weight: 600;
                margin: 25px 0 0;
                padding-top: 120px;
                height: 10rem;
                display: inline-block;
                width: 10rem;
                text-rendering: optimizeLegibility;
                -webkit-box-shadow: none;
                position: absolute;
                    top: -5rem;
                    right: 0;
            }

            .cfc_subscribe {
                display: table;
                width: 100%;
                padding: 3rem;
                background-color: #0092F9;
                color: #fff;
                box-sizing: border-box;
            }

            .cfc_subscribe__first{
              display: table-cell;
              width: 30%;
              vertical-align: middle;
            }
            .cfc_subscribe__second{
              display: table-cell;
              width: 70%;
              vertical-align: middle;
            }

      </style>';
}
add_action( 'admin_head', 'cfc_welcome_admin_css' );
