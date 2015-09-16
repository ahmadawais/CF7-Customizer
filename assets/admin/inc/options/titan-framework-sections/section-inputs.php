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
        'name' => 'Input Fields',

        // Panel
        'panel' => 'CF7 Customizer',

    ) );


    /**
     * Options
     *
     * Options for $cfc_sec_inputs
     *
     */


    // Text Color
    $cfc_sec_inputs->createOption( array(

        'id'          => 'cfc_input_txt_clr',
        'type'        => 'color',

        'name'        => 'Text Color',

        'default'     => '#5b5b5b',

        'livepreview' => '$("#cfc input, #cfc textarea").css("color", value)',
        'css'         => '#cfc input, #cfc textarea{ color: value; }'

    ) );

    // Background Color
    $cfc_sec_inputs->createOption( array(

        'id'          => 'cfc_input_bg_clr',
        'type'        => 'color',

        'name'        => 'Background Color',

        'default'     => '#ffffff',

        'livepreview' => '$("#cfc input, #cfc textarea").css("background-color", value)',
        'css'         => '#cfc input, #cfc textarea{ background-color: value; }'

    ) );

    // Width
    $cfc_sec_inputs->createOption( array(

        'id'      => 'cfc_input_width',
        'type'    => 'radio',

        'options' => array(
                '100%' => 'YES',
                'n' => 'NO'
            ),

        'name'    => 'Make input fields full width?',
        // 'desc'    => 'Adds width in percentage (px) to the submit button',

        'css'         => '#cfc form input, #cfc form textarea{ width: value; }'


    ) );



// End of cfc_options__inputs()
}
