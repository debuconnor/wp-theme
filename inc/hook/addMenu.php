<?php
function register_menus(){
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
    ));
}
add_action('init', 'register_menus');