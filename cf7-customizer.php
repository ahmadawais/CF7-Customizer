<?php
/**
 * Plugin Name: CF7 Customizer
 * Plugin URI: http://WPTie.com/
 * Description: Customize Contact Form 7 forms with live theme customizer.
 * Author: mrahmadawais, WPTie
 * Author URI: http://WPTie.com/
 * Version: 1.0.4
 * License: GPL v2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CFC
 */

/*
    Copyright 2015-2020 WPTie ( email: support at wptie.com )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    ( at your option ) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * Define global constants.
 *
 * @package CFC
 * @since 0.0.1
 */

// Plugin version.
if ( ! defined( 'CFC_VERSION' ) ) {
    define( 'CFC_VERSION', '1.0.4' );
}

if ( ! defined( 'CFC_NAME' ) ) {
    define( 'CFC_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

if ( ! defined('CFC_DIR' ) ) {
    define( 'CFC_DIR', WP_PLUGIN_DIR . '/' . CFC_NAME );
}

if ( ! defined('CFC_URL' ) ) {
    define( 'CFC_URL', WP_PLUGIN_URL . '/' . CFC_NAME );
}

// Assets Path.
$cft_assets  = CFC_URL . '/assets/';


/**
 * CFC Main File.
 *
 * This is the main file of CFC which controls everything in this plugin.
 *
 * @since 0.0.1
 */
if ( file_exists( CFC_DIR . '/assets/inc/cfc.php' ) ) {
    require_once( CFC_DIR . '/assets/inc/cfc.php' );
}

// Commented since freemius takes care of the redirect.
// Makes no sense to make a duplicate redirect.
/**
 * Plugin Activation.
 *
 * Add the welcome page transient.
 *
 * @since 0.0.1
 * @package CFC
 */


/*
// The register_activation_hook( __FILE__, 'cfc_welcome_screen_activate' ); hook.
function cfc_welcome_screen_activate() {
  set_transient( '_welcome_redirect_cfc', true );
}
*/


/**
 * Plugin Deactivation.
 *
 * Delet the welcome page transient.
 *
 * @since   0.0.1
 * @package CFC
 */

/*
// The register_deactivation_hook( __FILE__, 'cfc_welcome_screen_deactivate' ); hook.
function cfc_welcome_screen_deactivate() {

  delete_transient( '_welcome_redirect_cfc' );
}
*/
