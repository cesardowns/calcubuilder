<?php
/*
Plugin Name: Calcubuilder
Plugin URI:
Description: WordPress Calculator Builder
Version:     0.1
Author:      Cesar Correchel Downs
Author URI:  http://www.cesardowns.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
*/

// -- plugin's constants --

define('CLCBUILDER_VERSION', '0.1');
define('CLCBUILDER_REQUIREDWP_VERSION', '4.6');
define('CLCBUILDER_PLUGIN', __FILE__ );
define('CLCBUILDER_PLUGIN_BASENAME', plugin_basename( CLCBUILDER_PLUGIN ) );
define('CLCBUILDER_PLUGIN_NAME', trim( dirname( CLCBUILDER_PLUGIN_BASENAME ), '/' ) );
define('CLCBUILDER_PLUGIN_DIR', untrailingslashit( dirname( CLCBUILDER_PLUGIN ) ));
