<?php
/**
 * Plugin Name: Custom Post 
 * Plugin URI: https://www.google.com
 * Description: Custom post add.
 * Version: 0.0.1
 * Author: Yogesh Kashyap
 * Author URI: https://www.google.com 
 */

 define('CUSTOM_POST_PLUGIN_DIR',plugin_dir_path(__FILE__));

require_once(CUSTOM_POST_PLUGIN_DIR . 'class.menu.php');
require_once(CUSTOM_POST_PLUGIN_DIR . 'class.form.php');