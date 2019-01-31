<?php
function landingpagedesignagency_scripts() {
wp_enqueue_style('landingpagedesignagency_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'landingpagedesignagency_scripts');

?>