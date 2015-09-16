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
    $cfc_sec_pm = $titan->createThemeCustomizerSection( array(

        // Section
        'name' => 'Padding & Margin',

        // Panel
        'panel' => 'CF7 Customizer',

    ) );


    /**
     * Options
     *
     * Options for $cfc_sec_pm
     *
     */

    // Padding
    $cfc_sec_pm->createOption( array(

        'id'      => 'cfc_padding',
        'type'    => 'number',

        'name'    => 'Padding',
        'desc'    => 'Adds padding in pixels (px) to the form',

        'default' => '0',
        'max'     => '250',

        'css'     => '#cfc { padding: valuepx; }'

    ) );


    // Margin
    $cfc_sec_pm->createOption( array(

        'id'      => 'cfc_margin',
        'type'    => 'number',

        'name'    => 'Margin',
        'desc'    => 'Adds margin in pixels (px) to the form',

        'default' => '0',
        'max'     => '250',

        'css'     => '#cfc { margin: valuepx; }'

    ) );


// End of cfc_options__padding_margin()
}
