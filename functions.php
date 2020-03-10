<?php

function word_work(){
    wp_enqueue_script('jquery',get_theme_file_uri('js/jquery-3.4.1.min.js',NULL,'3.1.1',true));
    wp_enqueue_script('js',get_theme_file_uri('js/js.js',NULL,'3.1.1',true));
    wp_enqueue_style('style_css',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','word_work');
?>
 

