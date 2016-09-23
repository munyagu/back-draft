<?php
/*
Plugin Name: Backdraft
Plugin URI: http://munyagu.com/
Description: Set post status 'draft' when restore from trash box.
Version: 1.0.2
Author: munyagu
Author URI: http://munyagu.com/
License: GPL2
*/


function backdraft_untrash_post($post_id){
    update_post_meta($post_id, '_wp_trash_meta_status', 'draft');
}
add_action( 'untrashed_post', 'backdraft_untrash_post' );