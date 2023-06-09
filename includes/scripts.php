<?php

    if ( ! function_exists( 'mos_scripts' ) ) :
        function mos_scripts() {
            wp_enqueue_script( 'mos-front', get_stylesheet_directory_uri() . '/assets/js/front.js', array(), false, true );
            wp_enqueue_script( 'mos-testim', get_stylesheet_directory_uri() . '/assets/js/testim.js', array(), false, true );
            wp_enqueue_script( 'mos-menu', get_stylesheet_directory_uri() . '/assets/js/menu.js', array(), false, true );
        }
    endif;
