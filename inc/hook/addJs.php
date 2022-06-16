<?php
function add_test_js(){
    wp_enqueue_script('script', get_template_directory_uri() . '/js/test.js', array('jquery'), 0.1, true);
}
add_action('wp_enqueue_scripts', 'add_test_js');