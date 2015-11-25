<?php
/**
 * Section Inputs
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
add_action( 'tf_create_options', 'cfc_options__inputs' );
function cfc_options__inputs() {

    // Initialize Titan
    $titan = TitanFramework::getInstance( 'cfc' );

    /**
     * First Section & Panel Creation
     *
     * Section: $cfc_sec_inputs
     * Panel  :  CF7 Customizer
     *
     */
    $cfc_sec_inputs = $titan->createThemeCustomizerSection( array(

        // Section
        'name' => 'Input Fields Styling',

        // Panel
        'panel' => 'CF7 Customizer',

    ) );


    /**
     * Note
     *
     */
    $cfc_sec_inputs->createOption( array(

        'type' => 'note',
        'desc' => 'Style the input fields of a form by adding width, colors, border, padding and margins.'

    ) );


    /**
     * Option: Input Width
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_width.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_width.php' );
    }


    /**
     * Option: Input Text Color
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_txt_clr.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_txt_clr.php' );
    }


    /**
     * Option: Input Bg Color
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_bg_clr.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_bg_clr.php' );
    }


    /**
     * Option: Input Padding
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_padding.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_padding.php' );
    }


    /**
     * Option: Input Margin
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_margin.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_margin.php' );
    }


    /**
     * Option: Input Font Size
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_font_size.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_font_size.php' );
    }


    /**
     * Option: Input Border
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_border.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_border.php' );
    }


    /**
     * Option: Input Border Radius.
     *
     * @since 1.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_border_radius.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_border_radius.php' );
    }


    /**
     * Option: Input Border Color
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_border_clr.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_input_border_clr.php' );
    }



// End of cfc_options__inputs()
}
