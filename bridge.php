<?php
/*
 Plugin Name: WHMCS Bridge
 Plugin URI: http://i-plugins.com
 Description: WHMCS Bridge is a plugin that integrates the powerfull WHMCS support and billing software with Wordpress.
 Author: zingiri, globalprogramming
 Version: 3.1.4
 Author URI: http://i-plugins.com/
 */

require(dirname(__FILE__).'/bridge.init.php');
register_activation_hook(__FILE__,'cc_whmcs_bridge_activate');
register_deactivation_hook(__FILE__,'cc_whmcs_bridge_deactivate');