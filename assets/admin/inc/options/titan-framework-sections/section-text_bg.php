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
     * Section: $cfc_sec_txtbg
     * Panel  : CF7 Customizer
     *
     */
    $cfc_sec_txtbg = $titan->createThemeCustomizerSection( array(

        // Name the options menu
        'name' => 'Text & Background',

        // Name of the panel where all sections will be present
        'panel' => 'CF7 Customizer',

    ) );


    /**
     * Create the options for $cfc_sec_txtbg
     *
     * Now we will create options for our section that we just created called $cfc_section
     *
     */

    // Text Color
    $cfc_sec_txtbg->createOption( array(

        'id'          => 'cfc_txt_clr',
        'type'        => 'color',
        'name'        => 'Text Color',
        'default'     => '#000000',
        'livepreview' => '$("#cfc, #cfc .wpcf7-quiz-label").css("color", value)',
        'css'         => '#cfc, #cfc .wpcf7-quiz-label { color: value; }'

    ) );

    // Background Color
    $cfc_sec_txtbg->createOption( array(

        'id'          => 'cfc_bg_clr',
        'type'        => 'color',

        'name'        => 'Background Color',

        'default'     => '#ffffff',

        'livepreview' => '$("#cfc").css("background-color", value)',
        'css'         => '#cfc { background-color: value; }'

    ) );

    // Background Image
    $cfc_sec_txtbg->createOption( array(

        'id'          => 'cfc_bg_img',
        'type'        => 'upload',

        'name'        => 'Background Image',
        'desc'        => 'Upload background image',

        'livepreview' => '$("#cfc").css( "background-image", "url( " + value + " )" )',
        'css'         => '#cfc { background-image: value; }'

    ) );


}
