<?php
/**
 * Section Text & Color
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
add_action( 'tf_create_options', 'cfc_options__txt_bg' );
function cfc_options__txt_bg() {

    // Initialize Titan
    $titan = TitanFramework::getInstance( 'cfc' );

    /**
     * First Section & Panel Creation
     *
     * Section: $cfc_sec_form_style
     * Panel  : CF7 Customizer
     *
     */
    $cfc_sec_form_txt_bg = $titan->createThemeCustomizerSection( array(

        // Name the options menu
        'name' => 'Form Text & BG Colors',

        // Name of the panel where all sections will be present
        'panel' => 'CF7 Customizer',

    ) );


    /**
     * Note
     *
     */
    $cfc_sec_form_txt_bg->createOption( array(

        'type' => 'note',
        'desc' => 'Customize form\'s text color, background color, add a background image or change the font-size.'

    ) );


    /**
     * Option: Text Color
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_txt_clr.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_txt_clr.php' );
    }


    /**
     * Option: Background Color
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_bg_clr.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_bg_clr.php' );
    }


    /**
     * Option: Background Image
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_bg_img.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_bg_img.php' );
    }


    /**
     * Option: Font Size
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_font_size.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_font_size.php' );
    }

}
