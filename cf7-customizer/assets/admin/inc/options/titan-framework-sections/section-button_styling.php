<?php
/**
 * Section Button
 *
 * Creating customizer options via TF
 *
 * Getting started      : http://www.titanframework.net/get-started/
 * Customizer           : http://www.titanframework.net/theme-customizer-section/
 * Options              : http://www.titanframework.net/docs/
 * Getting Option Values: http://www.titanframework.net/getting-option-values/
 * Live preview         : http://www.titanframework.net/livepreview-parameter/
 *
 * @since 0.0.1
 * @package CFC
 *
 */


/**
 *
 * tf_create_options is the hook used to create options
 *
 */
add_action( 'tf_create_options', 'cfc_options__button' );
function cfc_options__button() {

    // Initialize Titan
    $titan = TitanFramework::getInstance( 'cfc' );

    /**
     * First Section & Panel Creation
     *
     * Section: $cfc_sec_btn
     * Panel  :  CF7 Customizer
     *
     */
    $cfc_sec_btn = $titan->createThemeCustomizerSection( array(

        // Section
        'name' => 'Button Styling',

        // Panel
        'panel' => 'CF7 Customizer',

    ) );


    /**
     * Note
     *
     */
    $cfc_sec_btn->createOption( array(

        'type' => 'note',
        'desc' => 'Customize the form button with colors, border, even change the hover state colors.'

    ) );

    /**
     * Option: Button Width
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_width.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_width.php' );
    }



    /**
     * Option: Button Text Color
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_txt_clr.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_txt_clr.php' );
    }


    /**
     * Option: Button BG Color
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_bg_clr.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_bg_clr.php' );
    }


    /**
     * Option: Button Hover Text Color
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_hover_txt_clr.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_hover_txt_clr.php' );
    }


    /**
     * Option: Button Hover BG Color
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_hover_bg_clr.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_hover_bg_clr.php' );
    }


    /**
     * Option: Button Border
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_border.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_border.php' );
    }


    /**
     * Option: Button Border Radius.
     *
     * @since 1.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_border_radius.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_border_radius.php' );
    }


    /**
     * Option: Button Border Color
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_border_clr.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_border_clr.php' );
    }


    /**
     * Option: Button Hover Border Color
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_border_hover_clr.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_btn_border_hover_clr.php' );
    }


// End of cfc_options__button()
}
