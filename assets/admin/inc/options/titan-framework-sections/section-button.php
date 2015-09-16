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
        'name' => 'Button Style',

        // Panel
        'panel' => 'CF7 Customizer',

    ) );


    /**
     * Options
     *
     * Options for $cfc_sec_btn
     *
     */


    // Text Color
    $cfc_sec_btn->createOption( array(

        'id'          => 'cfc_btn_txt_clr',
        'type'        => 'color',

        'name'        => 'Button Text Color',

        'default'     => '#fff',

        'livepreview' => '$("#cfc .wpcf7-submit").css("color", value)',
        'css'         => '#cfc .wpcf7-submit{ color: value; }'

    ) );

    // Background Color
    $cfc_sec_btn->createOption( array(

        'id'          => 'cfc_btn_bg_clr',
        'type'        => 'color',

        'name'        => 'Button Background Color',

        'default'     => '#000000',

        'livepreview' => '$("#cfc .wpcf7-submit").css("background-color", value)',
        'css'         => '#cfc .wpcf7-submit{ background-color: value; }'

    ) );

    // Width
    $cfc_sec_btn->createOption( array(

        'id'      => 'cfc_btn_width',
        'type'    => 'radio',

        'options' => array(
                '100%' => 'YES',
                'auto' => 'NO'
            ),

        'name'    => 'Full Width Button',
        // 'desc'    => 'Adds width in percentage (px) to the submit button',

        'css'         => '#cfc .wpcf7-submit{ width: value; }'


    ) );




// End of cfc_options__button()
}
