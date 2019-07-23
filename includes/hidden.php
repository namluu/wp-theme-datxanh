<?php
add_filter('show_admin_bar', '__return_false');
remove_action('wp_head','wp_generator');
add_filter( 'emoji_svg_url', '__return_false' );
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
add_action( 'wp_print_styles', function() {
wp_dequeue_style( 'wp-block-library' );
}, 100 );
add_action( 'wp_footer', function() {
wp_deregister_script( 'wp-embed' );
});
add_filter('the_generator', '__return_empty_string');
function shapeSpace_remove_version_scripts_styles($src) {
if (strpos($src, 'ver=')) {
$src = remove_query_arg('ver', $src);
}
return $src;
}
add_filter('style_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);