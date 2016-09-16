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


function backdraft_trashed_post( $post_id ){
    global $wpdb;
    $result = $wpdb->update(
        $wpdb->postmeta,
        array(
            'meta_value' => 'draft'
        ),
        array(
            'post_id' => $post_id,
            'meta_key' => '_wp_trash_meta_status'
        )
    );
}
add_action( 'trashed_post', 'backdraft_trashed_post' );