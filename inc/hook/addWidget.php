<?php
function widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer Left', 'test' ),
        'id' => 'footer-left',
        'before_widget' => '<div class="footer-list footer-left">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Right', 'test' ),
        'id' => 'footer-right',
        'before_widget' => '<div class="footer-list footer-right">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
}
add_action( 'widgets_init', 'widgets_init' );