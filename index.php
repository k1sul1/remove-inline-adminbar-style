<?php
/*
Plugin Name: Remove inline adminbar style
Description: Remove inline style that is added by WordPress to make space for the admin bar. Because !important inline margin sucks.
Version: 0.1.1
Author: Christian Nikkanen
Licence: GPL2
*/


add_action('after_setup_theme', function() {
  add_action('get_header', function() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }, 99999999999999);
});
