<?php
/**
 * Section Padding & Margin
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
add_action( 'tf_create_options', 'cfc_options__padding_margin' );
function cfc_options__padding_margin() {

    // Initialize Titan
    $titan = TitanFramework::getInstance( 'cfc' );

    /**
     * First Section & Panel Creation
     *
     * Section: $cfc_sec_pm
     * Panel  :  CF7 Customizer
     *
     */
    $cfc_sec_pmb = $titan->createThemeCustomizerSection( array(

        // Section
        'name' => 'Form Padding, Margin & Border',

        // Panel
        'panel' => 'CF7 Customizer',

    ) );


    /**
     * Note
     *
     */
    $cfc_sec_pmb->createOption( array(

        'type' => 'note',
        'desc' => 'Add padding, margin and border to your form and customize the border color.'

    ) );


    /**
     * Option: Padding
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_padding.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_padding.php' );
    }


    /**
     * Option: Margin
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_margin.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_margin.php' );
    }


    /**
     * Option: Border
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_border.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_border.php' );
    }


    /**
     * Option: Border Radius.
     *
     * @since 1.0.1
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_border_radius.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_border_radius.php' );
    }

    /**
     * Option: Border Color
     *
     * @since 0.0.1
     *
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_border_clr.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_border_clr.php' );
    }




// End of cfc_options__padding_margin()
}
