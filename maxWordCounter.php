<?php
/**
 * @package max Word Counter
 * @version 1.0
 */
/*
Plugin Name: Max Word Counter
Plugin URI: http://wordpress.org/plugins/max-word-counter
Description: This is a word counter for the blog posts.
Version: 1.0
Author: Mak Alamin
Author URI: http://makalamin.com
License: GPLv2 or later
Text Domain: maxWordCounter
Domain Path: /languages/
*/

// function maxWordCounter_activation_hook(){}
// register_activation_hook( __FILE__, 'maxWordCounter_activation_hook');

// function maxWordCounter_deactivation_hook(){}
// register_deactivation_hook( __FILE__, 'maxWordCounter_deactivation_hook');

function maxWordCounter_count_words($content){
    $content = strip_tags($content);
    $wordN = str_word_count($content);
    $label = __('Total words','maxWordCounter');

    $content .= sprintf('<p><strong>%s: <span style="color:#239ecd;">%s</span></strong></p>', $label, $wordN );

    return $content;
}
add_filter('the_content', 'maxWordCounter_count_words');