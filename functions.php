<?php
//Remove Woocommerce Content Before & After Main Content
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
//Adding Canape Child Theme Starter Container
function canape_child_wrapper_start() {
  echo '<div id="primary" class="content-area"><div id="main" class="site-main" role="main">';
}
add_action('woocommerce_before_main_content', 'canape_child_wrapper_start', 10);
//Adding Canape Child Theme Ending Container
function canape_child_wrapper_end() {
  echo '</div></div>';
}
add_action('woocommerce_after_main_content', 'canape_child_wrapper_end', 10);
//Declare Woocommerce Support
function canape_child_wc_support() {
add_theme_support( 'woocommerce');	
}
add_action( 'after_setup_theme', 'canape_child_wc_support' );
?>
