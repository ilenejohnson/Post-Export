<?php
/*
Plugin Name: Select Post Export
Plugin URI: https://github.com/ilenejohnson/Post-Export
Description: Plugin to let user select individual posts to export via the post listing
Version: 1.0
Requires at least: 5.5
Requires PHP: 7.2
Author: Ilene Johnson
Author URI: https://ikjweb.com
License: GPLv2 or later
Text Domain: select_post_export


Select Post Export is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Select Post Export is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Select Post Export. If not, see {URI to Plugin License}.
 */



define('WP_P_EXPORT', __FILE__);
define('WP_P_EXPORT_DIR', untrailingslashit(dirname(WP_P_EXPORT)));

if (!defined('WPINC')) {
    die;
}
require_once(WP_P_EXPORT_DIR . '/includes/post-export-options.php');
