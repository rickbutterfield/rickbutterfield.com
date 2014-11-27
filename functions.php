<?php

//Deregister head
function remove_head() {
  wp_deregister_script('jquery');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'rel_canonical');
  remove_action('wp_head', 'rsd_link');
}

add_action("wp_enqueue_scripts", "remove_head", 11);



//Add featured images
add_theme_support('post-thumbnails');

?>