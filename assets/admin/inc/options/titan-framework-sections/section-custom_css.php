<?php
/**
 * Section Custom CSS.
 *
 * Creating customizer options via TF.
 *
 * Getting started      : http://www.titanframework.net/get-started/
 * Customizer           : http://www.titanframework.net/theme-customizer-section/
 * Options              : http://www.titanframework.net/docs/
 * Getting Option Values: http://www.titanframework.net/getting-option-values/
 * Live preview         : http://www.titanframework.net/livepreview-parameter/
 *
 * @since 1.0.1
 * @package CFC
 */


/**
 *
 * tf_create_options is the hook used to create options.
 *
 */
add_action( 'tf_create_options', 'cfc_options__custom_css' );
function cfc_options__custom_css() {

    // Initialize Titan.
    $titan = TitanFramework::getInstance( 'cfc' );

    /**
     * First Section & Panel Creation.
     *
     * Section: $cfc_sec_ccss
     * Panel  : CF7 Customizer
     *
     */
    $cfc_sec_ccss = $titan->createThemeCustomizerSection( array(

        // Section
        'name' => 'Custom CSS',

        // Panel
        'panel' => 'CF7 Customizer',

    ) );


    /**
     * Note
     *
     */
    $cfc_sec_ccss->createOption( array(

        'type' => 'note',
        'desc' => 'Use this area to add custom CSS if you know what you are doing.'

    ) );

    /**
     * Option: Code Custom CSS.
     *
     * @since 1.0.1
     */
    if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_code_custom_css.php' ) ) {
        require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-options/cfc_code_custom_css.php' );
    }



// End of cfc_options__custom_css()
}
