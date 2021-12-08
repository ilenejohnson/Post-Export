<?php
/*
Plugin Name: Post Export
Plugin URI: https://ikjweb.com/
Description: Plugin let user select posts to export
Version: 1.0
Author: Ilene Johnson
Author URI: https://ikjweb.com
License: GPLv2 or later
Text Domain: select_post_export
 */



define('WP_P_EXPORT', __FILE__);
define('WP_P_EXPORT_DIR', untrailingslashit(dirname(WP_P_EXPORT)));

if (!defined('WPINC')) {
    die;
}
require_once(WP_P_EXPORT_DIR . '/includes/post-export-options.php');
