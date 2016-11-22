<?php
/*
Plugin Name: Remove inline adminbar style
Description: Remove inline style that is added by WordPress to make space for the admin bar. Because !important inline margin sucks.
Version: 0.1
Author: Christian Nikkanen
Licence: GPL2
*/

namespace k1sul1;

add_action('get_header', 'remove_inline_style');

function remove_inline_style() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}
