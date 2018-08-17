<?php
function frodoskabin_theme_setup() {
    add_image_size('frodoskabin-logo', 110, 90);
    add_theme_support('custom-logo', array(
        'size' => 'frodoskabin-logo'
    ));

}

add_action('after_setup_theme', 'frodoskabin_theme_setup');


function smiley_func( $atts ){
    if(empty($atts)){
        return "";
    }

    ob_start();
    ?>


    <a href="<?php echo $atts['url']; ?>" class="smiley-link" target="_blank">
        <img src="<?php echo get_template_directory_uri() . "/img/smiley.gif"; ?>" alt="Smiley rapport"/>
    </a>

    <?php return ob_get_clean();
}
add_shortcode( 'smiley', 'smiley_func' );
