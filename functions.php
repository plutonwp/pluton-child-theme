<?php
// Load the parent style.css file
function pluton_child_enqueue_parent_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() .'/style.min.css' );
}
add_action( 'wp_enqueue_scripts', 'pluton_child_enqueue_parent_style' );